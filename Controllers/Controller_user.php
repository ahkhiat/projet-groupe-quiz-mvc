<?php

class Controller_user extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }
    public function action_home()
    {
        $this->render('home');
    }


    public function action_all_users()
    {
        $m=User::get_model();
        $data=['users'=>$m->get_all_users()];
        $this->render("all_users",$data);

    }
    public function action_user_profile()
    {
        $m=User::get_model();
        $data=['user'=>$m->get_user_profile()];
        $this->render("user_profile", $data);
    }

    public function action_user_profile_edit()
    {  
        $m=User::get_model();
        $data=['user'=>$m->get_user_profile()];
        $this->render("user_profile_edit", $data);
    }
    public function action_user_profile_edit_request()
    {  
        $m=User::get_model();
        $data=['users'=>$m->set_user_profile(),
               'user'=>$m->get_user_profile()];
        $this->render("user_profile", $data);
    }

    public function action_public_profile()
    {
        $m=User::get_model();
        $data=['user'=>$m->get_public_profile()];
        $this->render("public_profile", $data);
    }
    public function action_leaderboard()
    {
        $m=User::get_model();
        $data=['users'=>$m->get_leaderboard()];
        $this->render("leaderboard", $data);
    }

    public function action_profile_picture(){
        if(isset($_FILES["img_input"]["username"])){
            $id = $_POST["user_id"];
            $username = $_POST["username"];

            $imageName = $_FILES["img_input"]["username"];
            $imageSize = $_FILES["img_input"]["size"];
            $tmpName = $_FILES["img_input"]["tmp_name"];

            //image validation
            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $imageName);
            $imageExtension = strtolower(end($imageExtension));
            if(!in_array($imageExtension, $validImageExtension)){
                echo 
                "
                <script>
                    alert('Format d'image invalide ! jpg jpeg et png acceptés !')
                    document.location.href = '../updateimageprofile'
                </script>
                ";
            } elseif ($imageSize > 1200000){
                echo 
                "
                <script>
                    alert('Image trop lourde ! 1,2 Mo max !')
                    document.location.href = '../updateimageprofile'
                </script>
                ";
            } else {
                $newImageName = $username." - ".date('Y.m.d')." - ".date('h.i.sa');
                $newImageName.-".".$imageExtension;
                $m=User::get_model();
                $m->set_profile_picture($newImageName);
                move_uploaded_file($tmpName, 'Public/img' . $newImageName);
                echo 
                "
                <script>
                    document.location.href = '../updateimageprofile'
                </script>
                ";

            }
            
        }
    }

    

}
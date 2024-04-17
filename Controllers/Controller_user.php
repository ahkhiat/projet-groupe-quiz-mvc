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
        $data=['user'=>$m->get_user_profile(),
               'followers'=>$m->get_followers_number(),
               'followed'=>$m->get_followed_number()];
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
        $data=['user'=>$m->get_public_profile(),
               'followers'=>$m->get_followers_number_public(),
               'followed'=>$m->get_followed_number_public()];
        $this->render("public_profile", $data);
    }
    public function action_leaderboard()
    {
        $m=User::get_model();
        $data=['users'=>$m->get_leaderboard()];
        $this->render("leaderboard", $data);
    }

    public function action_all_followers()
    {
        $m=User::get_model();
        $data=['follow'=>$m->get_all_followers(),
               'message'=>'Liste des abonnés'];
        $this->render("all_follow", $data);
    }

    public function action_all_followed()
    {
        $m=User::get_model();
        $data=['follow'=>$m->get_all_followed(),
               'message'=>'Liste des abonnments'];
        $this->render("all_follow", $data);
    }

    public function action_follow()
    {
        $m=User::get_model();
        $data=['users'=>$m->set_follow()];
        $this->action_public_profile();
    }


    public function action_profile_picture()
    {

        if(isset($_FILES["img_input"]["name"])){
            $user_id = $_POST["user_id"];
            $username = $_POST["username"];

            $imageName = $_FILES["img_input"]["name"];
            $imageSize = $_FILES["img_input"]["size"];
            $tmpName = $_FILES["img_input"]["tmp_name"];

            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($finfo, $tmpName);

            //image validation by type & by MIME
            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $validMimeType = ["image/jpeg", "image/jpg", "image/gif", "image/png", "image/svg+xml"];
            
            $imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

            if(
                (
                !in_array($imageExtension, $validImageExtension) &&
                !in_array($mimeType, $validMimeType)
                ) || $mimeType == 'application/x-empty') {

                echo 
                "
                <script>
                    alert('Format d\'image invalide ! jpg jpeg et png acceptés !')
                    document.location.href = '?controller=user&action=user_profile'
                </script>
                ";
            } elseif ($imageSize > 1200000){
                echo 
                "
                <script>
                    alert('Image trop lourde ! 1,2 Mo max !')
                    document.location.href = '?controller=user&action=user_profile'
                </script>
                ";
            } else {

                $m=User::get_model();
                $oldImageName = $m->get_profile_picture($user_id);

                var_dump($oldImageName);
                

                // Delete old image if exists
                if($oldImageName !== null && file_exists('Public/img/' . $oldImageName)) {
                    unlink('Public/img/' . $oldImageName);
                }

                $newImageName = $username."_".date('Y.m.d')."_".date('h.i.sa');
                $newImageName.=".".$imageExtension;
                $m=User::get_model();
                $m->set_profile_picture($newImageName);
                move_uploaded_file($tmpName, 'Public/img/' . $newImageName);
                echo 
                "
                <script>
                    document.location.href = '?controller=user&action=user_profile'
                </script>
                ";

            }
            
        }
    }

    

}
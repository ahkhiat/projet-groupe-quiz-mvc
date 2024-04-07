<?php

class Controller_security extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

// ......................connection.......................

    public function action_user_connection()
        {
            $this->render('user_connection');
        }

//...............login......................

    public function action_login_connection()

     {   
        if(isset($POST['submit_form_connection'])){
            $m=Security::get_model();
            $user= $m->get_login_connection();
            if ($user){
                $user_id = $user->user_id;
                $email = $user->email;
                $roles = $user->admin;
                $pswd = $user->pswd;
                $lastname = $user->lastname;
                $firstname = $user->firstname;
                $username = $user->username;
                if (session_status() !=PHP_SESSION_ACTIVE){
                 session_start();
                }
                // session-start();
                $_SESSION['user_id']= $user_id;
                $_SESSION['email']= $email;
                $_SESSION['admin']=$roles;
                $_SESSION['pswd']= $pswd;
                $_SESSION['lastname']= $lastname;
                $_SESSION['firstname']= $firstname;
                $_SESSION['username']= $username;
                $_SESSION['login']= true;
                 if($_SESSION['roles'] !='user'){
                    header('location: index.php?type=admin');
                 } else{
                    header('location: index.php?type=user');
                 }

            }
            $this->render("user_connection");
        }
    //     echo "je suis dans controller login connection";
    //     $m=Security::get_model();
    //     $data = ['identification'=>$m->get_login_connection()];
    //     $this->render("login_connection",$data);
        
    }

//.............................disconnection...............................

    public function action_disconnection()
    {
        $this->render('disconnection');
    }
// ...........make registration.............
    public function action_user_registration()
    {
    $this->render('user_registration');
    }

//.........................registration valid.............................

    public function action_user_registration_valid()
    {    
             
        $m=Security::get_model();
        $data = ['identification'=>$m->get_user_registration_valid()];

        if($data){

            $email = $_POST['email'];
            $data = ['identification'=>$m->get_login_connection()];

        }

        $this->render("login_connection", $data);
        
    }


    
}
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

// ......................connection.......................;;;;
    public function action_user_connection()
        {
            $this->render('user_connection');
        }

//...............login......................

    public function action_login_connection()

    {
        echo "je suis dans controller login connection";
        $m=Security::get_model();
        $data = ['identification'=>$m->get_login_connection()];
        $this->render("login_connection",$data);
        
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
    
    // $email = $_POST['email'];
    // $password= $_POST['password'];
    // $lastname = $_POST['lastname'];
    // $firstname = $_POST['firstname'];
    // $username = $_POST['username'];
    // $birthdate = $_POST['birthdate'];


        $m=Security::get_model();
        $data = ['identification'=>$m->get_user_registration_valid()];
        $this->render("login_connection",$data);
        
    }


    
}
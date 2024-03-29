<?php

class Controller_question extends Controller
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
public function action_User_connetion()
    {
        $this->render('User_connetion');
    }
//...............login......................
public function action_login_connetion()
    
{

$m=Model::get_model();
$data = ['identification'=>$m->get_login_connetion()];
    $this->render("login_connetion",$data);
    
}
public function action_disconnetion()
{
    $this->render('disconnetion');
}
// ...........make registration.............
public function action_User_registration()
{
$this->render('User_registration');
}
public function action_User_registration_valid()
{    
 
// $email = $_POST['email'];
// $password= $_POST['password'];
// $lastname = $_POST['lastname'];
// $firstname = $_POST['firstname'];
// $username = $_POST['username'];
// $birthdate = $_POST['birthdate'];


$m=Model::get_model();
$data = ['utilisateur'=>$m->get_User_registration_valid()];
    $this->render("login_connetion",$data);
    
}    

    
}
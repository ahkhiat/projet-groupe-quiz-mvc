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

    public function action_login()

    {
        $m=Security::get_model();
<<<<<<< HEAD
        $data = ['identification'=>$m->get_login()];
=======
        $data = ['user'=>$m->get_login()];
>>>>>>> 9b7f7b61f62d7c1d2d9a535dea10431ac4f3f327
        $this->render("login",$data);
        
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

    // ancienne version

    // public function action_user_registration_valid()
    // {    
             
    //     $m=Security::get_model();
    //     $data = ['identification'=>$m->get_user_registration_valid()];

    //     if($data){

<<<<<<< HEAD
            $email = $_POST['email'];
            $data = ['identification'=>$m->get_login($email)];
=======
    //         $email = $_POST['email'];
    //         $data = ['identification'=>$m->get_login_connection($email)];
>>>>>>> 9b7f7b61f62d7c1d2d9a535dea10431ac4f3f327

    //     }

<<<<<<< HEAD
        $this->render("login", $data);
=======
    //     $this->render("login_connection", $data);
>>>>>>> 9b7f7b61f62d7c1d2d9a535dea10431ac4f3f327
        
    // }

    // version Nadia 15 04 2024
    public function action_user_registration_valid()
    {   
        if(isset($_POST['submit_registration']))
        {
            if (!empty($_POST['lastname']) && 
                !empty($_POST['firstname']) && 
                !empty($_POST['username']) && 
                !empty($_POST['birthdate']) &&
                !empty($_POST['email']) && 
                !empty($_POST['password']))
                {
                    if(strlen($_POST['password']) < 11) {
                        $message = " ";
                        echo "<script>alert('Votre mot de passe est trop court.');</script>";
                        }

                    $data=''; // initialiser la variable data a vide
                    if(empty($message)) {
                    // Registration is OK. 
                        $email = $_POST['email'];

                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "<script>alert('L\'adresse e-mail n\'est pas valide.');</script>";
                            return;
                        }
                        
                        // Validation du mot de passe
                        $password = $_POST['password'];
                        if (!preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*[a-zA-Z]).{11,}$/', $password)) {
                            // echo "<script>alert('Votre mot de passe doit contenir au moins une lettre majuscule, un caractère spécial et avoir une longueur d\'au moins 11 caractères.');</script>";
                            $message = 'Votre mot de passe doit contenir au moins une lettre majuscule, un caractère spécial et avoir une longueur d\'au moins 11 caractères.';
                            $this->action_error($message);
                            // return;
                        }
                        
                        // Validation de la date de naissance (format YYYY-MM-DD)
                        $birthdate = $_POST['birthdate'];
                        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $birthdate)) {
                            echo "<script>alert('La date de naissance n\'est pas au bon format. Utilisez YYYY-MM-DD.');</script>";
                            return;
                        }

                        $m = Security::get_model();
                        $data = ['identification'=>$m->get_user_registration_valid()];

                            if($data){
                                $email = $_POST['email'];
                                $data = ['user'=>$m->get_login($email)];
                            }
                    
                    } else {
                    // Sinon, afficher le message d'erreur
                    echo $message;
                    }
            } else {
                echo "<script>alert('Veuillez compléter tous les champs !');</script>";
            }
        }
    
        $this->render('login', $data);
    }

    
}
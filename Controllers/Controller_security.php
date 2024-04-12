<?php
// require_once(__DIR__ . '/../Utils/valid_data.php');

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
                
                $data = ['user'=>$m->get_login()];
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
                 // Initialiser le message à vide
    
                if(strlen($_POST['password']) < 11) {
                    $message = " ";
                    echo "<script>alert('Votre mot de passe est trop court.');</script>";
                }
                  $data=''; // initialiser la variable data a vide
                if(empty($message)) {
                    // Si le message est toujours vide, tous les champs sont remplis correctement
                    echo "<script>alert('Tous les champs sont bien remplis');</script>";
                    $m = Security::get_model();
                    $data = ['identification' => $m->get_user_registration_valid()];
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
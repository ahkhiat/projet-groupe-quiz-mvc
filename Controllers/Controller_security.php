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
                
                $data = ['identification'=>$m->get_login()];
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

//...................................function validData pour la securité des données recuperées dans les input........
  
    public function action_user_registration_valid( )
         {   
            
       
        if(isset($_POST['submit_registration']))
        {

            if (
                !empty($_POST['lastname']) && 
                !empty($_POST['firstname']) && 
                !empty($_POST['username']) && 
                !empty($_POST['birthdate']) &&
                !empty($_POST['email']) && 
                !empty($_POST['password']))
                {
                   echo "tous les chants sont bien rempli";
                
                 if(strlen($_POST['password'])<11) {
                    $message = "votre mot de passe est trop court.";
                    echo $message;
                 }
                 
                 $m=Security::get_model();
                 $data = ['identification'=>$m->get_user_registration_valid()];
                } else {
                    echo "Veuillez completer tous les champs";
                }
        }
         $this->render('login',$data);
    }
    

 
} 
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
               
                echo "je suis dans controller login ";
                $m=Security::get_model();
                $data = ['identification'=>$m->get_login()];
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

//...................................function validData pour la securité des données recuperées dans les input........
    function validData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }  
    public function action_user_registration_valid( $lastname, $firstname,$username,$birthdate,$email,$password)
    {    
        
      
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          
          $lastname=$this->validData($_POST['lastname'] );
          $firstname=$this->validData($_POST['firstname'] );
          $username=$this->validData($_POST['username'] );
          $birthdate=$this->validData($_POST['birthdate'] );
          $email=$this->validData($_POST['email'] );
          $password=$this->validData($_POST['password'] );
        
           
      

          $m=Security::get_model();
          $data = ['identification'=>$m->get_user_registration_valid($email, $password)];

          if($data){
                $email =($_POST['email'] );
                $data = ['identification'=>$m->get_login()];
            

       }
             
        $this->render("login_connection", $data);
        
    }

}
    
}
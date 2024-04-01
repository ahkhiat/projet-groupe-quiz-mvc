<?php

class security extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new security();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }

    // public function get_login_connetion()
    // { 
        
    //      try {
    //         $Mdp = $_POST['password'];
    //         $email = $_POST['email'];
    //     $requete = $this->bd->prepare('SELECT * FROM User 
    //               WHERE password=:mdp AND email=:nom');
           
    //         $requete->execute(array(':mdp'=>$Mdp, ':nom'=>$email));
            
    //     } catch (PDOException $e) {
    //         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //     }
    //     return $requete->fetchAll(PDO::FETCH_OBJ);
    // }
//....................user registration....................
public function get_user_registration_valid()

{    
    
    try {
        $user="user";
     $requete = $this->bd->prepare('INSERT INTO user (user_id,email,password,lastname,firstname,username,birthdate,created_at,roles) 
     VALUES(NULL,:e,:p,:l,:f,:un,:b,:c,:utilisateur)');
       
     $requete->execute(array(':e'=>$_POST['email'],':p'=>$_POST['password'] ,':f'=>$_POST['firstname'],
     ':l'=>$_POST['lastname'],':un'=>$_POST['username']  ,':b'=>$_POST['birthdate'] ,':created_at'=> date('Y-m-d'),':utilisateur'=>$user));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
   
}

}
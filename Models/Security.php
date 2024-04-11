<?php
// on ajoute require_once pour faire appele a la function validData qui se trouve dans le fichier Valid_data.php, qui se trouve dans un autre repertoire que security.php
require_once(dirname(__FILE__) . '/../Utils/valid_data.php');

class Security extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Security();
        }

        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }
   

    public function get_login()
    { 
        try {
             var_dump($_POST);

            $password = validData(md5($_POST['password']));
            $email = validData($_POST['email']);
            $requete = $this->bd->prepare('SELECT * FROM user WHERE pswd = :pas AND email = :nom');
            $requete->execute(array(':pas' => $password, ':nom' => $email));
         
            if($requete->rowCount()>0){
               $user= $requete->fetch(PDO::FETCH_OBJ);
               if(password_verify($password, $user->$password)){
                  
                   return $user;
                }else{
                    echo"<script>alert('le mot de pzasse est incorrect !');</script>";
                    return false;
                }
               if(FILTER_SANITIZE_EMAIL_verify($email, $user->$email)){
              
                return $user;
                }else{
                echo "<script>alert('cette adresse email n'est pas enregisterée, veuillez vous inscrire !');</script>";
                }
            }
            //  catch (PDOException $e)
            //  die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
          }
            return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    // ...............user registration....................


public function get_user_registration_valid()

{   $email = validData($_POST['email']);
    $password = validData(md5($_POST['password']));
    $lastname=validData($_POST['lastname'] );
    $firstname=validData($_POST['firstname'] );
    $username=validData($_POST['username'] );
    $birthdate=validData($_POST['birthdate'] );
    // $dirty_data = "<script>alert('Hello');</script>";
    // $clean_data = validData($dirty_data);
    // echo "Donnée nettoyée : " . $clean_data . "<br>";    
     try {
        $user="user";
        $requete = $this->bd->prepare('INSERT INTO user (user_id,email,roles,pswd,firstname,lastname,username,birthdate) 
        VALUES(NULL,:e,:utilisateur,:p,:f,:l,:un,:b)');
        
        $requete->execute(array(':e'=>$email,
                                ':utilisateur'=>$user,
                                ':p' => md5($password),
                                ':l'=>$lastname,
                                ':f'=>$firstname,
                                ':un'=>$username,
                                ':b'=>$birthdate,
                                ));
                                
                             
       } catch (PDOException $e) {
         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
       }
         return $requete->fetchAll(PDO::FETCH_OBJ);
       if($requete){
        echo"inscription reussie";
       }
       
      
}


}
 






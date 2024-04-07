<?php

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

    public function get_login_connection()
    { 
        try {
            $email = $_POST['email'];
            $Mdp = $_POST['password'];
        
            // Validation de l'email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Adresse email invalide");
            }
        
            $requete = $this->bd->prepare
            ('SELECT * FROM user WHERE pswd = :mdp AND email = :nom');
            $requete->execute(array(':mdp' => $Mdp, ':nom' => $email));
            $user = $requete->fetch(PDO::FETCH_OBJ);
        
            // Vérification si l'utilisateur existe
            if (!$user) {
                throw new Exception("Adresse email incorrecte");
            }
        
            // Vérification du mot de passe
            if (!password_verify($Mdp, $user->pswd)) {
                throw new Exception("Mot de passe incorrect");
            }
        
            // Authentification réussie
            return $user;
        
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage());
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    //      try {
    //         // var_dump($_POST);

    //         $Mdp = md5($_POST['password']);
    //         $email = $_POST['email'];
    //         $requete = $this->bd->prepare('SELECT * FROM user WHERE pswd = :mdp AND email = :nom');
    //         $requete->execute(array(':mdp' => $Mdp, ':nom' => $email));
            
    //     } catch (PDOException $e) {
    //         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //     }
    //     return $requete->fetchAll(PDO::FETCH_OBJ);
     }
//....................user registration....................
public function get_user_registration_valid()

{    
    
    try {
        $user="user";
     $requete = $this->bd->prepare('INSERT INTO user (user_id,email,roles,pswd,firstname,lastname,username,birthdate) 
     VALUES(NULL,:e,:utilisateur,:p,:f,:l,:un,:b)');
       
     $requete->execute(array(':e'=>$_POST['email'],
                             ':utilisateur'=>$user,
                             ':p' => md5($_POST['password']),
                             ':l'=>$_POST['lastname'],
                             ':f'=>$_POST['firstname'],
                             ':un'=>$_POST['username'],
                             ':b'=>$_POST['birthdate'],
                             ));
                               
                             
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
   
}

}
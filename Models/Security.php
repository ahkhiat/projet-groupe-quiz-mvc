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
            $email = validData($_POST['email']);
            $requete = $this->bd->prepare('SELECT * FROM user WHERE email = :email');
            $requete->execute(array(':email' => $email));
            
            if($requete->rowCount() > 0) {
                $user = $requete->fetch(PDO::FETCH_OBJ);
                $password_hash = $user->pswd; // Récupérer le hachage du mot de passe depuis la base de données
                $password = $_POST['password']; // Récupérer le mot de passe entré par l'utilisateur
                // Vérifier si le mot de passe correspond au hachage dans la base de données
                if (password_verify($password, $password_hash)) {
                    // Mot de passe correct, retourner l'utilisateur
                    return $user;
                } else {
                    // Mot de passe incorrect
                    echo "<script>alert('Mot de passe incorrect !');</script>";
                    return false;
                }
            } else {
                // Utilisateur non trouvé
                echo "<script>alert('Adresse email non enregistrée. Veuillez vous inscrire !');</script>";
                return false;
            }
        } catch (PDOException $e) {
            // Gestion des erreurs PDO
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage());
        }
    }

    // public function get_login()
    // { 
    //     try {
    //         // var_dump($_POST);

    //         $password = validData(password_hash($_POST['password'], PASSWORD_DEFAULT));
    //         $email = validData($_POST['email']);
    //         $requete = $this->bd->prepare('SELECT * FROM user WHERE pswd = :pas AND email = :nom');
    //         $requete->execute(array(':pas' => $password, ':nom' => $email));  
    //         }
    //             catch (PDOException $e){
    //                 die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //         }
         
    //           return $requete->fetchAll(PDO::FETCH_OBJ);
    // }
    /// ...............user registration....................



public function get_user_registration_valid()

{   $email = validData($_POST['email']);
    $password = validData(password_hash($_POST['password'], PASSWORD_DEFAULT));
    $lastname=validData($_POST['lastname'] );
    $firstname=validData($_POST['firstname'] );
    $username=validData($_POST['username'] );
    $birthdate=validData($_POST['birthdate'] );
     
     try {
        $user="user";
        $requete = $this->bd->prepare('INSERT INTO user (user_id,email,roles,pswd,firstname,lastname,username,birthdate) 
        VALUES(NULL,:e,:utilisateur,:p,:f,:l,:un,:b)');
        
        $requete->execute(array(':e'=>$email,
                                ':utilisateur'=>$user,
                                ':p' =>($password),
                                ':l'=>$lastname,
                                ':f'=>$firstname,
                                ':un'=>$username,
                                ':b'=>$birthdate,
                                ));
                                
                             
       } catch (PDOException $e) {
         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
       }
         return $requete->fetchAll(PDO::FETCH_OBJ);
}


}
 






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


// public function get_user_registration_valid()


// {   
//     $email = validData($_POST['email']);
//     $password = validData(password_hash($_POST['password'], PASSWORD_DEFAULT));
//     $lastname=validData($_POST['lastname'] );
//     $firstname=validData($_POST['firstname'] );
//     $username=validData($_POST['username'] );
//     $birthdate=validData($_POST['birthdate'] );
     
//      try {
     
//         $user="user";
//         $requete = $this->bd->prepare('INSERT INTO user (user_id,email,roles,pswd,firstname,lastname,username,birthdate) 
//         VALUES(NULL,:e,:utilisateur,:p,:f,:l,:un,:b)');
        
//         $requete->execute(array(':e'=>$email,
//                                 ':utilisateur'=>$user,
//                                 ':p' =>($password),
//                                 ':l'=>$lastname,
//                                 ':f'=>$firstname,
//                                 ':un'=>$username,
//                                 ':b'=>$birthdate,
//                                 ));
                                
                             
//        } catch (PDOException $e) {
//          die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
//        }
//          return $requete->fetchAll(PDO::FETCH_OBJ);
// }
public function get_user_registration_valid()
{   
     $email = validData($_POST['email']);
    $password = validData(password_hash($_POST['password'], PASSWORD_DEFAULT));
    $lastname = validData($_POST['lastname']);
    $firstname = validData($_POST['firstname']);
    $username = validData($_POST['username']);
    $birthdate = validData($_POST['birthdate']);
     
    try {
        // Vérifier si l'email existe déjà dans la base de données
        $requete_verification = $this->bd->prepare('SELECT * FROM user WHERE email = :email');
        $requete_verification->execute(array(':email' => $email));
        
        if ($requete_verification->rowCount() > 0) {
            // L'email existe déjà, afficher un message d'erreur
        echo "<script>alert('Cet email est déjà utilisé. Veuillez choisir un autre email.');</script>";
            return false; // Arrêter le processus d'inscription
        } 
    else {
            // L'email n'existe pas, il faut s'inscription
            $user = "user";
            $requete_insertion = $this->bd->prepare('INSERT INTO user (user_id, email, roles, pswd, firstname, lastname, username, birthdate) 
                VALUES(NULL, :e, :utilisateur, :p, :f, :l, :un, :b)');
            
            $requete_insertion->execute(array(
                ':e' => $email,
                ':utilisateur' => $user,
                ':p' => $password,
                ':l' => $lastname,
                ':f' => $firstname,
                ':un' => $username,
                ':b' => $birthdate
            ));
            
            // Return true pour indiquer que l'inscription a réussi
            return true;
        }
    } catch (PDOException $e) {
        // Gestion des erreurs PDO
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage());
    }  
     
}

}







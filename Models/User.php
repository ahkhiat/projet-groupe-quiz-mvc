<?php

class User extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new User();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }

    public function get_all_users()
    {

        try {
            $requete = $this->bd->prepare('SELECT * FROM user');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_count_users()
    {
        try {
            $requete = $this->bd->prepare('SELECT COUNT(*) FROM user');
            $requete->execute();
            $count = $requete->fetchColumn();
            return $count;
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public function get_user_profile()
    {

        try {
            $requete = $this->bd->prepare('SELECT * FROM user WHERE user_id = :d');
            $requete->execute(array(':d' => $_SESSION['id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function set_user_profile()
    {

        try {
            $requete = $this->bd->prepare('UPDATE user SET lastname = :ln, firstname = :fn, email = :em, birthdate = :birth  WHERE user_id = :d');
            $requete->execute(array(':d' => $_SESSION['id'], ':ln' => $_POST['lastname'], ':fn' => $_POST['firstname'], ':em' => $_POST['email'], ':birth' => $_POST['birthdate'] ));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_public_profile()
    {

        try {
            $requete = $this->bd->prepare('SELECT * FROM user WHERE user_id = :d');
            $requete->execute(array(':d' => $_SESSION['id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_leaderboard()
    {

        try {
            $requete = $this->bd->prepare('SELECT u.username, SUM(g.game_score) AS total_points 
                                            FROM game g 
                                            JOIN user u ON g.user_id = u.user_id 
                                            WHERE u.roles = "user" GROUP BY u.username
                                            ORDER BY total_points DESC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

}
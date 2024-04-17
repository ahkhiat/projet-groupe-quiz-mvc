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
            $requete_user = $this->bd->prepare('SELECT * FROM user WHERE user_id = :d');
            $requete_user->execute(array(':d' => $_GET['id']));

            $requete_games = $this->bd->prepare('SELECT SUM(g.game_score) AS total_points, 
                                                COUNT(g.game_id) as total_games, 
                                                SUM(g.questions_quantity) as total_questions,
                                                ROUND((SUM(g.game_score) * 100) / SUM(g.questions_quantity)) as success_rate 
                                                FROM game g 
                                                JOIN user u ON g.user_id = u.user_id 
                                                WHERE u.user_id = :d;
                                                ');
            $requete_games->execute(array(':d' => $_GET['id']));

            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        $user_info = $requete_user->fetchAll(PDO::FETCH_OBJ);
        $games_info = $requete_games->fetchAll(PDO::FETCH_OBJ);

        $result = array(
            'user_info' => $user_info,
            'games_info' => $games_info
        );
        return $result;
    }

    public function get_leaderboard()
    {

        try {
            $requete = $this->bd->prepare('SELECT u.user_id, u.username, u.image_name, 
                                            SUM(g.game_score) AS total_points 
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

    public function set_profile_picture($newImageName)
    {
        try {
            $requete = $this->bd->prepare('UPDATE user SET image_name = :new WHERE user_id = :id');
            $requete->execute(array(':id' => $_POST['user_id'], ':new' => $newImageName));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);

    }

    public function get_profile_picture($user_id)
    {   
        try {
            $requete = $this->bd->prepare('SELECT image_name FROM user WHERE user_id = :id');
            $requete->execute(array(':id' => $user_id));
            $result = $requete->fetchColumn();
            return $result;
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public function get_followers_number()
    {

        try {
            $requete = $this->bd->prepare('SELECT COUNT(followed_id) AS total_followers FROM follow WHERE followed_id = :d');
            $requete->execute(array(':d' => $_SESSION['id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_followed_number()
    {

        try {
            $requete = $this->bd->prepare('SELECT COUNT(followed_id) AS total_followed FROM follow WHERE follower_id = :d');
            $requete->execute(array(':d' => $_SESSION['id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_followers_number_public()
    {

        try {
            $requete = $this->bd->prepare('SELECT COUNT(followed_id) AS total_followers FROM follow WHERE followed_id = :d');
            $requete->execute(array(':d' => $_GET['id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_followed_number_public()
    {

        try {
            $requete = $this->bd->prepare('SELECT COUNT(followed_id) AS total_followed FROM follow WHERE follower_id = :d');
            $requete->execute(array(':d' => $_GET['id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_all_followers()
    {

        try {
            $requete = $this->bd->prepare('SELECT * FROM follow f
                                            JOIN user u ON f.follower_id = u.user_id WHERE followed_id = :d
                                            JOIN game g WHERE g.user_id = f.follower_id');
            $requete->execute(array(':d' => $_GET['id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_all_followed()
    {

        try {
            $requete = $this->bd->prepare('SELECT COUNT(followed_id) AS total_followed FROM follow WHERE follower_id = :d');
            $requete->execute(array(':d' => $_GET['id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

}

<?php

class Config extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Config();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }

    public function get_nbr_questions()
    {
        try {
            $requete = $this->bd->prepare('SELECT value FROM config WHERE config_id = 1');
            $requete->execute();
            $count = $requete->fetchColumn();
            return $count;
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        // return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function set_nbr_questions()
    {
        try {
            $requete = $this->bd->prepare('UPDATE config SET value = :nbq WHERE config_id = 1');
            $requete->execute(array(':nbq' => $_POST['nbr_questions']));


        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public function get_quiz_duration()
    {
        try {
            $requete = $this->bd->prepare('SELECT value FROM config WHERE config_id = 2');
            $requete->execute();
            $count = $requete->fetchColumn();
            return $count;
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        // return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function set_quiz_duration()
    {
        try {
            $requete = $this->bd->prepare('UPDATE config SET value = :qzd WHERE config_id = 2');
            $requete->execute(array(':qzd' => $_POST['quiz_duration']));


        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }


}
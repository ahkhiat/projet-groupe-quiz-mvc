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
            $requete = $this->bd->prepare('SELECT nbr_questions FROM config WHERE config_id = 1');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function set_nbr_questions()
    {
        try {
            $requete = $this->bd->prepare('UPDATE config SET nbr_questions = :nbq WHERE config_id = 1');
            $requete->execute(array(':nbq' => $_POST['nbr_questions']));


        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }


}
<?php

class Theme extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Theme();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }

    public function get_all_themes()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM theme');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_nbr_questions_themes()
    {
        try {
            $requete = $this->bd->prepare('SELECT theme_name, q.theme_id, COUNT(*) AS Total_questions FROM question q JOIN theme t ON q.theme_id = t.theme_id GROUP BY theme_name;
            ');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


}

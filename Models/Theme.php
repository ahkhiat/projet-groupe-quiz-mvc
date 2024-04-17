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

    public function set_theme_add_request()
    {
        try {
            $requete = $this->bd->prepare('INSERT INTO theme (theme_id, theme_name) VALUES (NULL, :theme)');
            $requete->execute(array(':theme'=> $_POST['theme_name']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_theme_show()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM theme WHERE theme_id = :id');
            $requete->execute(array(':id' => $_POST['theme_id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function set_theme_update_request()
    {
        try {
            $requete = $this->bd->prepare('UPDATE theme SET theme_name = :theme WHERE theme_id = :id');
            $requete->execute(array(':theme' => $_POST['theme_name'],':id'=>$_POST['theme_id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function set_theme_delete()
    {
        try {
            $requete = $this->bd->prepare('DELETE FROM theme WHERE theme_id = :id');
            $requete->execute(array(':id' => $_POST['theme_id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


}

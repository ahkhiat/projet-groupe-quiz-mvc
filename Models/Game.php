<?php

class Game extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Game();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }

    public function get_all_games()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM game');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    // Ne marche pas encore
    public function get_new_game()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM question q
                                            JOIN answer a ON q.question_id = a.question_id');
            $reponse = $requete->execute();
            while($ligne = $reponse->fetch(PDO::FETCH_ASSOC))
            {
                $data []= $ligne;
            }
            $encode_donnees = json_encode($data);
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $encode_donnees;
    }



}
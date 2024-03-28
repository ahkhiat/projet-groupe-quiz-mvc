<?php

class User extends Model
{
    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new User();
        }
        return self::$instance;
    }

    public function __construct()
    {
        $this->
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


}
<?php

abstract class Model
{
    private $bd;

    private static $instance=null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost:3307;dbname=science-quiz-mvc', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) 
        {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    // public static function get_model()
    // {

    //     if(is_null(self::$instance))
    //     {
    //         self::$instance=new Model();
    //     }
    //     return self::$instance;
    // }

    // public function get_all_users()
    // {
    //     try {
    //         $requete = $this->bd->prepare('SELECT * FROM user');
    //         $requete->execute();
            
    //     } catch (PDOException $e) {
    //         die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    //     }
    //     return $requete->fetchAll(PDO::FETCH_OBJ);
    // }



}
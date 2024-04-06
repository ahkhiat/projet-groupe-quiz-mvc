<?php

class Admin extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Admin();
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

    public function get_all_questions()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM question q
                                            JOIN theme t ON q.theme_id = t.theme_id');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_answers()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM answer a
                                            JOIN question q ON a.question_id = q.question_id ');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function set_question_add()
    {
        try {
            $requete = $this->bd->prepare('INSERT INTO question (question_id, theme_id, question_content, question_level)
                                            VALUES (NULL, :th, :qc, :ql)');
            $requete->execute(array(':th' => $_POST['theme_id'], ':qc' => $_POST['question'], ':ql' => $_POST['question_level']));

            $question_id = $this->bd->lastInsertId();
        
            return $question_id; 

        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public function set_answer1_add($question_id)
    {
        try {
            $requete = $this->bd->prepare('INSERT INTO answer (answer_id, question_id, answer_content, is_true)
                                            VALUES (NULL, :qid, :ac, true)');
            $requete->execute(array(':qid' => $question_id, ':ac' => $_POST['answer1']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function set_answer2_add($question_id)
    {
        try {
            $requete = $this->bd->prepare('INSERT INTO answer (answer_id, question_id, answer_content, is_true)
                                            VALUES (NULL, :qid, :ac, false)');
            $requete->execute(array(':qid' => $question_id, ':ac' => $_POST['answer2']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function set_answer3_add($question_id)
    {
        try {
            $requete = $this->bd->prepare('INSERT INTO answer (answer_id, question_id, answer_content, is_true)
                                            VALUES (NULL, :qid, :ac, false)');
            $requete->execute(array(':qid' => $question_id, ':ac' => $_POST['answer3']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function set_answer4_add($question_id)
    {
        try {
            $requete = $this->bd->prepare('INSERT INTO answer (answer_id, question_id, answer_content, is_true)
                                            VALUES (NULL, :qid, :ac, false)');
            $requete->execute(array(':qid' => $question_id, ':ac' => $_POST['answer4']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

}
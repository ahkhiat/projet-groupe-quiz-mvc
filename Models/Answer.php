<?php

class Answer extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Answer();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
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

    public function get_answers()
    {
        $question = $_POST['question_id'];
        try {
            $requete = $this->bd->prepare('SELECT * FROM answer WHERE question_id = :i');
            $requete->execute(array(':i' => $question));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
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

    public function set_answer1_update()
    {
        try {
            $requete = $this->bd->prepare('UPDATE answer SET answer_content = :ac, is_true = true WHERE answer_id = :aid');
                                            
            $requete->execute(array(':aid' => $_POST['answer1_id'], ':ac' => $_POST['answer1']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function set_answer2_update()
    {
        try {
            $requete = $this->bd->prepare('UPDATE answer SET answer_content = :ac, is_true = true WHERE answer_id = :aid');
                                            
            $requete->execute(array(':aid' => $_POST['answer2_id'], ':ac' => $_POST['answer2']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function set_answer3_update()
    {
        try {
            $requete = $this->bd->prepare('UPDATE answer SET answer_content = :ac, is_true = true WHERE answer_id = :aid');
                                            
            $requete->execute(array(':aid' => $_POST['answer3_id'], ':ac' => $_POST['answer3']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function set_answer4_update()
    {
        try {
            $requete = $this->bd->prepare('UPDATE answer SET answer_content = :ac, is_true = true WHERE answer_id = :aid');
                                            
            $requete->execute(array(':aid' => $_POST['answer4_id'], ':ac' => $_POST['answer4']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function set_answers_delete()
    {
        try {
            $requete = $this->bd->prepare('DELETE FROM answer WHERE question_id = :id');
                                            
            $requete->execute(array(':id' => $_POST['question_id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


}
<?php

class Question extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Question();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
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

    public function get_question()
    {
        $question = $_POST['question_id'];
        try {
            $requete = $this->bd->prepare('SELECT * FROM question WHERE question_id = :i');
            $requete->execute(array(':i' => $question));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_count_questions()
    {
        try {
            $requete = $this->bd->prepare('SELECT COUNT(*) FROM question');
            $requete->execute();
            $count = $requete->fetchColumn();
            return $count;
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
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

    public function set_question_update()
    {
        try {
            $requete = $this->bd->prepare('UPDATE question SET theme_id = :th, question_content = :qc, question_level = :ql WHERE question_id = :id');
                                           
            $requete->execute(array(':th' => $_POST['theme_id'], ':qc' => $_POST['question'], ':ql' => $_POST['question_level'], ':id' => $_POST['question_id']));

        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public function set_question_delete()
    {
        try {
            $requete = $this->bd->prepare('DELETE FROM question WHERE question_id = :id');
            $requete->execute(array(':id' => $_POST['question_id']));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

}
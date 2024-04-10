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

    public function get_count_games()
    {
        try {
            $requete = $this->bd->prepare('SELECT COUNT(*) FROM game');
            $requete->execute();
            $count = $requete->fetchColumn();
            return $count;
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

   

public function get_fetch_questions($nbrQuestions)
{
    // $nbrQuestions = 5;
    $theme = $_SESSION['theme'];
    $level = $_SESSION['level'];
    try {

        $randomQuestionIdsQuery = $this->bd->prepare('SELECT question_id FROM question  WHERE theme_id = :theme AND question_level = :lvl ORDER BY RAND() LIMIT :lm');
        
        $randomQuestionIdsQuery->bindParam(':lm', $nbrQuestions, PDO::PARAM_INT);
        $randomQuestionIdsQuery->bindParam(':theme', $theme, PDO::PARAM_INT);
        $randomQuestionIdsQuery->bindParam(':lvl', $level, PDO::PARAM_INT);

        $randomQuestionIdsQuery->execute();
        $randomQuestionIds = $randomQuestionIdsQuery->fetchAll(PDO::FETCH_COLUMN);

        // var_dump($randomQuestionIds);
        // die;

        $placeholders = rtrim(str_repeat('?,', count($randomQuestionIds)), ',');
        $questionsQuery = $this->bd->prepare("SELECT q.question_id, q.question_content, a.answer_content, a.is_true FROM question q
                                              JOIN answer a ON q.question_id = a.question_id
                                              WHERE q.question_id IN ($placeholders)
                                              ");
        
        $questionsQuery->execute(array_values($randomQuestionIds));

        $results = $questionsQuery->fetchAll(PDO::FETCH_ASSOC);



        $organizedResults = [];
        foreach ($results as $row) {
            $questionId = $row['question_id'];
            if (!isset($organizedResults[$questionId])) {
                $organizedResults[$questionId] = [
                    'question' => $row['question_content'],
                    'question_id' => $questionId,
                    'answers' => [],
                    'correct_answer' => null
                ];
            }
            $organizedResults[$questionId]['answers'][] = $row['answer_content'];

            if ($row['is_true']) {
                $organizedResults[$questionId]['correct_answer'] = $row['answer_content'];
            }
        }

        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    
    // Réindexer le tableau numériquement
    return array_values($organizedResults);
}




}
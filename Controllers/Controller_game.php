<?php

class Controller_game extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_games()
    {
        $m=Game::get_model();
        $data=['games'=>$m->get_all_games()];
        $this->render("all_games",$data);

    }

    public function action_fetch_questions()
    {
        $m=Game::get_model();
        $mc=Config::get_model();

        // var_dump($_SESSION);
        // die;

        ob_clean();
        header('Content-Type: application/json');

        $nbr_questions = $mc->get_nbr_questions();

        $data=$m->get_fetch_questions($nbr_questions);
       

        $jsonData = json_encode($data);

        if ($jsonData === false) {
            http_response_code(500); // Erreur interne du serveur
            exit;
        }

        echo $jsonData;
        exit;
    }

    public function action_new_game()
    {
        $mt = Theme::get_model();
        $data=['nbr_questions_themes'=>$mt->get_nbr_questions_themes()];
        $this->render("theme_choice", $data);
    }

    public function action_level_choice()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $theme = $_POST['theme']; 
            $_SESSION['theme'] = $theme;
        }
        $this->render("level_choice");
    }

    public function action_start_game()
    {   
        $m=Config::get_model();
        $data=['quiz_duration'=>$m->get_quiz_duration()];
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $level = $_POST['level']; 
            $_SESSION['level'] = $level;
        }
        $this->render("start_game", $data);
    }
    public function action_store_game()
    {
        $m = Game::get_model();
        $data=['nb_parties'=>$m->set_store_game()];
        $this->render("retry", $data);
    }




    
}
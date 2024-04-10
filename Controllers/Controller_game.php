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
        $data=['game'=>$m->get_fetch_questions()];
        ob_clean();
        header('Content-Type: application/json');

        $jsonData = json_encode($data);

        echo $jsonData;
        exit;
    }

    public function action_new_game()
    {
        // $m=Game::get_model();

        $this->render("theme_choice");
    }

    public function action_level_choice()
    {
        // $m=Game::get_model();
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $theme = $_POST['theme']; 
            $_SESSION['theme'] = $theme;
        }
        $this->render("level_choice");
    }

    public function action_start_game()
    {
        // $m=Game::get_model();

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $level = $_POST['level']; 
            $_SESSION['level'] = $level;
        }
        $this->render("start_game");
    }




    
}
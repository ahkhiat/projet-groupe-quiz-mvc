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

    public function action_new_game()
    {
        $m=Game::get_model();
        $data=['game'=>$m->get_new_game()];
        $this->render("new_game",$data);

    }



    
}
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

    
}
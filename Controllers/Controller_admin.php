<?php

class Controller_admin extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_dashboard()
    {
        // $m=Admin::get_model();
        $mu = User::get_model();
        $mg = Game::get_model();
        $mq = Question::get_model();
        $data=['users'=>$mu->get_count_users(),
               'games'=>$mg->get_count_games(),
               'questions'=>$mq->get_count_questions()];

        $this->render("dashboard", $data);
    }

    

    

    

    

    

   
    
}
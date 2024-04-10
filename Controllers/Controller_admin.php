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
        $mc = Config::get_model();
        $data=['users'=>$mu->get_count_users(),
               'games'=>$mg->get_count_games(),
               'questions'=>$mq->get_count_questions(),
               'nbr_questions'=>$mc->get_nbr_questions()];

        $this->render("dashboard", $data);
    }

    public function action_nbr_questions()
    {
        $m = Config::get_model();
        $m->set_nbr_questions();
        $this->action_dashboard();
    }

    

    

    
}
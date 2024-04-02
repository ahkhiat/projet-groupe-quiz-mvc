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
        $m=Admin::get_model();
        $data=['dashboard'=>$m->get_dashboard()];
        $this->render("dashboard",$data);

    }

    
}
<?php

class Controller_theme extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_themes()
    {
        $m=Theme::get_model();
        $data=['themes'=>$m->get_all_themes()];
        $this->render("all_themes", $data);

    }

    
}
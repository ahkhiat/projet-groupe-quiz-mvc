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
        $data=['themes'=>$m->get_all_themes(),
               'nbr_questions_themes'=>$m->get_nbr_questions_themes()];
        $this->render("all_themes", $data);
    }

    public function action_theme_add()
    {
        $this->render("theme_add");
    }
    public function action_theme_add_request()
    {
        $m=Theme::get_model();
        $m->set_theme_add_request();
        $data=['message'=> 'Le thème a bien été ajouté !'];
        $this->render("theme_result", $data);
    }
    public function action_theme_update()
    {
        $m=Theme::get_model();
        $data=['theme'=>$m->get_theme_show(),];
        $this->render("theme_update", $data);
    }
    public function action_theme_update_request()
    {
        $m=Theme::get_model();
        $data=['theme'=>$m->set_theme_update_request(),
               'message'=> 'Le thème a bien été modifié !'];
        $this->render("theme_result", $data);
    }
    public function action_theme_delete()
    {
        $m=Theme::get_model();
        $data=['themes'=>$m->set_theme_delete(),];
        $this->render("theme_update", $data);
    }

    
}
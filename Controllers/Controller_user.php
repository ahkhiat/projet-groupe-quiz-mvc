<?php

class Controller_user extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }


    public function action_all_users()
    {
        $m=Model::get_model();
        $data=['users'=>$m->get_all_users()];
        $this->render("all_users",$data);

    }

}
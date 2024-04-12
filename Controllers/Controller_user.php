<?php

class Controller_user extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }
    public function action_home()
    {
        $this->render('home');
    }


    public function action_all_users()
    {
        $m=User::get_model();
        $data=['users'=>$m->get_all_users()];
        $this->render("all_users",$data);

    }
    public function action_user_profile()
    {
        $m=User::get_model();
        $data=['user'=>$m->get_user_profile()];
        $this->render("user_profile", $data);
    }

    public function action_user_profile_edit()
    {  
        $m=User::get_model();
        $data=['user'=>$m->get_user_profile()];
        $this->render("user_profile_edit", $data);
    }
    public function action_user_profile_edit_request()
    {  
        $m=User::get_model();
        $data=['users'=>$m->set_user_profile(),
               'user'=>$m->get_user_profile()];
        $this->render("user_profile", $data);
    }

    public function action_public_profile()
    {
        $m=User::get_model();
        $data=['user'=>$m->get_public_profile()];
        $this->render("public_profile", $data);

    }
    public function action_leaderboard()
    {
        $m=User::get_model();
        $data=['user'=>$m->get_leaderboard()];
        $this->render("leaderboard", $data);

    }


    

}
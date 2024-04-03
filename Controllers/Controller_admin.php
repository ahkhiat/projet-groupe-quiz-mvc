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
        $this->render("dashboard");
    }

    public function action_all_questions()
    {
        $m=Admin::get_model();
        $data=['questions'=>$m->get_all_questions(),
                'answers'=>$m->get_all_answers()];
        $this->render("all_questions",$data);

    }

    public function action_question_add()
    {
        $m=Admin::get_model();
        $data=['themes'=>$m->get_all_themes()];
        $this->render("question_add", $data);

    }

    public function action_question_add_request()
    {
        $m=Admin::get_model();
        $question_id = $m->set_question_add();

        $m->set_answer1_add($question_id);
        $m->set_answer2_add($question_id);
        $m->set_answer3_add($question_id);
        $m->set_answer4_add($question_id);

        $data = ['question_id' => $question_id];
        $this->render("question_add_result", $data);

    }

    public function action_all_themes()
    {
        $m=Admin::get_model();
        $data=['themes'=>$m->get_all_themes()];
        $this->render("all_themes", $data);

    }
    
}
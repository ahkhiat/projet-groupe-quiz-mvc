<?php

class Controller_question extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_questions()
    {
        $mq=Question::get_model();
        $ma=Answer::get_model();
        $data=['questions'=>$mq->get_all_questions(),
                'answers'=>$ma->get_all_answers()];
        $this->render("all_questions",$data);

    }
    
    public function action_question_add()
    {
        $m=Theme::get_model();
        $data=['themes'=>$m->get_all_themes()];
        $this->render("question_add", $data);

    }

    public function action_question_add_request()
    {
        $mq=Question::get_model();
        $ma=Answer::get_model();
        
        $question_id = $mq->set_question_add();

        $ma->set_answer1_add($question_id);
        $ma->set_answer2_add($question_id);
        $ma->set_answer3_add($question_id);
        $ma->set_answer4_add($question_id);

        $data = ['question_id' => $question_id,
                 'message' =>'La question a bien été ajoutée !'];
        $this->render("question_result", $data);

    }

    public function action_question_update()
    {
        $mt=Theme::get_model();
        $mq = Question::get_model();
        $ma = Answer::get_model();
        $data=['themes'=>$mt->get_all_themes(),
               'question'=>$mq->get_question(),
               'answers'=>$ma->get_answers()];
        $this->render("question_update", $data);

    }

    public function action_question_update_request()
    {
        $mq=Question::get_model();
        $ma=Answer::get_model();

        $mq->set_question_update();

        $ma->set_answer1_update();
        $ma->set_answer2_update();
        $ma->set_answer3_update();
        $ma->set_answer4_update();

        $data = ['message' =>'La question a bien été modifiée !'];
        $this->render("question_result", $data);

    }

    public function action_question_delete()
    {
        $mq=Question::get_model();
        $ma=Answer::get_model();

        $ma->set_answers_delete();
        $mq->set_question_delete();
        $data=['questions'=>$mq->get_all_questions(),
        'answers'=>$ma->get_all_answers()];
        $this->render("all_questions",$data);

    }
    
}
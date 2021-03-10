<?php

class Pages extends Controller {

    public function index() {

        $testList = $this->connectDb()->getAllTests();

        $data = [
            "availableTests" => $testList
        ];
        
        $this->view('pages/index', $data);
    }



    public function questions() {

        var_dump($_POST);
        
        // TODO, get the real data
        // TODO, understand how to get next question
        // TODO store question count in session
        // TODO, count score
        // TODO, save score to DB

        $questionCount = $this->connectDb()->getQuestionCount((int)$_POST['quizSelect']);
        $answers = $this->connectDb()->getAnswers(1);



        $data = [
            "totalQuestions" => $questionCount["count"],
            "question" => "What is your name?",
            "answers" => $answers
        ];

        $this->view('pages/questions', $data);
    }
}
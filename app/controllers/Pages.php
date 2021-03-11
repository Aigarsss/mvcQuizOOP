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
        // $_SESSION['test'] = "test";
        // var_dump($_SESSION);
        
        // TODO, understand how to get next question
        // TODO, count score
        // TODO, save score to DB

        // set up question count
        if (isset($_POST['quizSelect'])) {
            $_SESSION['quizSelect'] = (int)$_POST['quizSelect'];
            $_SESSION['questionNum'] = 0;
            $_SESSION['score'] = 0;
        }

        // Get amount of questions in the selected quizz
        $questionCount = $this->connectDb()->getQuestionCount($_SESSION['quizSelect']);

        // increment question count
        if ($_SESSION['questionNum'] < $questionCount["count"] ) {
            $_SESSION['questionNum'] += 1;
            
            // TODO check score and increase
            if ($_SESSION['questionNum'] > 1) {
                if ($this->connectDb()->getCorrectAnswer($this->connectDb()->getQuestionId($_SESSION['quizSelect'],  $_SESSION['questionNum']-1), (int)$_POST['answer'])) {
                    $_SESSION['score'] += 1;
                }
            }
        } 
        else if ($_SESSION['questionNum'] == $questionCount["count"]) {
            if ($this->connectDb()->getCorrectAnswer($this->connectDb()->getQuestionId($_SESSION['quizSelect'],  $_SESSION['questionNum']), (int)$_POST['answer'])) {
                $_SESSION['score'] += 1;
            }
            return $this->results($_SESSION['score']);
        }

        // Get the question
        $question = $this->connectDb()->getQuestion($_SESSION['quizSelect'],  $_SESSION['questionNum']);

        // get the answers to the question
        $questionId = $this->connectDb()->getQuestionId($_SESSION['quizSelect'],  $_SESSION['questionNum']);
        
        $answers = $this->connectDb()->getAnswers($questionId);

        $data = [
            "totalQuestions" => $questionCount["count"],
            "question" => $question,
            "answers" => $answers,
            "questionNum" => $_SESSION['questionNum']
        ];

        $this->view('pages/questions', $data);
    }


    public function results($result = 0) {

        
        $data = [
            "yourResult" => $result
        ];
        
        $this->view('pages/results', $data);
    }
}
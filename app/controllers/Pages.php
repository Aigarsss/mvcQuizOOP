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

        // var_dump($_POST);

        // TODO. Not sure how to handle situation, where page is reloaded when question is opened. The count advances, but the question stays the same

        // set up question count
        if (isset($_POST['quizSelect'])) {
            $_SESSION['quizSelect'] = (int)$_POST['quizSelect'];
            $_SESSION['questionNum'] = 0;
            $_SESSION['score'] = 0;
            $_SESSION['playerName'] = $_POST['playerName'];
        }

        // Get amount of questions in the selected quizz
        $questionCount = $this->connectDb()->getQuestionCount($_SESSION['quizSelect']);

        // increment question count
        if ($_SESSION['questionNum'] < $questionCount["count"] ) {
            $_SESSION['questionNum'] += 1;
            
            // check score and increase
            if ($_SESSION['questionNum'] > 1) {
                if ($this->connectDb()->getCorrectAnswer($this->connectDb()->getQuestionId($_SESSION['quizSelect'],  $_SESSION['questionNum']-1), (int)$_POST['answer'])) {
                    $_SESSION['score'] += 1;
                }
            }
        } 
        // check score and increase if the last question
        else if ($_SESSION['questionNum'] == $questionCount["count"]) {
            if ($this->connectDb()->getCorrectAnswer($this->connectDb()->getQuestionId($_SESSION['quizSelect'],  $_SESSION['questionNum']), (int)$_POST['answer'])) {
                $_SESSION['score'] += 1;
            }
            return $this->results($_SESSION['score'], $_SESSION['playerName']);
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


    public function results($result = 0, $name = "Jon Doe") {

        // TODO process the submit score case
        
        $data = [
            "yourResult" => $result,
            "playerName" => $name
        ];
       
        $this->view('pages/results', $data);
    }

    public function resultsTable() {


        // TODO process the submit score case

        if (isset($_POST['submitScore'])) {
            $this->connectDb()->submitScore($_SESSION['playerName'], (int)$_SESSION['score'], $_SESSION['quizSelect']);
        }
  
        $scores = $this->connectDb()->getScores();

        $data = [
            "scores" => $scores
        ];
        
        $this->view('pages/resultstable', $data);
    }
}
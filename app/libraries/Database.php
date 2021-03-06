<?php

class Database {
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dsn = DB_DSN;

    private $dbh;
    private $stmt;
    private $error;
    

    public function __construct() {

        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        
        try {
            $this->dbh = new PDO($this->dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo 'Connection failed: ' . $this->error;
        }
    }


    // TODO, proably a new models folder needs to be made, that extends this class


    // get all available tests for dropdown

    public function getAllTests() {

        $sql = "select * from tests";
        $this->stmt = $this->dbh->prepare($sql);
        $this->stmt->execute();
        return $this->stmt->fetchAll();
    }

    public function getQuestionCount($testId) {

        $sql = "select count(*) as count from questions where test_id = :testId";

        $this->stmt = $this->dbh->prepare($sql);
        
        $this->stmt->execute(['testId' => $testId]);

        return $this->stmt->fetch();

    }

    public function getQuestion($testId, $num) {
        $sql = "select * from questions where test_id = :testId order by 1";

        $this->stmt = $this->dbh->prepare($sql);
        $this->stmt->execute(['testId' => $testId]);
        $var = $this->stmt->fetchAll();
        // var_dump($var);

        return $var[$num-1]['question'];
    }

    public function getQuestionId($testId, $num) {
        $sql = "select * from questions where test_id = :testId order by 1";

        $this->stmt = $this->dbh->prepare($sql);
        $this->stmt->execute(['testId' => $testId]);
        $var = $this->stmt->fetchAll();
        // var_dump($var);

        return $var[$num-1]['question_id'];
    }

    public function getAnswers($questionId) {

        $sql = "select * from answers where question_id = :questionId";
        $this->stmt = $this->dbh->prepare($sql);
        $this->stmt->execute(['questionId' => $questionId]);
        return $this->stmt->fetchAll();

    }

    public function getCorrectAnswer($questionId, $answer) {

        $sql = "select * from answers where question_id = :questionId and answer_id = :answer and is_correct = 1";
        $this->stmt = $this->dbh->prepare($sql);
        $this->stmt->execute(['questionId' => $questionId, 'answer' => $answer]);
        $correct = $this->stmt->fetch();

        if (empty($correct)) {

            return false;
        }

        return true;
    }

    public function submitScore($user, $score, $testId) {
        $sql = "insert into scores (name, score, test_id) values (:user, :score, :testId)";
        $this->stmt = $this->dbh->prepare($sql);
        $this->stmt->execute(['user' => $user, 'score' => $score,'testId' => $testId]);
    }


    public function getScores() {
        // $sql = "select * from scores order by score desc";
        $sql = "select s.name as name, s.score as score, s.date as date, t.test_name as test_name from scores s join tests t on s.test_id = t.test_id order by score desc";
        $this->stmt = $this->dbh->prepare($sql);
        $this->stmt->execute();
        return $this->stmt->fetchAll();

    }





    
}
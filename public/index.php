<?php 
session_start();
require_once "../app/bootstrap.php";


// create core/router to check link on submit
    
$db = new Database();
$init = new Router();


// var_dump($db->getTests());

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

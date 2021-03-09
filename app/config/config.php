<?php

// App root
define('APPROOT', dirname(dirname(__FILE__)));

// URL root
define('URLROOT', 'http://mvcquizoop.test/');

$host = "localhost";
$dbname = "mvcquizoop";
$dsn = "mysql:dbname=" . $dbname . ";host=" . $host;
$dbUser = "root";
$dbPassword = "";


// move to model afterwards
try {
    $conn = new PDO($dsn, $dbUser, $dbPassword);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


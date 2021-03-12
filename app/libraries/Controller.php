<?php

class Controller {

    public function connectDb() {
        require_once  APPROOT . '/libraries/Database.php';

        return new Database();
    }


    public function view($view, $data=[]) {
        if (file_exists(APPROOT . '/views/' . $view . '.php')) {
            require_once APPROOT . '/views/' . $view . '.php';
            // header('Location: http://www.example.com/');
        } else {
            echo "die";
            die('View does not exist');
        }
    }
}
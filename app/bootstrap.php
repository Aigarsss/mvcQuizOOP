<?php
require "config/config.php";

// autoload classes
spl_autoload_register(function ($className) {
    include 'libraries/' . $className . '.php';
});
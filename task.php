<?php

require 'functions.php';

class Task {

    private $description;

    public function __construct($description, $cheked)
    {
        $this->description = $description;
//        echo "Nova tasca construida";
    }

//    public function Task(){
//
//    }

}
$task = new Task("Aprendre PHP");

var_dump($task);
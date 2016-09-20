<?php

require 'functions.php';

class Task {

    private $description;

    private $checked;

    /**
     * Task constructor.
     * @param $description
     * @param $cheked
     */
    public function __construct($description, $cheked)
    {
        $this->description = $description;
        $this->checked = $cheked;
//        echo "Nova tasca construida";
    }

    public function completa($cheked)
    {
        $cheked = true;
    }

//    public function Task(){
//
//    }

}
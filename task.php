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
    }

    public function complete()
    {
        $this->checked = true;
    }

    /**Tipic Getter
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**Tipic Setter
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function description($description = null)
    {
        if($description === null){
            return $this->description;
        }
        $this->description = $description;
    }


}
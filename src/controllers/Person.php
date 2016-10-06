<?php

namespace Learning\PHP;

class Person
{
    /**
     * @var String
     */
    private $name;
    /**
     * @var String
     */
    private $sirname;
    /**
     * @var String
     */
    private $sirname2;

    /**
     * Person constructor.
     * @param $name
     * @param $sirname
     * @param $sirname2
     */
    public function __construct($name, $sirname, $sirname2)
    {
        $this->name = $name;
        $this->sirname = $sirname;
        $this->sirname2 = $sirname2;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSirname()
    {
        return $this->sirname;
    }

    /**
     * @param mixed $sirname
     */
    public function setSirname($sirname)
    {
        $this->sirname = $sirname;
    }

    /**
     * @return mixed
     */
    public function getSirname2()
    {
        return $this->sirname2;
    }

    /**
     * @param mixed $sirname2
     */
    public function setSirname2($sirname2)
    {
        $this->sirname2 = $sirname2;
    }
}
<?php

class QueryBuilder
{
    private $pdo;

    function all($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM ($table)");

        $query->execute();

        return $query->fetchAll(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            Task::class
        );
    }
}
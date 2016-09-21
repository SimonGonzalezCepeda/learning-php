<?php

$config = [
    'dbtype'=> 'mysql',
    'dbname' => 'prova',
    'username' => 'root',
    'password' => '',
    'dbhost' => '127.0.0.1'
];

class Connection
{
    public static function make()
    {
        try{
            $pdo = new PDO(
                $config['dbtype'] . ':host=' .
                $config['dbhost'] . ';dbname' .
                $config['dbname'].
                $config['username'].
                $config['password']
            );
        } catch (PDOException $e) {
            die("Hi ha hagut un error: " . $e->getMessage());
        };
    }
}
<?php


class Connection
{
    public static function make($config, $message)
    {
        try{
            return new PDO(
                $config['dbtype'] . ':host=' .
                $config['dbhost'] . ';dbname' .
                $config['dbname'].
                $config['username'].
                $config['password']
            );
        } catch (PDOException $e) {
            die($message . " " . $e->getMessage());
        }
    }
}
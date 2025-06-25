<?php

abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $config = require __DIR__ . '/../config/.env.php';

        $host = $config['host'];
        $port = $config['port'];
        $dbname = $config['dbname'];
        $user = $config['user'];
        $password = $config['password'];
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $this->db = new PDO($connexionString, $user, $password);
    }
}

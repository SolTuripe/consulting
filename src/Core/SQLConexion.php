<?php

namespace App\Core;
use PDO;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__.'./../../');
$dotenv->load();

class SQLConexion {

    public $mysql;
    
	public function __construct()
    {
        $host = $_ENV["DATABASE_HOST"];
        $user = $_ENV["DATABASE_USER"];
        $pass = $_ENV["DATABASE_PASSWORD"];
        $database = $_ENV["DATABASE_DB"];
        $charset = "utf-8";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $this->mysql = new PDO("mysql:host={$host}; dbname={$database}; charset{$charset}", $user, $pass, $options);
    }
}

<?php
namespace dht11_MVC\model;

require_once 'inc/config.inc.php';

class DatabaseConnection {
    protected function dbConnect() {
        return new \PDO('mysql:host=localhost;dbname=dht11;charset=utf8', 'root', 'Password123!');
    }
}
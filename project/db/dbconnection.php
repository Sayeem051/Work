<?php

$host = 'localhost';
$db = 'people_db';
$user = 'root';
$pass = '';
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    include "./db/dbcon.html";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

require_once "./db/crudoperations.php";
$crud = new crud($pdo);

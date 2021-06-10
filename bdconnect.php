<?php
$hostname = "localhost";
$database = "repertoire";
$username = "root";
$password = "";

try {
    $bd = new PDO("mysql:host=" . $hostname . ";dbname=" . $database, $username, $password);
} catch (Exception $e) {
    die("Erreu:" . $e->getMessage());
}

<?php 

session_start();

//Database connectie

$db_username = "root";
$db_password = "";
$db_name = "elisa-minten";
$pdo = new PDO("mysql:host=localhost;port=8080;dbname=$db_name", $db_username, $db_password);
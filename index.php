<?php  

include_once "includes/init.php";

$query = $pdo->query("SELECT * FROM websites");
$websites = $query->fetchAll();



include_once "./views/index.view.php";



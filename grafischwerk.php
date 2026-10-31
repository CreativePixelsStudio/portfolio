<?php  

include_once "./includes/init.php";

$query = $pdo->query("SELECT * FROM grafisch");
$grafisch = $query->fetchAll();

include_once('meta.php');  
$pgKeywords="Grafisch ontwerper Limburg";
$pgDesc="Ik ben Elisa Minten, een gepassioneerd grafisch ontwerper uit Limburg. Voornamelijk gespecialiseerd in websites ontwerpen.";
$pgTitle="Grafisch ontwerp";
meta($pgKeywords,$pgDesc,$pgTitle);

include_once "./views/grafischwerk.view.php";
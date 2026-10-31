<?php  

include_once "./includes/init.php";

$query = $pdo->query("SELECT * FROM tekeningen");
$tekeningen = $query->fetchAll();

include_once('meta.php');  
$pgKeywords="Potloodtekeningen";
$pgDesc="Naast mijn job heb ik nog andere creatieve skills. In mijn vrije tijd maak ik potloodtekeningen. Een talentje dat ik zelf ontwikkeld heb.";
$pgTitle="Creatieve skills";
meta($pgKeywords,$pgDesc,$pgTitle);

include_once "./views/creatieveskills.view.php";
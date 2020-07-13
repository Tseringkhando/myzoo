<?php

$sponsor = $tbl_sponsors->search('user_id',$_SESSION['sessuserId']);
$sponsors=$sponsor->fetch();


	// animal sponsor table
	$spa = $tbl_sponsor_animals->search('sponsor_id',$sponsors['id']);
	$spoAnimal = $spa->fetchAll();

$conditions=['sponsors'=>$sponsors,	'spoAnimal'=>$spoAnimal,
		'tbl_animals'=>$tbl_animals];


$title = "Sponsorship Agreement Form";
$content = loadTemplate("../../templates/sponsor/agreementform_template.php",$conditions);
?>

        
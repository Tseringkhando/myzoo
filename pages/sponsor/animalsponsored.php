<?php

//sponsor
	$sp = $tbl_sponsors->search('user_id',$_SESSION['sessuserId']);
	$sponsor = $sp->fetch();
	// animal sponsor table
	$spa = $tbl_sponsor_animals->search('sponsor_id',$sponsor['id']);
	$spoAnimal = $spa->fetchAll();



	// species table
	$specie = $tbl_species->searchAll();
	$species = $specie->fetchAll();


$conditions=[
		'tbl_specie_categories'=>$tbl_specie_categories,
		'sponsor'=>$sponsor,
		'species'=>$species,
		'spoAnimal'=>$spoAnimal,
		'tbl_animals'=>$tbl_animals
	];

$title = "Animals Sponsored";
$content = loadTemplate("../../templates/sponsor/animalsponsored_template.php",$conditions);
?>

		
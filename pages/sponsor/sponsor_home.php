<?php
// all animals
	
	//sponsor
	$sp = $tbl_sponsors->search('user_id',$_SESSION['sessuserId']);
	$sponsor = $sp->fetch();
	// animal sponsor table
	$spa = $tbl_sponsor_animals->search('sponsor_id',$sponsor['id']);
	$spoAnimal = $spa->fetchAll();


	// category table
	$cat = $tbl_specie_categories->searchAll();
	$categories = $cat->fetchAll();

	// species table
	$specie = $tbl_species->searchAll();
	$species = $specie->fetchAll();


$conditions=[
		'categories'=>$categories,
		'sponsor'=>$sponsor,
		'species'=>$species,
		'spoAnimal'=>$spoAnimal,
		'tbl_animals'=>$tbl_animals
	];


$title = "Dashboard";
$content = loadTemplate("../../templates/sponsor/sponsor_home_template.php",$conditions);
?>

		
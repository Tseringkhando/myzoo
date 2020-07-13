<?php
// home controllerof admin
// all animals
	$s = $tbl_animals->searchAll();
	$allAnimals= $s->fetchAll();

// sick
	$sick = $tbl_animals->search('is_sick','1');
	$sickAnimals= $sick->fetchAll();
	// sponsored
	$sponsored = $tbl_animals->search('is_sponsored','1');
	$sponsoredAnimals= $sponsored->fetchAll();
	// for sponorship


	// zookeepers
	$zookeeper=$tbl_users->search('role','zookeeper');
	$zookeepers=$zookeeper->fetchAll();

	// sponsors
	$sponsor=$tbl_sponsors->searchAll();
	$sponsors=$sponsor->fetchAll();

	// category table
	$cat = $tbl_specie_categories->searchAll();
	$categories = $cat->fetchAll();

	// species table
	$specie = $tbl_species->searchAll();
	$species = $specie->fetchAll();


$conditions=[
		'allAnimals'=>$allAnimals,
		'categories'=> $categories,
		'species'=>$species,
		'sickAnimals'=>$sickAnimals,
		'sponsoredAnimals'=>$sponsoredAnimals,
		'zookeepers'=>$zookeepers,
		'sponsors'=>$sponsors

	];

$title = "Dashboard";
$content = loadTemplate("../../templates/staff/home_template.php",$conditions);
?>

		
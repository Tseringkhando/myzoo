<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//using same form for add and edit
//for edit
$cat= $tbl_specie_categories->searchAll();
$categories= $cat->fetchAll();
$specie= $tbl_species->searchAll();
$species= $specie->fetchAll();
$location = $tbl_locations->searchAll();
$locations=$location->fetchAll();

if (isset($_GET['animalId'])) {
	$animals = $tbl_animals->search('id', $_GET['animalId']);
	$animalQuery = $animals->fetch();
	$conditions = [
		'animalQuery' => $animalQuery,
		'categories'=>$categories,
		'species'=>$species,
		'locations'=>$locations
	];
	$title = "Edit Animal";
} else {
	$title = " Add Animal";
	$conditions = [
		'categories'=>$categories,
		'species'=>$species,
		'locations'=>$locations
	];
}

if (isset($_POST['saveAnimal'])) {
	//checking data inserted or not
	if ($_POST['name'] == "") echo "<h2>Insert animal name</h2>";

	else {
		// image upload
	$folder = "../../images/animalprofile/";   
    $tmpimage = $_FILES['animal_photo']['tmp_name'];  
	$urlimage = $folder . basename($_FILES['animal_photo']['name']); 
	
		$vals = [
			'id' => $_POST['id'],
			'name' => $_POST['name'],
			'specie_id'=> $_POST['specie_id'],
			'specie_category_id'=> $_POST['specie_category_id'],
			'gender'=> $_POST['gender'],
			'dob'=> $_POST['dob'],
			'date_joined_zoo'=>$_POST['date_joined_zoo'],
			'age_months'=>$_POST['age_months'],
			'captivity_wild'=>$_POST['captivity_wild'],
			'height_metres'=>$_POST['height_metres'],
			'weight_kg'=>$_POST['weight_kg'],
			'life_span_months'=>$_POST['life_span_months'],
			'dietary'=>$_POST['dietary'],
			'global_population'=>$_POST['global_population'],
			'animal_description'=>$_POST['animal_description'],
			

		];
		// 'animal_photo'=>$_FILES['animal_photo']['name']
		// move_uploaded_file($tmpimage, $urlimage);
		$stmt = $tbl_animals->insertUpdate($vals, 'id');
		if ($stmt) echo ' <script> alert("Animal Added");
					</script>';
		else echo ' <script> alert("Error"); </script>';
	}
}


$content = loadTemplate('../../templates/staff/addanimals_template.php', $conditions);

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//using same form for add and edit
//for edit
// category table
$cat = $tbl_specie_categories->searchAll();
$categories = $cat->fetchAll();
// species table
$specie = $tbl_species->searchAll();
$species = $specie->fetchAll();
// locations table
$location = $tbl_locations->searchAll();
$locations = $location->fetchAll();



if (isset($_GET['animalId'])) {
// health table
$medical = $tbl_health_records->search('animal_id',  $_GET['animalId']);
$health= $medical->fetch();
// death table
$death = $tbl_deaths->search('animal_id',  $_GET['animalId']);
$deaths= $death->fetch();
// transfer table
$transfer = $tbl_transfers->search('animal_id',  $_GET['animalId']);
$transfers= $transfer->fetch();
//birds
$bird = $tbl_birds->search('animal_id',  $_GET['animalId']);
$birds= $bird->fetch();
// mammals
$mammal = $tbl_mammals->search('animal_id',  $_GET['animalId']);
$mammals= $mammal->fetch();
// fishes
$fish = $tbl_fishes->search('animal_id',  $_GET['animalId']);
$fishes= $fish->fetch();
// reptiles
$reptile = $tbl_reptiles_amphibians->search('animal_id',  $_GET['animalId']);
$reptiles= $reptile->fetch();

$animals = $tbl_animals->search('id', $_GET['animalId']);
$animalQuery = $animals->fetch();
	$conditions = [
		'animalQuery' => $animalQuery,
		'categories' => $categories,
		'species' => $species,
		'locations' => $locations,
		'health'=>$health,
		'deaths'=>$deaths,
		'transfers'=>$transfers,
		'birds'=>$birds,
		'mammals'=>$mammals,
		'fishes'=>$fishes,
		'reptiles'=>$reptiles
	];
	$title = "Edit Animal";
} else {
	$title = " Add Animal";
	$conditions = [
		'categories' => $categories,
		'species' => $species,
		'locations' => $locations
	];
}

if (isset($_POST['saveAnimal'])) {
	//checking data inserted or not
	if ($_POST['name'] == "") echo "<h2>Insert animal name</h2>";

	else {
		// image upload
		// $oldfile = $_POST['old'];
		$folder = "../../images/animalprofile/";
		$tmpimage = $_FILES['animal_photo']['tmp_name'];
		$urlimage = $folder . basename($_FILES['animal_photo']['name']);

		//Featured
		if (isset($_POST['is_featured'])) {
			$isFeatured = 1;
		} else {
			$isFeatured = 0;
		}
		//sponsorship
		if (isset($_POST['is_for_sponsorship'])) {
			$isForSponsorship = 1;
		} else {
			$isForSponsorship = 0;
		}
		//sponsored
		if (isset($_POST['is_sponsored'])) {
			$isSponsored = 1;
			$isForSponsorship = 0;
		} else {
			$isSponsored = 0;
		}
		// sick
		if (isset($_POST['is_sick'])) {
			$isSick = 1;
		} else {
			$isSick = 0;
		}
		// dead
		if (isset($_POST['is_dead'])) {
			$isDead = 1;
		} else {
			$isDead = 0;
		}
		// transefer
		if (isset($_POST['is_transferred'])) {
			$isTransferred = 1;
		} else {
			$isTransferred = 0;
		}

		$vals = [
			'id' => $_POST['id'],
			'name' => $_POST['name'],
			'specie_id' => $_POST['specie_id'],
			'specie_category_id' => $_POST['specie_category_id'],
			'gender' => $_POST['gender'],
			'dob' => $_POST['dob'],
			'date_joined_zoo' => $_POST['date_joined_zoo'],
			'age_months' => $_POST['age_months'],
			'captivity_wild' => $_POST['captivity_wild'],
			'height_metres' => $_POST['height_metres'],
			'weight_kg' => $_POST['weight_kg'],
			'life_span_months' => $_POST['life_span_months'],
			'dietary' => $_POST['dietary'],
			'natural_habitat'=>$_POST['natural_habitat'],
			'global_population' => $_POST['global_population'],
			'animal_description' => $_POST['animal_description'],
			'location_id' => $_POST['location_id'],
			'is_sick' => $isSick,
			'is_dead' => $isDead,
			'is_transferred' => $isTransferred,
			'is_featured' => $isFeatured,
			'is_for_sponsorship' => $isForSponsorship,
			'is_sponsored' => $isSponsored,
			'animal_photo'=>$_FILES['animal_photo']['name']
		];
		// 
		move_uploaded_file($tmpimage, $urlimage);
		$stmt = $tbl_animals->insertUpdate($vals, 'id');
			
		if ($stmt) {
			if (isset($_GET['animalId'])){$animalid=$_GET['animalId'];}
			else{$animalid=$tbl_animals->lastPostId();}
			
			$success = true;
			// health table
			if (
				$_POST['medical_condition']!='' ||
				$_POST['treatment']!=''
			) {
				$valHealth = [
					'health_id' => $_POST['health_id'],
					'animal_id' => $animalid,
					'medical_condition' => $_POST['medical_condition'],
					'treatment' => $_POST['treatment']
				];

				$stmtHealth = $tbl_health_records->insertUpdate($valHealth, 'health_id');
				if (!$stmtHealth) {
					$success = false;
					echo ' <script> alert("Health data error"); </script>';
				}
			}
			// death table
			if ($isDead==1) {
				$valDeath = [
					'death_id' => $_POST['death_id'],
					'animal_id' => $animalid,
					'death_date' => $_POST['death_date'],
					'cause' => $_POST['cause'],
					'incineration_date' => $_POST['incineration_date'],
					'incineration_location' => $_POST['incineration_location']
				];

				$stmtDeath = $tbl_deaths->insertUpdate($valDeath, 'death_id');
			
				if (!$stmtDeath) {
					$success = false;
					echo ' <script> alert("Death data error"); </script>';
				}
			}
			// transfer table
			if (
				$isTransferred==1
			) {
				$valTransfer = [
					'transfer_id' => $_POST['transfer_id'],
					'animal_id' => $animalid,
					'transfer_date' => $_POST['transfer_date'],
					'transfer_reason' => $_POST['transfer_reason'],
					'transfer_destination' => $_POST['transfer_destination']
				];
				$stmtTransfer = $tbl_transfers->insertUpdate($valTransfer, 'transfer_id');
				if (!$stmtTransfer) {
					$success = false;
					echo ' <script> alert("Transfer data error"); </script>';
				}
			}
			// birds 
			if (
				$_POST['nest_construction_method']!='' ||
				$_POST['clutch_size']!='' ||
				$_POST['wingspan_in_metres']!='' ||
				$_POST['plumage_colour_variants']!=''
			) {
				$valBirds = [
					'bird_id' => $_POST['bird_id'],
					'animal_id' => $animalid,
					'nest_construction_method' => $_POST['nest_construction_method'],
					'clutch_size' => $_POST['clutch_size'],
					'wingspan_in_metres' => $_POST['wingspan_in_metres'],
					'ability_to_fly' => $_POST['ability_to_fly'],
					'plumage_colour_variants' => $_POST['wingspan_in_metres']
				];
				$stmtBirds = $tbl_birds->insertUpdate($valBirds, 'bird_id');
				if (!$stmtBirds) {
					$success = false;
					echo ' <script> alert("Birds data error"); </script>';
				}
			}

			// mammals
			if (
				$_POST['gestational_period_months']!='' ||
				$_POST['average_body_temperature']!='' ||
				$_POST['color_variants']!='' 
			) {
				$valMammals = [
					'mammal_id' => $_POST['mammal_id'],
					'animal_id' => $animalid,
					'gestational_period_months' => $_POST['gestational_period_months'],
					'average_body_temperature' => $_POST['average_body_temperature'],
					'mammal_category' => $_POST['mammal_category'],
					'color_variants' => $_POST['color_variants']
				];
				$stmtMammals = $tbl_mammals->insertUpdate($valMammals, 'mammal_id');
				if (!$stmtMammals) {
					$success = false;
					echo ' <script> alert("Mammal\'s data error"); </script>';
				}
			}
			// fishes
			if (
				$_POST['fish_average_body_temperature']!='' ||
				$_POST['fish_colour_variants']!='' 
			) {
				$valFish = [
					'fish_id' => $_POST['fish_id'],
					'animal_id' => $animalid,
					'fish_average_body_temperature' => $_POST['fish_average_body_temperature'],
					'water_type' => $_POST['water_type'],
					'fish_colour_variants' => $_POST['fish_colour_variants']
				];
				$stmtFish = $tbl_fishes->insertUpdate($valFish, 'fish_id');
				if (!$stmtFish) {
					$success = false;
					echo ' <script> alert("Fishes data error"); </script>';
				}
			}
			// reptiles
			if (
				
				$_POST['rep_average_clutch_size']!='' ||
				$_POST['rep_average_offspring']!='' 
			) {
				$valReptiles = [
					'reptile_id' => $_POST['reptile_id'],
					'animal_id' => $animalid,
					'reproduction_type' => $_POST['reproduction_type'],
					'rep_average_clutch_size' => $_POST['rep_average_clutch_size'],
					'rep_average_offspring' => $_POST['rep_average_offspring']
				];
				$stmtReptile = $tbl_reptiles_amphibians->insertUpdate($valReptiles, 'reptile_id');
				if (!$stmtReptile) {
					$success = false;
					echo ' <script> alert("Reptiles data error"); </script>';
				}
			}
			
			
			
			// end of form
			if ($success) {
				if(isset($_GET['animalId']))
				{
					$vals=[
					'created_by'=>$_SESSION['sessuserId'],
					'animal_id'=>$animalid,
					'action'=>'modified'
				];
				$addtolog=$tbl_log_animals->insert_only($vals);
					$a=$_GET['animalId'];
					echo ' <script> alert("Animal Added");
				document.location="manageanimals";
				</script>';	
			


				}
				else{
					$vals=[
					'created_by'=>$_SESSION['sessuserId'],
					'animal_id'=>$animalid,
					'action'=>'added'
				];
				$addtolog=$tbl_log_animals->insert_only($vals);
					echo ' <script> alert("Animal Added");
				document.location="addanimals";
				</script>';
				}
				
			}
			else{
				echo '<script> alert("Animal data error"); </script>';
			}
			
		} else echo '<script> alert("Animal data error"); </script>';
	}
}


$content = loadTemplate('../../templates/staff/addanimals_template.php', $conditions);

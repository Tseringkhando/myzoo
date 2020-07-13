<?php
//using same form for add and edit
//for edit
$s = $tbl_species->searchAll();
$allSpecies = $s->fetchAll();
if (isset($_GET['specieId'])) {
	$specie = $tbl_species->search('id', $_GET['specieId']);
	$species = $specie->fetch();
	$conditions = [
		'specieQuery' => $species,
		'allSpecies' => $allSpecies
	];
	$title = "Edit Specie";
} else {
	$title = " Add Specie";
	$conditions = ['allSpecies' => $allSpecies];
}

if (isset($_POST['saveSpecie'])) {
	//checking data inserted or not
	if ($_POST['specie_name'] == "") echo "<h2>Insert specie name</h2>";

	else {
		$vals = [
			'id' => $_POST['id'],
			'specie_name' => $_POST['specie_name']
		];
		$stmt = $tbl_species->insertUpdate($vals, 'id');
		if ($stmt) echo ' <script> alert("Specie Added");
		document.location = "addspecies";
					</script>';
		else echo ' <script> alert("Error"); </script>';
	}
}
// delete specie
if (isset($_GET['deletespecieId'])) {
	$id = $_GET['deletespecieId'];
	$stmt = $tbl_species->delete('id', $id);
	if ($stmt) echo ' <script> alert("Deleted");
				document.location = "addspecies";
				</script>';
	else echo ' <script> alert("Error"); </script>';
}


$content = loadTemplate('../../templates/staff/addspecies_template.php', $conditions);

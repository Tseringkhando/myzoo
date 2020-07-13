<?php
	$s = $tbl_animals->search('is_sick','1');
	$allAnimals= $s->fetchAll();
	//using same form for add and edit
	//for edit


	$title= "Manage Animals";
	$conditions=[
		'allAnimals'=>$allAnimals,
		'tbl_specie_categories'=> $tbl_specie_categories,
		'tbl_species'=>$tbl_species
];

	

// delete animal
if (isset($_GET['deleteanimalId'])) {
	$id= $_GET['deleteanimalId'];
	$stmt = $tbl_animals->delete('id', $id);
	if ($stmt) echo ' <script> alert("Deleted");
				document.location = "addanimal";
				</script>';
		else echo ' <script> alert("Error"); </script>';
}
$content= loadTemplate('../../templates/staff/sick_animals_template.php',$conditions);
	
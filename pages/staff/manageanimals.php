<?php
	$s = $tbl_animals->search('is_archived','0');
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
	if ($stmt) 
		{
			$vals=[
					'created_by'=>$_SESSION['sessuserId'],
					'animal_id'=>$id,
					'action'=>'deleted'
				];
				$addtolog=$tbl_log_animals->insert_only($vals);
			echo ' <script> alert("Deleted");
				document.location = "manageanimals";
				</script>';
			}
		else echo ' <script> alert("Error"); </script>';
}

// archive animal
if (isset($_GET['archiveAnimalId'])) {
	$id= $_GET['archiveAnimalId'];
	$vals=['id'=>$id, 'is_archived'=>'1'];
	$stmt = $tbl_animals->update_only($vals,'id');
	if ($stmt) {
		$vals=[
					'created_by'=>$_SESSION['sessuserId'],
					'animal_id'=>$id,
					'action'=>'archived'
				];
				$addtolog=$tbl_log_animals->insert_only($vals);
		echo ' <script> alert("Archived");
				document.location = "manageanimals";
				</script>';}
		else echo ' <script> alert("Error"); </script>';
}

$content= loadTemplate('../../templates/staff/manageanimals_template.php',$conditions);
	
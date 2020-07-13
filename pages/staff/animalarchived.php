<?php
	$s = $tbl_animals->search('is_archived','1');
	$allAnimals= $s->fetchAll();


	$title= "Animals - Archived";
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
				document.location = "animalarchived";
				</script>'; }
				
		else echo ' <script> alert("Error"); </script>';
}

// archive animal
if (isset($_GET['unarchiveAnimalId'])) {
	$id= $_GET['unarchiveAnimalId'];
	$vals=['id'=>$id, 'is_archived'=>'0'];
	$stmt = $tbl_animals->update_only($vals,'id');
	if ($stmt) {
		$vals=[
			'created_by'=>$_SESSION['sessuserId'],
			'animal_id'=>$id,
			'action'=>'unarchived'
				];
		$addtolog=$tbl_log_animals->insert_only($vals);
		echo ' <script> alert("Restored");
				document.location = "animalarchived";
				</script>';
			}
		else echo ' <script> alert("Error"); </script>';
}

$content= loadTemplate('../../templates/staff/animalarchived_template.php',$conditions);
	
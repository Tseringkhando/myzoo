<?php
	$s = $tbl_sponsors->searchAll();
	$allSponsors= $s->fetchAll();
	//using same form for add and edit
	//for edit


	$title= "Sponsors";
	$conditions=[
		'allSponsors'=>$allSponsors
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
$content= loadTemplate('../../templates/staff/sponsors_template.php',$conditions);
	
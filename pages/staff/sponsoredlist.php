<?php
	$s = $tbl_sponsor_animals->search('is_approved','1');
	$allRequests= $s->fetchAll();
	if($allRequests!=[])
	{


	
	$conditions=[
		'allRequests'=>$allRequests,
		'tbl_sponsors'=>$tbl_sponsors,
		'tbl_animals'=>$tbl_animals
];

	}
	else{
		$allRequests=[];
		$conditions=['allRequests'=>$allRequests];
	}

	$title= "Sponsorship Requests";

// delete animal
if (isset($_GET['deleteanimalId'])) {
	$id= $_GET['deleteanimalId'];
	$stmt = $tbl_animals->delete('id', $id);
	if ($stmt) echo ' <script> alert("Deleted");
				document.location = "addanimal";
				</script>';
		else echo ' <script> alert("Error"); </script>';
}
$content= loadTemplate('../../templates/staff/sponsoredlist_template.php',$conditions);
	
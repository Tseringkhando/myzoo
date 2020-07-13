<?php
	$s = $tbl_sponsor_animals->search('is_approved','0');
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

if(isset($_GET['requestId']))
{
	$vals=[
		'sponsorship_id'=>$_GET['requestId'],
		'is_approved'=> '1'];
	$stmt = $tbl_sponsor_animals->update_only($vals,'sponsorship_id');
	if($stmt)
	{
		$vals=[
		'id'=>$_GET['aId'],
		'is_sponsored'=> '1',
		'is_for_sponsorship'=>'0'];
		$stmt2 = $tbl_animals->update_only($vals,'id');
		if($stmt2)
		echo ' <script> alert("Approved");
				document.location = "sponsorship_requests";
				</script>';
	}
}
// delete animal
if (isset($_GET['deleteanimalId'])) {
	$id= $_GET['deleteanimalId'];
	$stmt = $tbl_animals->delete('id', $id);
	if ($stmt) echo ' <script> alert("Deleted");
				document.location = "addanimal";
				</script>';
		else echo ' <script> alert("Error"); </script>';
}
$content= loadTemplate('../../templates/staff/sponsorship_requests_template.php',$conditions);
	
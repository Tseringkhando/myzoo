<?php
	$s = $tbl_locations->searchAll();
	$allLocations= $s->fetchAll();
	//using same form for add and edit
	//for edit
	if(isset($_GET['locationId']))
	{
		$location= $tbl_locations->search('id',$_GET['locationId']);
		$locations= $location->fetch();
	$conditions=[
		'locations'=>$locations,
		'allLocations'=>$allLocations
		];
        $title="Edit Location";
}
else{
	$title= " Add Location";
	$conditions=['allLocations'=>$allLocations];
}
	
	if (isset($_POST['saveLocation'])) {
//checking data inserted or not
	if($_POST['location'] == "" ) echo "<h2>Insert location name</h2>";
		
else{
	$vals=[
			'id'=>$_POST['id'],
            'location'=>$_POST['location'],
            'vacant'=>$_POST['vacant'],
            'dimension_sqft'=> $_POST['dimension_sqft']
		];
		$stmt = $tbl_locations->insertUpdate($vals,'id');
		if($stmt) echo ' <script> alert("Location Added");
						document.location = "addlocation";
					</script>';
		else echo ' <script> alert("Error"); </script>';
	}
}
// delete location
if (isset($_GET['deletelocationId'])) {
	$id= $_GET['deletelocationId'];
	$stmt = $tbl_locations->delete('id', $id);
	if ($stmt) echo ' <script> alert("Deleted");
				document.location = "addlocation";
				</script>';
		else echo ' <script> alert("Error"); </script>';
}
$content= loadTemplate('../../templates/staff/addlocation_template.php',$conditions);
	
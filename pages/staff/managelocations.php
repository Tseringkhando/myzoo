<?php 
$title= "Harry's Holiday - Locations";
if (isset($_POST['delete'])) {
	$stmt=$locations_table->delete('id',$_POST['id']);
}
	$location = $locations_table->searchAll('category');

	$conditions=['location'=> $location];
	$content= loadTemplate('../../templates/staff/managelocations_template.php',$conditions);
 ?>
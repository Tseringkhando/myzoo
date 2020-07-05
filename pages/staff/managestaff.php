<?php 
	//delete staff
if (isset($_POST['delete'])) {
	$st= $staff_table->delete('id',$_POST['id']);
}
	$staff_list=$staff_table->searchAll();
	$staff=$staff_list->fetchAll();

	$conditions=[
		'staff'=>$staff
	];
	$title= "Harry's Holidays - Staff";
	$content= loadTemplate('../../templates/staff/managestaff_template.php',$conditions);
 ?>
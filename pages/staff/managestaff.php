<?php

$s = $tbl_users->searchTwo('role','is_archive','zookeeper','0');
$allUsers = $s->fetchAll();

	$title = " All zookeepers";
	$conditions = ['allUsers' => $allUsers];

if (isset($_GET['deleteStaffId'])) {
	$id = $_GET['deleteStaffId'];
	$stmt = $tbl_users->delete('user_id', $id);
	if ($stmt) 
		{
			$vals=[
			'created_by'=>$_SESSION['sessuserId'],
			'user_id'=>$id,
			'action'=>'deleted'
				];
		$addtolog=$tbl_log_users->insert_only($vals);

			echo ' <script> alert("Deleted");
				document.location = "managestaff";
				</script>';
			}
	else echo ' <script> alert("Error"); </script>';
}

if (isset($_GET['makeAdminStaffId'])) {
	$id = $_GET['makeAdminStaffId'];
	$vals=['user_id'=>$id, 'role'=>'admin'];
	$stmt = $tbl_users->update_only($vals,'user_id');
	if ($stmt) 
		{
			$vals=[
			'created_by'=>$_SESSION['sessuserId'],
			'user_id'=>$id,
			'action'=>'made admin'
				];
		$addtolog=$tbl_log_users->insert_only($vals);
			echo ' <script> alert("Admin Added");
				document.location = "managestaff";
				</script>';
			}
	else echo ' <script> alert("Error"); </script>';
}


	// archive 
if (isset($_GET['archiveStaffId'])) {
	$id= $_GET['archiveStaffId'];
	$vals=['user_id'=>$id, 'is_archive'=>'1'];
	$stmt = $tbl_users->update_only($vals,'user_id');
	if ($stmt) {
		$vals=[
			'created_by'=>$_SESSION['sessuserId'],
			'user_id'=>$id,
			'action'=>'archived'
				];
		$addtolog=$tbl_log_users->insert_only($vals);
		echo ' <script> alert("Archived");
				document.location = "managestaff";
				</script>';
			}
		else echo ' <script> alert("Error"); </script>';
}


$content = loadTemplate('../../templates/staff/managestaff_template.php', $conditions);

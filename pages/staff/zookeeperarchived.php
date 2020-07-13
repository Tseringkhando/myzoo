<?php

$s = $tbl_users->searchTwo('role','is_archive','zookeeper','1');
$allUsers = $s->fetchAll();

	$title = " Zookeepers- Archived";
	$conditions = ['allUsers' => $allUsers];

if (isset($_GET['deleteStaffId'])) {
	$id = $_GET['deleteStaffId'];
	$stmt = $tbl_users->delete('user_id', $id);
	if ($stmt) {
		$vals=[
			'created_by'=>$_SESSION['sessuserId'],
			'user_id'=>$id,
			'action'=>'deleted'
				];
		$addtolog=$tbl_log_users->insert_only($vals);
		echo ' <script> alert("Deleted");
				document.location = "zookeeperarchived";
				</script>';}
	else echo ' <script> alert("Error"); </script>';
}



	// unarchive 
if (isset($_GET['unarchiveStaffId'])) {
	$id= $_GET['unarchiveStaffId'];
	$vals=['user_id'=>$id, 'is_archive'=>'0'];
	$stmt = $tbl_users->update_only($vals,'user_id');
	if ($stmt) {
		$vals=[
			'created_by'=>$_SESSION['sessuserId'],
			'user_id'=>$id,
			'action'=>'unarchived'
				];
		$addtolog=$tbl_log_users->insert_only($vals);
		echo ' <script> alert("User restored");
				document.location = "zookeeperarchived";
				</script>';
			}
		else echo ' <script> alert("Error"); </script>';
}


$content = loadTemplate('../../templates/staff/zookeeperarchived_template.php', $conditions);

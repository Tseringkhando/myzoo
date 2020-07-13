<?php
$title= 'Admins';
$s = $tbl_users->search('role','admin');
$allUsers = $s->fetchAll();
$conditions = ['allUsers' => $allUsers];

if (isset($_GET['removeAdminId'])) {
	$id = $_GET['removeAdminId'];
	$vals=['user_id'=>$id, 'role'=>'zookeeper'];
	$stmt = $tbl_users->update_only($vals,'user_id');
	if ($stmt) echo ' <script> alert("Admin Removed");
				document.location = "adminslist";
				</script>';
	else echo ' <script> alert("Error"); </script>';
}


$content = loadTemplate('../../templates/staff/adminslist_template.php', $conditions);

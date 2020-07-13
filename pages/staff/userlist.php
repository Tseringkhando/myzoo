<?php

$s = $tbl_users->search('role','visitor');
$allUsers = $s->fetchAll();

	$title = "Visitors";
	$conditions = ['allUsers' => $allUsers];

if (isset($_GET['deleteUserId'])) {
	$id = $_GET['deleteUserId'];
	$stmt = $tbl_users->delete('user_id', $id);
	if ($stmt) echo ' <script> alert("Deleted");
				document.location = "userlist";
				</script>';
	else echo ' <script> alert("Error"); </script>';
}



$content = loadTemplate('../../templates/staff/userlist_template.php', $conditions);

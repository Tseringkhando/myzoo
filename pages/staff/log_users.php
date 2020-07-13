<?php
	$s = $tbl_log_users->searchAll();
	$allUsers= $s->fetchAll();

	$title= "Log- Zookeepers";
	$conditions=[
		'allUsers'=>$allUsers
];

	

$content= loadTemplate('../../templates/staff/log_users_template.php',$conditions);
	
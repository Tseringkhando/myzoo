<?php
	$s = $tbl_log_animals->searchAll();
	$allAnimals= $s->fetchAll();

	$title= "Log- Animals";
	$conditions=[
		'allAnimals'=>$allAnimals
];

	

$content= loadTemplate('../../templates/staff/log_animals_template.php',$conditions);
	
	
<?php
	$event = $tbl_events->searchAll();
	$events = $event->fetchAll();

	$title='Events';
	$conditions=[
		'events'=>$events
	];

	$content= loadTemplate('../templates/visitor/events_template.php',$conditions);


?>
	
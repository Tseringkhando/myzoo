<?php
$t = $tbl_tickets->searchAll();
$tickets=$t->fetchAll();

$cond=['tickets'=>$tickets];

$title = "Tickets";
	$content = loadTemplate("../templates/visitor/ticket_template.php",$cond);

<?php
$title= 'Tickets';
$s = $tbl_tickets->searchAll();
$allTickets = $s->fetchAll();
$conditions = ['allTickets' => $allTickets];

// add new event
if (isset($_POST['saveTicket'])) {
//checking data inserted or not
	if($_POST['ticket_type'] == "" ) { echo ' <script> alert("Enter ticket type!"); </script>';}
else{
	$vals=[
			'id'=>$_POST['id'],
            'ticket_type'=>$_POST['ticket_type'],
            'price'=>$_POST['price'],
            'created_by'=>$_SESSION['sessuserId']
		];

		$stmt = $tbl_tickets->insertUpdate($vals,'id');
		if($stmt) echo ' <script> alert("Ticket Added");
						document.location="tickets";
					</script>';
		else echo ' <script> alert("Error"); </script>';
	}
}

// del ticket
if (isset($_GET['delTicketId'])) {
	$id= $_GET['delTicketId'];
		$stmt = $tbl_tickets->delete('id', $id);
		if ($stmt) echo ' <script> alert("Ticket Deleted");
					document.location = "tickets";
					</script>';
			else echo ' <script> alert("Error"); </script>';
}


$content = loadTemplate('../../templates/staff/addtickets_template.php', $conditions);

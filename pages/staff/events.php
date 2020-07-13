<?php
$title= 'Events';
$s = $tbl_events->searchAll();
$allEvents = $s->fetchAll();
$conditions = ['allEvents' => $allEvents];

// add new event
if (isset($_POST['saveEvent'])) {
//checking data inserted or not
	if($_POST['title'] == "" ) { echo ' <script> alert("Enter title!"); </script>';}
		
else{
		$folder = "../../images/events/";
		$tmpimage = $_FILES['event_photo']['tmp_name'];
		$urlimage = $folder . basename($_FILES['event_photo']['name']);


	$vals=[
			'id'=>$_POST['id'],
            'title'=>$_POST['title'],
            'on_date'=>$_POST['on_date'],
            'description'=> $_POST['description'],
            'price'=>$_POST['price'],
            'event_photo'=>$_FILES['event_photo']['name'],
            'created_by'=>$_SESSION['sessuserId']

		];

		move_uploaded_file($tmpimage, $urlimage);
		$stmt = $tbl_events->insertUpdate($vals,'id');
		if($stmt) echo ' <script> alert("Event Added");
						document.location="events";
					</script>';
		else echo ' <script> alert("Error"); </script>';
	}
}


$content = loadTemplate('../../templates/staff/events_template.php', $conditions);

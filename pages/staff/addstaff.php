<?php 
// sends id to edit staff information
	if(isset($_GET['stid']))
	{
		$staffs=$staff_table->search('id',$_GET['stid']);
		$staff=$staffs->fetch();
		$conditions=[ 'staff'=>$staff];
	}

	else { $conditions=[];}

	//add edit
	if(isset($_POST['add']))
	{
		if($_POST['username']=="")
			{ echo '<script> 
					alert("Enter username"); 
					</script>';}

		if($_POST['password']=="")
		{	echo '<script> 
					alert("Enter Password"); 
					</script>';}

		else{
		$vals = [
			'id'=>$_POST['id'],
			'username' => $_POST['username'],
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
			'type' => $_POST['type']
		];

		$stmt = $staff_table->insertUpdate($vals,'id');
		if($stmt) echo ' <script> alert("Staff Added");
					document.location = "managestaff";
					</script>';
		else echo ' <script> alert("Error"); </script>';
			}
	}

$title= "Harry's Holidays - Add/Edit Staff";
	$content= loadTemplate('../../templates/staff/addstaff_template.php',$conditions);
 ?>
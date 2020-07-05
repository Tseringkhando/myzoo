<?php


if (isset($_POST['save_zookeeper'])) {
	//staff login verification
	$user = $tbl_users->search('user_email',$_POST['user_email']);
	if ($user->rowCount() <= 0) {
		if ($_POST['user_password'] === $_POST['user_confirmpassword']) {
			$valsUser = [
				'user_id' => $_POST['user_id'],
				'user_email' => $_POST['user_email'],
				'user_password' =>  password_hash($_POST['user_password'], PASSWORD_DEFAULT),
				'firstname' => $_POST['firstname'],
					'lastname' => $_POST['lastname'],
					'gender' => $_POST['gender'],
					'dob' => $_POST['dob'],
					'is_archive'=> '0',
					'role'=>'admin'
			];
			$stmt1 = $tbl_users->insertUpdate($valsUser, 'user_id');

			if ($stmt1) {
			
						echo ' <script> alert("User Added");
					
						</script>';
					}
					else{
						echo ' <script> alert(" error");
						
						</script>';
					}
					
				} 
			
}
else{
	echo '<script> alert("Email already registered."); </script>';
}
}

$title = "Add Zookeeper";
$content= loadTemplate('../../templates/staff/addzookeepers_template.php',[]);
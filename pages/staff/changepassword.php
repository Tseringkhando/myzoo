<?php

$s= $tbl_users->search('user_id',$_SESSION['sessuserId']);
$user=$s->fetch();
$conditions=[];

if(isset($_POST['changePassword'])){
	if(password_verify($_POST['oldpassword'],$user['user_password'])){

		if($_POST['newpassword']==$_POST['confirmpassword'])
		{
			$vals=[
			'user_id'=> $_SESSION['sessuserId'],
			'user_password' =>  password_hash($_POST['newpassword'], PASSWORD_DEFAULT),
		
	];

	$stmt= $tbl_users->update_only($vals,'user_id');
	if($stmt) echo ' <script> alert("Password Updated");
						document.location="changepassword";
					</script>';
		else echo ' <script> alert("Error"); </script>';
		}

		else
		{
			echo ' <script> alert("Passwords not matching"); </script>';
		}
		
	}

	else
	{
		echo ' <script> alert("Incorrect Current Password"); </script>';
	}
	

}
$title = "Change Password";
$content = loadTemplate("../../templates/staff/changepassword_template.php",$conditions);
?>

        
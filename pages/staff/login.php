<?php
// checking if the session is set, if set it ridirects to the admin's homepage
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
	 { header('Location:staff_home'); }
	 
	 // check login button
if(isset($_POST['login']))
{
	//staff login verification
	$staff = $staff_table->search('username',$_POST['username']);
	if($staff->rowCount()>0)
	{
		$staff_row=$staff->fetch();
		if(password_verify($_POST['password'], $staff_row['password']))
		{
			$_SESSION['loggedin']=true;
			$_SESSION['sessuserId']=$staff_row['id'];
			$_SESSION['sessusername']=$staff_row['username'];
			$_SESSION['sessusertype']=$staff_row['type'];
			
			header('Location:staff_home');
		}
		else { echo "Password incorrect"; }
	}
 	else { 	echo "Enter Valid Username"; }
}
 
 $title = "Harry's Holidays- Log In";
 $content = loadTemplate("../../templates/staff/login_template.php", []);
?>
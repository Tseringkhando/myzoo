<?php

// if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
// 	 { header('Location:staff_home'); }

	if(isset($_POST['user_login']))
	{
		//staff login verification
		$user = $tbl_users->search('user_email',$_POST['user_email']);
		if($user->rowCount()>0)
		{
			$user_row=$user->fetch();
			if(password_verify($_POST['user_password'], $user_row['user_password']))
			{
				$_SESSION['loggedin']=true;
				$_SESSION['sessuserId']=$user_row['user_id'];
				$_SESSION['sessusername']=$user_row['user_email'];
				$_SESSION['sessusertype']=$user_row['role'];
				if($_SESSION['sessusertype']=='vistor')
				{
					header('Location:home');
					return;

				}
				
				if($_SESSION['sessusertype']=='admin')
				{
					header('Location:staff/staff_home');
					return;

				}
			}
			else { echo "Password incorrect"; }
		}
		 else { 	echo "Enter Valid Username"; }
	}
	
		$title = "User Login";
		$content = loadTemplate("../templates/visitor/signin_template.php",[]);
	
	

?>
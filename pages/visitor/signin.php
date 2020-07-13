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
				$_SESSION['sessusertype']=$user_row['role'];
				$_SESSION['loggedin']=true;
				$_SESSION['sessuserId']=$user_row['user_id'];
				$_SESSION['sessuseremail']=$user_row['user_email'];
				$username= $user_row['firstname'].' '.$user_row['lastname'];
				$_SESSION['sessUserName']=$username;
				
				
				if($_SESSION['sessusertype']==='admin' || $_SESSION['sessusertype']==='zookeeper')
				{

					header('Location:staff/staff_home');
					exit();

				}
				if($_SESSION['sessusertype']==='sponsor')
				{
					$sponsor = $tbl_sponsors->search('user_id',$_SESSION['sessuserId']);
					$sponsors=$sponsor->fetch();
					$_SESSION['sponsorName']=$sponsors['client_name'];
					header('Location:sponsor/sponsor_home');exit();

				}
				if($_SESSION['sessusertype']==='vistor')
				{
					header('Location:home');
					exit();
				}
				

			}
			else {  echo 
						"<script>
					
						alert('Password Incorrect');
						
						</script>"
			; }
		}
		 else { 	echo "<script>
					
						alert('Invalid Email Id');
						
						</script>"; }
	}
	
		$title = "User Login";
		$content = loadTemplate("../templates/visitor/signin_template.php",[]);
	
	

?>
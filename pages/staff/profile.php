<?php

if(isset($_GET['userId']))
{
$user = $tbl_users->search('user_id',$_GET['userId']);
$users=$user->fetch();
	if($_GET['userId']==$_SESSION['sessuserId'])
	{
		$title = "My Profile";
	}
	else{
		$title='Profile-'.$users['firstname'];
	}

$conditions=['users'=>$users];



$content = loadTemplate("../../templates/staff/profile_template.php",$conditions);
}

else
header('Location:staff_home');

?>

        
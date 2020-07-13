<?php
// loads the pages of the admin
session_start();
require '../../includes/init_staff.php';
if(isset($_GET['page']))
{

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
	 {
	 	require '../../pages/staff/'.$_GET['page']. '.php'; 
	 	
	}
	 else{ header('Location:../signin'); }

}
else{
	require '../../pages/staff/staff_home.php';
}
		
		
$tempVars = [ 'title' => $title, 'content' => $content ];
		
echo loadTemplate('../../templates/staff/layout.php', $tempVars);
<?php
// loads the pages of the sponsor
session_start();
require '../../includes/init_staff.php';
if(isset($_GET['page']))
{

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
	 {
	 	require '../../pages/sponsor/'.$_GET['page']. '.php';
	}	
	else{ header('Location:../signin'); }

}
else{
	require '../../pages/sponsor/sponsor_home.php';
}
		
		
$tempVars = [ 'title' => $title, 'content' => $content ];
		
echo loadTemplate('../../templates/sponsor/layout.php', $tempVars);
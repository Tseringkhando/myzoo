<?php

session_start();
require '../includes/init.php';
if(isset($_GET['page']))
		{
			if($_GET['page']=='login')
			{
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
	 			{ header('Location:staff/staff_home'); }
	 			else{
	 				require '../pages/staff/login.php';}
	 			}
				
			else if($_GET['page']=='logout'){require '../pages/staff/logout.php';}	
			else{require '../pages/visitor/'.$_GET['page']. '.php';}
		}
else{ require '../pages/visitor/home.php'; }
		
$tempVars = [
		'title' => $title,
		'content' => $content
		];
		
echo loadTemplate('../templates/visitor/layout.php', $tempVars);
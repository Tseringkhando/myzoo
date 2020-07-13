<?php

session_start();
require '../includes/init.php';
if(isset($_GET['page']))
		{

			if($_GET['page']=='signin')
			{
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
	 			{ 
	 				if($_SESSION['sessusertype']=='admin'){require '../pages/staff/'.$_GET['page']. '.php';}
	 				if($_SESSION['sessusertype']=='zookeeper'){require '../pages/staff/'.$_GET['page']. '.php';}
	 				if($_SESSION['sessusertype']=='visitor'){require '../pages/visitor/'.$_GET['page']. '.php'; }	
	 				if($_SESSION['sessusertype']=='sponsor'){require '../pages/sponsor/'.$_GET['page']. '.php'; }	
	 			}
	 			else{
	 				require '../pages/visitor/signin.php'; }
	 			}
				
			else{require '../pages/visitor/'.$_GET['page']. '.php';}
		}
else{$_GET['page']='home'; require '../pages/visitor/home.php'; }

	// category table
	$cat = $tbl_specie_categories->searchAll();
	$categories = $cat->fetchAll();
	// species table
	$specie = $tbl_species->searchAll();
	$species = $specie->fetchAll();
	
$tempVars = [
		'title' => $title,
		'content' => $content
		];
		
echo loadTemplate('../templates/visitor/layout.php', $tempVars);
<?php
	// //show special offers on homepage
	// $specials = $specials_table->searchAll();
	// $special = $specials->fetchAll();
	// $condition=['special'=>$special];
	
	$a= $tbl_animals->searchNumber(1,'is_featured','1');
	$featured = $a->fetch();

	$var=['featured'=>$featured];
	 $title = "Claybrook Zoo";
	$content = loadTemplate("../templates/visitor/home_template.php",$var);
?>

		
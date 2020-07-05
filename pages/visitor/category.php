<?php 
	// to view specific category
	$categoryById = $categories_table->search('id',$_GET['catID']);
	$categoryById= $categoryById->fetch();

	//to view holidays of selected category only
	$holidaysByCategory= $holidays_table->search('categoryId',$_GET['catID']);

	//al cats
	$categoryQuery = $categories_table->searchAll();
	$categoryQuery->execute();
	$categoryList = $categoryQuery->fetchAll();

	$contents=[
		'categoryById'=>$categoryById,
		'holidaysByCategory'=>$holidaysByCategory,
		'categories_table'=>$categories_table,
		'categoryList'=>$categoryList
	];

	$title= $categoryById['name'];
	$content=loadTemplate("../templates/visitor/category_template.php",$contents)
 ?>
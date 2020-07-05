<?php 
//lists the catgories and add delete function
if (isset($_POST['delete'])) {
	$stmt=$categories_table->delete('id',$_POST['id']);
}
	$categories = $categories_table->searchAll('category');

	$conditions=['categories'=> $categories];
	$title= "Harry's Holidays - All Categories";
	$content= loadTemplate('../../templates/staff/managecategories_template.php',$conditions);

 ?>
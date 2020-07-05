<?php 
//for user's question form
	if(isset($_POST['ask']))
	{
		$information=[
			'holidayId'=>$_POST['holidayId'],
			'email'=>$_POST['email'],
			'contact'=>$_POST['contact'],
			'question'=>$_POST['question']
		];

		$submitted = $questions_table->insert_only($information);
		if($submitted == true){
			echo ' <script> alert("Question registered");
					document.location = "holidays";
					</script>';
		}
	}
//to show holidays
	$holidayQuery = $holidays_table->searchNumber('10');
	$holidayQuery->execute();
//to list all the categories
	$categoryQuery = $categories_table->searchAll();
	$categoryQuery->execute();
	$categoryList = $categoryQuery->fetchAll();

	$contents=[
			'holidayQuery'=> $holidayQuery,
			'categoryQuery'=>$categoryQuery,
			'categoryList'=> $categoryList,
			'categories_table'=>$categories_table,
			'locations_table'=>$locations_table
		];
	$title = "Harry's Holidays - Holidays";
	$content = loadTemplate("../templates/visitor/holidays_template.php",$contents);

 ?>
	<?php
	// to make use of same form for edit and add of category
	$allcat= $tbl_specie_categories->searchAll();
		$allCategories=$allcat->fetchAll();
		if (isset($_GET['catid'])) {
		
		$categories = $tbl_specie_categories->search('id', $_GET['catid']);
		$catQuery = $categories->fetch();
		$conditions = [
			'catQuery' => $catQuery,
			'allCategories'=>$allCategories
		];
		$title = "Edit Category";
	} else {
		$title = "Add Category";
		$conditions = [
		'allCategories'=>$allCategories];
	}

	if (isset($_POST['saveCategory'])) 
	{
		if ($_POST['category'] == "") echo "<h2>Insert category name</h2>";

		else {
			$vals = [
				'id' => $_POST['id'],
				'category' => $_POST['category']
			];
			$stmt = $tbl_specie_categories->insertUpdate($vals, 'id');
			if ($stmt) echo ' <script> alert("Category Added");
					document.location = "addcategory";
					</script>';
			else echo ' <script> alert("Error"); </script>';
		}
	}

	// delete category
	if (isset($_GET['deleteCatId'])) {
		$id= $_GET['deleteCatId'];
		$stmt = $tbl_specie_categories->delete('id', $id);
		if ($stmt) echo ' <script> alert("Category Deleted");
					document.location = "addcategory";
					</script>';
			else echo ' <script> alert("Error"); </script>';
	}

	


	$content = loadTemplate('../../templates/staff/addcategory_template.php', $conditions);

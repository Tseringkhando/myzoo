	<?php
	// to make use of same form for edit and add of category
	$allcat= $tbl_specie_categories->search('is_archived','1');
		$allCategories=$allcat->fetchAll();
	

	// delete category
	if (isset($_GET['deleteCatId'])) {
		$id= $_GET['deleteCatId'];
		$stmt = $tbl_specie_categories->delete('id', $id);
		if ($stmt) echo ' <script> alert("Category Deleted");
					document.location = "categoryarchived";
					</script>';
			else echo ' <script> alert("Error"); </script>';
	}

	// archive 
if (isset($_GET['unarchiveCatId'])) {
	$id= $_GET['unarchiveCatId'];
	$vals=['id'=>$id, 'is_archived'=>'0'];
	$stmt = $tbl_specie_categories->update_only($vals,'id');
	if ($stmt) echo ' <script> alert("Restored");
				document.location = "categoryarchived";
				</script>';
		else echo ' <script> alert("Error"); </script>';
}
	
	$title="Categories-Archived";
	$conditions = [
		'allCategories'=>$allCategories];
	$content = loadTemplate('../../templates/staff/categoryarchived_template.php', $conditions);

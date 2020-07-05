<?php
	//using same form for add and edit
	//for edit
	if(isset($_GET['specieId']))
	{
		$specie= $tbl_species->search('id',$_GET['specieId']);
		$species= $specie->fetch();
	$conditions=[
		'species'=>$species
		];
        $title="Edit Specie";
}
else{
	$title= " Add Specie";
	$conditions=[];
}
	
	if (isset($_POST['saveSpecie'])) {
//checking data inserted or not
	if($_POST['specie_name'] == "" ) echo "<h2>Insert specie name</h2>";
		
else{
	$vals=[
			'id'=>$_POST['id'],
			'specie_name'=>$_POST['specie_name']
		];
		$stmt = $tbl_species->insertUpdate($vals,'id');
		if($stmt) echo ' <script> alert("Specie Added");
					</script>';
		else echo ' <script> alert("Error"); </script>';
	}
}


	$content= loadTemplate('../../templates/staff/addspecies_template.php',$conditions);
	
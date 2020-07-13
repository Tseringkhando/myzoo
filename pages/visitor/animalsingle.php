	
<?php
if(isset($_GET['animalSingleId']))
{
	$id=$_GET['animalSingleId'];
	$s = $tbl_animals->search('id',$id);
	$allAnimals= $s->fetch();

	// category table
	$cat = $tbl_specie_categories->search('id',$allAnimals['specie_category_id']);
	$categories = $cat->fetch();
	// species table
	$specie = $tbl_species->search('id',$allAnimals['specie_id']);
	$species = $specie->fetch();

	$location = $tbl_locations->search('id',$allAnimals['location_id']);
	$locations =$location->fetch();

	if($allAnimals['is_sponsored']==1)
	{
	$isSponsored=$allAnimals['is_sponsored'];
	$sponsorAnimal=$tbl_sponsor_animals->search('animal_id',$allAnimals['id']);
	$sponsorAnimals=$sponsorAnimal->fetch();

	$sponsor=$tbl_sponsors->search('id',$sponsorAnimals['sponsor_id']);
	$sponsors=$sponsor->fetch();

	}
	else{
		$sponsors=[];
	}
	$title=$allAnimals['name'];
	$pagetitle=$allAnimals['name'];
	$conditions=[
	'pagetitle'=>$pagetitle,
	'allAnimals'=>$allAnimals,
	'categories'=> $categories,
	'species'=>$species,
	'locations'=>$locations,
	'sponsors'=>$sponsors
	];

	$content= loadTemplate('../templates/visitor/animalsingle_template.php',$conditions);


}

else
{
	header('Location:animals');
}

?>
	
<?php
	$s = $tbl_animals->search('is_archived','0');
	$allAnimals= $s->fetchAll();

	// category table
	$cat = $tbl_specie_categories->searchAll();
	$categories = $cat->fetchAll();
	// species table
	$specie = $tbl_species->searchAll();
	$species = $specie->fetchAll();


		if(isset($_POST['search']))
		{
			$title= "Search Results";
			$pagetitle="Results";
			$keyword=$_POST['searchKeyword'];
			if(isset($_POST['searchCategory']))
			{
				$catkey=$_POST['searchCategory'];
			}
			else
			{
				$catkey='all';
			}
			if(isset($_POST['searchIsSponsered'])){
			$isSponsored=$_POST['searchIsSponsered'];
			}
			else
			{
				$isSponsored='all';
			}


			//only category is there

		if($keyword=='')
		{
			if($catkey!='all' && $isSponsored=='all')
			{
				$stmt= $tbl_animals->search('specie_category_id',$catkey);
				if($stmt){
				$allAnimals= $stmt->fetchAll();}

			}

			else if($catkey!='all' && $isSponsored!='all')
			{
				$stmt= $tbl_animals->searchTwo('specie_category_id','is_for_sponsorship',$catkey,$isSponsored);
				if($stmt){$allAnimals= $stmt->fetchAll();
				}

				
			}

			else if($catkey=='all' && $isSponsored!='all')
			{
				$stmt= $tbl_animals->search('is_for_sponsorship',$isSponsored);
				if($stmt){
				$allAnimals= $stmt->fetchAll();}
			}

			else{}
		}
	// when keyword is given
		else
		{
			// when all is selected
			if($catkey=='all' && $isSponsored=='all')
			{
				$stmt= $tbl_animals->searchAnimal('name',$keyword);
				if($stmt){
				$allAnimals= $stmt->fetchAll();}
			}

			if($catkey=='all' && $isSponsored!='all')
			{
				$stmt= $tbl_animals->searchTwoWithName('is_for_sponsorship','name',$isSponsored,$keyword);
				if($stmt)
					{
						$allAnimals= $stmt->fetchAll();
					}


			}

			if($catkey!='all' && $isSponsored!='all')
			{
				$stmt= $tbl_animals->searchThree('specie_category_id','is_for_sponsorship','name',$catkey,$isSponsored,$keyword);
				if($stmt){$allAnimals= $stmt->fetchAll();}
				
			}

			if($catkey!='all' && $isSponsored=='all')
			{
				$stmt= $tbl_animals->searchTwoWithName('specie_category_id','name',$catkey,$keyword);
				if($stmt)
					{
						$allAnimals= $stmt->fetchAll();
					}
			}

		}
		}

		
		else{
			$title= "Animals";
			$pagetitle="Animals";


		}

	$conditions=[
		'pagetitle'=>$pagetitle,
		'allAnimals'=>$allAnimals,
		'categories'=> $categories,
		'species'=>$species];
$content= loadTemplate('../templates/visitor/animals_template.php',$conditions);
	
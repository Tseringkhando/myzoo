<?php
//imports required to open the pages
	require '../database/dbcon.php';
	require '../functions/loadTemplate.php';
	require '../model/Databases.php';


	$tbl_animals= new Databases('animals');
	$tbl_health_records= new Databases('animal_health_records');
	$tbl_birds= new Databases('birds');
	$tbl_deaths= new Databases('deaths');
	$tbl_fishes= new Databases('fishes');
	$tbl_locations= new Databases('locations');
	$tbl_mammals= new Databases('mammals');
	$tbl_reptiles_amphibians= new Databases('reptiles_amphibians');
	$tbl_roles= new Databases('roles');
	$tbl_species= new Databases('species');
	$tbl_specie_categories= new Databases('specie_categories');
	$tbl_sponsors= new Databases('sponsors');
	$tbl_sponsor_animals= new Databases('sponsor_animals');
	$tbl_transfers= new Databases('transfers');
	$tbl_users= new Databases('users');
	$tbl_user_roles= new Databases('user_roles');
	$tbl_zookeepers= new Databases('zookeepers');
	$tbl_visitors= new Databases('visitors');
	$tbl_events= new Databases('events');
	$tbl_tickets= new Databases('tickets');
	$tbl_log_animals= new Databases('log_animals');
	$tbl_log_users= new Databases('log_users');

?>
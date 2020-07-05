<?php 
		//staff login
	function testLogin($cara){
		$check = true;
		if($cara['username'] == ""){$check = false;}
		if($cara['password'] == ""){ $check = false;}
		return $check; }
	
	//add category form
	function testCategories($cara){
		$validity = true;
		if($cara['name'] == ""){$validity = false;}
		return $validity; }

	//check add holidays form
	function testHolidays($cara){
		$validity = true;
		if($cara['name'] == ""){ 	$validity = false; }
		if($cara['description'] == ""){ $validity = false;	}
		if($cara['price'] == ""){ $validity = false; }
		return $validity; }

	//holiday offers form
	function testHolSpecial($cara){
		$validity = true;
		if($cara['title'] == ""){ $validity = false; }
		if($cara['description'] == ""){ $validity = false; }
		if($cara['start_date'] == ""){ $validity = false; }
		return $validity; }

	//the staff add
	function testStaff($caraa){
		$validity = true;
		if($caraa['username'] == ""){ $validity = false; }
		if($caraa['password'] == ""){ $validity = false; }
		return $validity; }

	//the question form
	function testQuestions($cara){
		$validity = true;
		if($cara['email'] == ""){ $validity = false; }
		if($cara['contact'] == ""){ $validity = false; }
		if($cara['question'] == ""){ $validity = false; }
		return $validity; }

	//locations form
	function testLocations($cara){
		$validity = true;
		if($cara['location'] == ""){$validity = false;}
		return $validity; }

?>
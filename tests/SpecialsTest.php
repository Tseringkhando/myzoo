<?php 
//testin add specials
	class SpecialsTest extends \PHPUnit_Framework_TestCase
	{
		//all
		function testValidAll(){
			$caraa = [ 'title' => 'holidat', 'description' => 'newdate', 'start_date' => '2019-11-2' ];
			$assert = testHolSpecial($caraa);
			$this->assertTrue($assert); }

		//empty
		function testNone(){
			$caraa = [ 'title' => '', 'description' => '', 'start_date' => '' ];
			$assert = testHolSpecial($caraa);
			$this->assertFalse($assert); }

		//title
		function testTitle(){
			$caraa = [ 'title' => '', 'description' => 'newdate', 'start_date' => '2019-11-2' ];
			$assert = testHolSpecial($caraa);
			$this->assertFalse($assert); }
		
		//description of holiday offer
		function testDescription(){
			$caraa = [ 'title' => 'holidat', 'description' => '', 	'start_date' => '2019-11-2' ];
			$assert = testHolSpecial($caraa);
			$this->assertFalse($assert); }

		//start date 
		function testDate(){
			$caraa = [ 	'title' => 'holidat', 'description' => 'newdate', 'start_date' => '' ];
			$assert = testHolSpecial($caraa);
			$this->assertFalse($assert); }
		
	}
?>
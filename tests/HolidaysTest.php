<?php 
	//holidays form testing
	class HolidaysTest extends \PHPUnit_Framework_TestCase
	{
		//all empty
		function testNone(){
			$caraa = [ 'name' => '', 'description' => '', 'price' => '' ];
			$asst = testHolidays($caraa);
			$this->assertFalse($asst); }

		//all filled
		function testAll(){
			$caraa = [ 'name' => 'abc', 'description' => 'afd', 'price' => '123.3' ];
			$asst = testHolidays($caraa);
			$this->assertTrue($asst);
		}
		//no name
		function testName(){
			$caraa = [ 'name' => '', 'description' => 'afd', 'price' => '123.3' ];
			$asst = testHolidays($caraa);
			$this->assertFalse($asst);
		}
		//no price
		function testPrice(){
			$caraa = [ 'name' => 'abc', 'description' => 'afd', 'price' => '' ];
			$asst = testHolidays($caraa);
			$this->assertFalse($asst);
		}
		//no description
		function testDesc(){
			$caraa = [ 'name' => 'abc', 'description' => '', 'price' => '123.3' ];
			$asst = testHolidays($caraa);
			$this->assertFalse($asst);
		}
		
		
		
	}
?>
<?php 
	class LocationsTest extends \PHPUnit_Framework_TestCase
	{
		//with location
		function testName(){
			$caara = [ 'location' => '' ];
			$assertions = testLocations($caara);
			$this->assertFalse($assertions);
		}
		//without location
		function testValidCategory(){
			$caara = [ 'location' => 'beach' ];
			$assertions = testLocations($caara);
			$this->assertTrue($assertions);
		}
	}
?>
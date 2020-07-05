<?php 
require 'functions/testings.php';
	class CategoriesTest extends \PHPUnit_Framework_TestCase
	{
		//with name
		function testName(){
			$caara = [ 'name' => '' ];
			$assertions = testCategories($caara);
			$this->assertFalse($assertions);
		}
		//without name
		function testValidCategory(){
			$caara = [ 'name' => 'beach' ];
			$assertions = testCategories($caara);
			$this->assertTrue($assertions);
		}
	}
?>
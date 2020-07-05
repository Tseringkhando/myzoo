<?php 
//tests carried on staff add form
	class StaffTest extends \PHPUnit_Framework_TestCase{
		function testEmptyForm(){
			$caras = ['username' => '', 'password' => '', 'type' => ''];
			$assertion = testStaff($caras);
			$this->assertFalse($assertion); }
				//empty username
		function testUsername(){
			$caras = [ 'username' => '', 'password' => 'testing', 'type' => 'abc' ];
			$assertion = testStaff($caras);
			$this->assertFalse($assertion); }

			//no password
		function testPassword(){
			$caras = [ 'username' => 'testing', 'password' => '', 'type' => 'abc' ];
			$assertion = testStaff($caras);
			$this->assertFalse($assertion);}

		function testAll(){
			$caras = [ 'username' => 'cc', 'password' => 'dd', 'type' => 'aa' ];
			$assertion = testStaff($caras);
			$this->assertTrue($assertion);
		}
	}
?>
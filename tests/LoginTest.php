<?php 
//tests carried on staff login form
	class LoginTest extends \PHPUnit_Framework_TestCase{
		//all filled
		function testAll(){
			$caras = [ 'username' => 'cc', 'password' => 'dd'];
			$assertion = testLogin($caras);
			$this->assertTrue($assertion);
				//none filled
		function testEmptyForm(){
			$caras = ['username' => '', 'password' => ''];
			$assertion = testLogin($caras);
			$this->assertFalse($assertion); }

			//empty username
		function testUsername(){
			$caras = [ 'username' => '', 'password' => 'testing' ];
			$assertion = testLogin($caras);
			$this->assertFalse($assertion); }

			//no password
		function testPassword(){
			$caras = [ 'username' => 'testing', 'password' => '' ];
			$assertion = testLogin($caras);
			$this->assertFalse($assertion);}
		}
	}
?>
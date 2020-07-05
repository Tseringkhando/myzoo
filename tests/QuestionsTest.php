<?php 
	class QuestionsTest extends \PHPUnit_Framework_TestCase
	{
		//empty
		function testNone(){
			$cara = [
				'email' => '', 'contact' => '', 'question' => '' ];
			$assertions = testQuestions($cara);
			$this->assertFalse($assertions);
		}
		//all filled
		function testAll(){
			$cara = [  'email' => 'sth@g.com', 'contact' => '984323423', 'question' => 'qss' ];
			$assertions = testQuestions($cara);
			$this->assertTrue($assertions);
		}
		//email
		function testEmail(){
			$cara = [ 'email' => '', 'contact' => '984323423', 'question' => 'anything'];
			$assertions = testQuestions($cara);
			$this->assertFalse($assertions);
		}
		// no contact
		function testContactno(){
			$cara = [ 'email' => 'sth@g.com', 'contact' => '', 'question' => 'anything' ];
			$assertions = testQuestions($cara);
			$this->assertFalse($assertions);
		}
		//empty text
		function testQuestion(){
			$cara = ['email' => 'sth@g.com', 	'contact' => '984323423', 'question' => '' ];
			$assertions = testQuestions($cara);
			$this->assertFalse($assertions);
		}
		
	}
?>
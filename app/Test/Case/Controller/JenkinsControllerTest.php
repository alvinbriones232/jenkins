<?php
App::uses('MessagesController', 'Controller');
class JenkinsControllerTest extends ControllerTestCase {
	/*public $fixtures = array(
		'app.message'
	);*/
	$data = array('1','2');
	public function testIndex($data) {
		$a = $this->testAction('/',array('return' => 'vars'));
		debug($a);
	}

}

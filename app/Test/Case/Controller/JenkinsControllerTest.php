<?php
App::uses('MessagesController', 'Controller');
class JenkinsControllerTest extends ControllerTestCase {
	/*public $fixtures = array(
		'app.message'
	);*/
	public function testIndex() {
		$a = $this->testAction('/',array('return' => 'vars'));
		debug($a);
	}

}

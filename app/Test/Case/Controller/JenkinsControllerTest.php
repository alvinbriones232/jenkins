<?php
App::uses('MessagesController', 'Controller');
class JenkinsControllerTest extends ControllerTestCase {

	public function testIndex() {
		$a = $this->testAction('/');
		$this->expectOutputString('bar');
		print($a);
	}

}

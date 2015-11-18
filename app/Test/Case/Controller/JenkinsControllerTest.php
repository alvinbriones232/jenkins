<?php
App::uses('MessagesController', 'Controller');
class JenkinsControllerTest extends ControllerTestCase {

	public function testIndex() {
		$this->testAction('/');
	}

}

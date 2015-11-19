<?php
App::uses('MessagesController', 'Controller');
class JenkinsControllerTest extends ControllerTestCase {

	public function testIndex() {
		$this->expectOutputString('bar');
        print 'test';
	}

}

<?php
App::uses('MessagesController', 'Controller');
class JenkinsControllerTest extends ControllerTestCase {
	/*public $fixtures = array(
		'app.message'
	);*/
	public function testIndex() {
		$act = $this->testAction('/jenkins/index');
		if($act) {
			$this->assertTrue($act);
		} else {
			$this->assertFalse($act);
		}
		
	}

}

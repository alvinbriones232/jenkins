<?php
App::uses('MessagesController', 'Controller');
class JenkinsControllerTest extends ControllerTestCase {
	/*public $fixtures = array(
		'app.message'
	);*/
	public function testIndex() {
		/*$act = $this->testAction('/jenkins/index');
		if($act == true) {
			$this->assertTrue($act);
		} else {
			$this->assertFalse($act);
		}*/
		$this->autoRender = false;
		$this->Test = ClassRegistry::init('Test');
		$data = array('Test' => array(
			'first_name' => 'James Fairhurst',
			'last_name' => 'asdasdsdasdas',
			'date_created' => date('Y-m-d H:i:s'),
			'date_modified' => date('Y-m-d H:i:s')
		));

		// Attempt to save
		$result = $this->Test->save($data);
		$this->assertTrue($result);
		
	}

}

<?php
App::uses('MessagesController', 'Controller');
class JenkinsControllerTest extends ControllerTestCase {
	/*public $fixtures = array(
		'app.message'
	);*/
	public function testIndex() {
		$data = array('Test' => array(
			'first_name' => 'James Fairhurst',
			'last_name' => 'hdasnbdagdasgd',
			'date_created' => date('Y-m-d H:i:s'),
			'date_modified' => date('Y-m-d H:i:s')
		));

		// Attempt to save
		$result = $this->Test->save($data);

		// Test save failed
		$this->assertFalse($result);
	}

}

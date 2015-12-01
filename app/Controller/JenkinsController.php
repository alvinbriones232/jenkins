<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 * @property PaginatorComponent $Paginator
 */
class JenkinsController extends AppController {
	public function index() {
		$this->autoRender = false;
		$this->Test = ClassRegistry::init('Test');
		$data = array('Test' => array(
			'first_name' => 'Neil Solomon',
			'last_name' => 'Lesidan',
			'date_created' => date('Y-m-d H:i:s'),
			'date_modified' => date('Y-m-d H:i:s')
		));

		// Attempt to save
		$result = $this->Test->save($data);
		return ($result) ? true : false;
		#asdhashbahdasfydasjfasgbaefasbfasfasfasghfasdfashdfasdh
 	}
}

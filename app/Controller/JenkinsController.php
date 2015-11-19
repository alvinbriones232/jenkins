<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 * @property PaginatorComponent $Paginator
 */
class JenkinsController extends AppController {
	public function index($data=null) {
		$this->autoRender = false;
		return $data;
	}
}

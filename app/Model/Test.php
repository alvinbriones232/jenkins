<?php
App::uses('AppModel', 'Model');
/**
 * MessageContent Model
 *
 * @property Message $Message
 * @property From $From
 */
class Test extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array();

/**
 * belongsTo associations
 *
 * @var array
 */

 public $validate = array(
 	'first_name' => array(
		'rule' => 'notEmpty',
		'message' => 'Please input valid name'	
	
	),
	'last_name' => array(
		'rule' => 'notEmpty',
		'message' => 'Please input valid name'	
	
	),

 );

}

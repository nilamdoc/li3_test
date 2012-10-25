<?php

namespace app\models;

class MongoTypes extends \lithium\data\Model {
	public $_meta = array('connection' => 'Mongo',array(
	'key' => '_id',
	'locked' => true
	));
	public $validates = array();

	protected $_schema = array(
		'_id'	=>	array('type' => 'id'),
		'name'	=>	array('type' => 'string', 'null' => false),
		);



}

?>
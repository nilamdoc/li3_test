<?php

namespace app\models;

class MongoTypes extends \lithium\data\Model {
	public $_meta = array('connection' => 'Mongo');
	public $validates = array();
}

?>
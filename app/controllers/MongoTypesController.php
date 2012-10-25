<?php

namespace app\controllers;

use app\models\MongoTypes;
use lithium\action\DispatchException;

class MongoTypesController extends \lithium\action\Controller {

	public function index() {
		$mongoTypes = MongoTypes::all();
		$MongoTypesSelect = MongoTypes::find('list',array("fields"=>array("id",'name')));
		$MongoTypesSelectID = MongoTypes::find('list',array("fields"=>array("_id",'name')));		
		$MongoTypesSelectName = MongoTypes::find('list',array("fields"=>array('name')));				
		return compact('mongoTypes','MongoTypesSelect','MongoTypesSelectID','MongoTypesSelectName');
	}

	public function view() {
		$mongoType = MongoTypes::first($this->request->id);
		return compact('mongoType');
	}

	public function add() {
		$mongoType = MongoTypes::create();

		if (($this->request->data) && $mongoType->save($this->request->data)) {
			return $this->redirect(array('MongoTypes::view', 'args' => array($mongoType->id)));
		}
		return compact('mongoType');
	}

	public function edit() {
		$mongoType = MongoTypes::find($this->request->id);

		if (!$mongoType) {
			return $this->redirect('MongoTypes::index');
		}
		if (($this->request->data) && $mongoType->save($this->request->data)) {
			return $this->redirect(array('MongoTypes::view', 'args' => array($mongoType->id)));
		}
		return compact('mongoType');
	}

	public function delete() {
		if (!$this->request->is('post') && !$this->request->is('delete')) {
			$msg = "MongoTypes::delete can only be called with http:post or http:delete.";
			throw new DispatchException($msg);
		}
		MongoTypes::find($this->request->id)->delete();
		return $this->redirect('MongoTypes::index');
	}
}

?>
<?php

namespace app\controllers;

use app\models\MyTypes;
use lithium\action\DispatchException;

class MyTypesController extends \lithium\action\Controller {

	public function index() {
		$myTypes = MyTypes::all();
		$MyTypesSelect = MyTypes::find('list',array("fields"=>array("id",'name')));
		return compact('myTypes','MyTypesSelect');
	}

	public function view() {
		$myType = MyTypes::first($this->request->id);
		return compact('myType');
	}

	public function add() {
		$myType = MyTypes::create();

		if (($this->request->data) && $myType->save($this->request->data)) {
			return $this->redirect(array('MyTypes::view', 'args' => array($myType->id)));
		}
		return compact('myType');
	}

	public function edit() {
		$myType = MyTypes::find($this->request->id);

		if (!$myType) {
			return $this->redirect('MyTypes::index');
		}
		if (($this->request->data) && $myType->save($this->request->data)) {
			return $this->redirect(array('MyTypes::view', 'args' => array($myType->id)));
		}
		return compact('myType');
	}

	public function delete() {
		if (!$this->request->is('post') && !$this->request->is('delete')) {
			$msg = "MyTypes::delete can only be called with http:post or http:delete.";
			throw new DispatchException($msg);
		}
		MyTypes::find($this->request->id)->delete();
		return $this->redirect('MyTypes::index');
	}
}

?>
<?php

class ComentsController extends Controller
{	
	public $uses = [
		'Coments'
	];
	
	public function actionCreate()
	{
		if(!empty($_POST)) {
			if($this->Coments->saveComents()) {
				return true;
			}
			return false;
		}
		return 'create';
	}

	public function actionIndex()
	{
		if(!$this->Coments->getCookie()) {
			$this->Coments->setCookie();
		}
		$this->set('coments', $this->Coments->find());
	}
	
	public function actionDelete()
	{
		if(!empty($_POST)) {
			if($this->Coments->deleteComents($id)) {
				return true;
			}
			return false;
		}
		return false;
	}

	public function actionError($error = '404')
	{

	}
}
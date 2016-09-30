<?php

class ComentsController extends Controller
{	
	public $uses = [
		'Coments'
	];
	
	public function actionIndex()
	{
		if(!$this->Coments->getCookie()) {
			$this->Coments->setCookie();
		}
		$this->set('coments', $this->Coments->find());
	}
	
	public function actionCreate()
	{	var_dump($_POST);
		if(!empty($_POST)) {
			/*if($this->Coments->saveComents()) {
				echo true;
			}*/
			return false;
		}
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
	
	public function actionReturnComents()
	{
		
	}

	public function actionError($error = '404')
	{

	}
	
	public function actionTest()
	{
		echo json_encode(['id' => 'fuck']);
	}
}
<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
		$this->view->users = Users::find();
		$user = new Users();
		$user->id=3;
		$user->save();
    }
	public function showAction($userId){
		$this->view->user = Users::findFirst($userId);
	}
	public function deleteAction($userId){
		$user = new Users();
		$user->id=3;
		$user->save();
	}
	public function addAction(){
		
	}
	public function updateAction($userId){
		
	}
}


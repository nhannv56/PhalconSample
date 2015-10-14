<?php
class IndexController extends ControllerBase {
	public function indexAction() {
		$this->view->users = Users::find ();
		$user = new Users ();
		$user->id = 3;
		$user->save ();
	}
	public function showAction($userId) {
		$this->view->user = Users::findFirst ( $userId );
	}
	public function deleteAction($userId) {
		$user = new Users ();
		$user->id = $userId;
		$user->delete ();
		return $this->dispatcher->forward ( array (
				'action' => 'index' 
		) );
	}
	public function addAction() {
		if ($this->request->isPost ()) {
			$user = new Users ();
			$user->firstname = $this->request->get ( "first_name" );
			$user->lastname = $this->request->get ( "last_name" );
			$user->bithday = $this->request->get ( "date" );
			$user->save ();
		}
	}
	public function updateAction($userId) {
		if ($this->request->isPost ()) {
			$updateUser = Users::findFirst ( $this->request->get ( "id" ) );
			$updateUser->firstname = $this->request->get ( "first_name" );
			$updateUser->lastname = $this->request->get ( "last_name" );
			$updateUser->bithday = $this->request->get ( "date" );
			$updateUser->save ();
			return $this->dispatcher->forward ( array (
					'action' => 'index' 
			) );
		} else {
			$this->view->user = Users::findFirst ( $userId );
		}
	}
}


<?php
class IndexController extends ControllerBase {
	/*
	 * Show list user in database
	 */
	public function indexAction() {
		$this->view->users = Users::find ();
		$user = new Users ();
		$user->id = 3;
		$user->save ();
	}
	/*
	 * Show detail information of user
	 */
	public function showAction($userId) {
		$this->view->user = Users::findFirst ( $userId );
	}
	/*
	 * Delete a user by Id
	 */
	public function deleteAction($userId) {
		$user = new Users ();
		$user->id = $userId;
		$user->delete ();
		return $this->dispatcher->forward ( array (
				'action' => 'index' 
		) );
	}
	/*
	 * Add new user to database
	 */
	public function addAction() {
		if ($this->request->isPost ()) {
			$user = new Users ();
			$user->firstname = $this->request->get ( "first_name" );
			$user->lastname = $this->request->get ( "last_name" );
			$user->bithday = $this->request->get ( "date" );
			$user->save ();
		}
	}
	/*
	 * Update a user in database by id
	 */
	public function updateAction($userId) {
		// When submit information of user
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
			// When click to select user to update
			$this->view->user = Users::findFirst ( $userId );
		}
	}
}


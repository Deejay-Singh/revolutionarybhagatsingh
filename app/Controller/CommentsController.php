<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
App::uses('CakeEmail', 'Network/Email');

class CommentsController extends AppController {
    
    public $name = "Comments"; 
    
    public function comment() {
        $data = Sanitize::clean($this->request->data, array('encode' => false));
        $user_id = 0;
        $data = array_merge($data, array( 'user_id' => $user_id, 'is_active' => 0, 'created' => date("Y-m-d H:i:s"), 'modified' => date("Y-m-d H:i:s"), 'from' = $_SERVER['REMOTE_ADDR'] ));
		$this->Comment->create();
        $this->Comment->save($data);
        $this->redirect( $this->referer() );
	}
    
	public function delete($id) {
		if($id > 0) {
			$this->layout = 'ajax';
			$this->Comment->id = $id;
			$this->Comment->save(array('is_active' => 0, 'modified' => date("Y-m-d H:i:s") ) );
			echo 'success';
		}
		exit();
	}
}

<?php
App::uses('AppController', 'Controller');
class FeedbacksController extends AppController {

	public $name = 'Feedbacks';
	public $uses = array( 'Feedback' );
	
	public function submit() {
		$feedback['Feedback'] = $this->data;
		$feedback['Feedback']['from'] = $_SERVER['REMOTE_ADDR'];
		$this->Feedback->save($feedback);
		exit;
	}
	
}

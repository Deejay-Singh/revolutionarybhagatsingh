<?php
App::uses('AppController', 'Controller');
class FeedbacksController extends AppController {

	public $name = 'Feedbacks';
	public $uses = array( 'Feedback', 'Subscribe' );
	
	public function submit() {
		$feedback['Feedback'] = $this->data;
		$feedback['Feedback']['from'] = $_SERVER['REMOTE_ADDR'];
		$this->Feedback->save($feedback);
		$var['name'] = $feedback['Feedback']['name'];
		$this->sendMail( 'mandrill', 'sent', $var , 'feedback', $feedback['Feedback']['email'], 'admin@revolutionarybhagatsingh.com', 'Bhagat Singh', 'Thank you for your valuable feedback', 'reply@revolutionarybhagatsingh.com', 'Bhagat Singh' );
		exit;
	}
	
	public function subscribe() {
		$subscribe['Subscribe'] = $this->data;
		if( $subscribe['Subscribe']['email'] == '' ) {
			$this->Session->setFlash(__('Hey! You forgot to mention your email id. '), 'default', array( 'class' => 'alert alert-error' ) );
            $this->redirect( $this->referer() );
		}
		if( $this->exist( $subscribe['Subscribe']['email'] ) ) {
			$this->Session->setFlash(__('Heads up! You are already subscribed. '), 'default', array( 'class' => 'alert alert-info' ) );
            $this->redirect( $this->referer() );
		} else {
			$subscribe['Subscribe']['from'] = $_SERVER['REMOTE_ADDR'];
			$this->Subscribe->save($subscribe);
			$this->sendMail( 'mandrill', 'sent', null , 'subscribe', $subscribe['Subscribe']['email'], 'admin@revolutionarybhagatsingh.com', 'Bhagat Singh', 'Thank You for Subcribing to the Revolution of Shaheed Bhagat Singh', 'reply@revolutionarybhagatsingh.com', 'Bhagat Singh' );
			$this->Session->setFlash(__('Well done! You successfully subscribed. '), 'default', array( 'class' => 'alert alert-success' ) );
            $this->redirect( $this->referer() );
		}
	}
	
	public function exist( $email = null ) {
		$count = $this->Subscribe->find( 'count', array( 'conditions' => array( 'email' => $email ) ) );
		if($count == 0 ) return false;
		else return true;
	}
	
}

<?php
App::uses('AppController', 'Controller');
class QuotesController extends AppController {

	public $name = 'Quotes';
	public $uses = array( 'Quotes' );
	
	public function index() {
		$this->Quotes->find('all');
	}
	
	public function add() {
		if($data['Quotes'] = $this->data ) {
			$data['Quotes']['from'] = $_SERVER['REMOTE_ADDR'];
			$this->Quotes->save($data);
			$this->Session->setFlash(__('Quotes will be displayed on approval, you will be informed by an email. '), 'default', array( 'class' => 'alert alert-success' ) );
            $this->redirect( array( 'controller' => 'quotes', 'action' => 'index' ) );
		}
		
	}
	
}

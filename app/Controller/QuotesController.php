<?php
App::uses('AppController', 'Controller');
class QuotesController extends AppController {

	public $name = 'Quotes';
	public $uses = array( 'Quotes', 'Comment' );
	
	public function index() {
		$quotes = $this->Quotes->find( 'all', array( 'conditions' => array( 'is_active' => '1' ), 'order' => 'created DESC' ) );
		$this->set( 'quotes', $quotes );
	}
	
	public function add() {
		if($data['Quotes'] = $this->data ) {
			$data['Quotes']['from'] = $_SERVER['REMOTE_ADDR'];
			$this->Quotes->save($data);
			$this->Session->setFlash(__('Quotes will be displayed on approval, you will be informed by an email. '), 'default', array( 'class' => 'alert alert-success' ) );
            $this->redirect( array( 'controller' => 'quotes', 'action' => 'index' ) );
		}
	}
	
	public function view( $quote = 'F7N695' ) {
		$qId = end( explode(  '-', $quote ) );
		$current = $this->Quotes->find( 'first', array( 'conditions' => array( 'q_id' => $qId ) ) );
		if( !$current ) $this->redirect( array( 'controller' => 'quotes', 'action' => 'view' ) );
		$neighbors = $this->Quotes->find( 'neighbors', array( 'field' => 'id', 'value' => $current['Quotes']['id'], 'conditions' => array( 'is_active' => 1 ), 'fields' => array( 'id', 'q_id' ) ) );
		$comments = $this->Comment->find( 'all', array( 'conditions' => array( 'object_type' => 'quotes', 'object_id' => $current['Quotes']['id'] ), 'order' => array('created' => -1 ) ) );
		$this->set( 'current', $current );
		$this->set( 'neighbors', $neighbors );
		$this->set( 'comments', $comments );
	}
	
	public function up() {
		for( $id = 0; $id<48; $id++ ) {
			$qId = $this->Xyz->createId( time() - (int) (time() / 100000000) * 100000000 );
			$this->Quotes->updateAll( array( 'q_id' => "'$qId'" ), array( 'id' => $id ) );
			dump($id);
			sleep(1);
		}
		die();
	}
	
}

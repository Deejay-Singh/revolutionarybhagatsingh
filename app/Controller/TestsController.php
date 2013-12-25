<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
App::uses('CakeEmail', 'Network/Email');

class TestsController extends AppController {
    
    public $name = "Tests"; 
    public $uses = array('Customer', 'Email', 'Question', 'Answer' );
    
    public function script($x,$y) {
        //$records = $this->Customer->find( 'first');
        
			$records = $this->Email->find( 'all', array('fields' => array( 'email' ), 'conditions' => array( 'entity_id BETWEEN ? AND ?' => array($x,$y ) ), array( 'limit' => '100', 'order' => 'entity_id DESC' ) ) );
			
					$fileName = 'MailData_' . date('Y_m_d-H:i:s') . '-' . $x . '--' . $y . '.csv';
					header('Content-type: application/csv');
					header('Content-Disposition: attachment; filename="'.$fileName.'"');
					$i = 1;
					$header_row = array("id", "email");
					$remove = array("\n", "\r\n", "\r");
					foreach($records as $key => $record ) {
							$row = array($key, $record['Email']['email'] );
							if($i == 1) echo implode(',', $header_row) . "\n" ;
							echo implode(',', $row) . "\n" ; 
							$i++;
					}
					echo implode(',', $totalAmount) . "\n";
					exit;
		  
        die('3');
	}
	
	public function questions() {
		if( $data['Question'] = $this->request->data ) {
			dump($data);
			$this->Question->create();
			$this->Question->save( $data );
			$questionId = $this->Question->getLastInsertId();
			$this->Session->setFlash(__('Question Added now add answers '), 'default', array( 'class' => 'alert alert-success' ) );
			$this->redirect( array('controller' => 'tests', 'action' => 'answer', $questionId ) );
		}
	}
	
	public function answer( $questionId = null ) {
		if( $data['Answer'] = $this->request->data ) {
			$data['Answer']['question_id'] = $questionId;
			$this->Answer->create();
			$this->Answer->save( $data );
			$this->Session->setFlash(__('Answer Added '), 'default', array( 'class' => 'alert alert-success' ) );
			if( isset($data['Answer']['last']) ) $this->redirect( array('controller' => 'tests', 'action' => 'questions' ) );
			else $this->redirect( array('controller' => 'tests', 'action' => 'answer', $questionId ) );
		}
	}
	
	public function fetchDataScript( $url = 'http://stackoverflow.com/questions/980556/can-i-use-one-model-inside-of-a-different-model-in-cakephp/4753244#4753244' ) {
		//$data = file_get_contents($url);
		$data = '<html>adasd<body><title>dsadsdf</title></body></html>';
		$data = htmlentities($data);
		//dump($data);
		if (preg_match('/'.preg_quote("<title>").'(.*?)'.preg_quote("</title>").'/s', $data, $matches)) {
			echo $matches[1];
		}
		
		die('s');
		//$this->set('data', $data);
	}
	
}

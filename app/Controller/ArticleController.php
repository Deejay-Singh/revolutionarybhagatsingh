<?php
App::uses('AppController', 'Controller');
class ArticleController extends AppController {

	public $name = 'Article';
	public $uses = array( 'Request' );
	
	public function index( $id = null ) {
	}
	
	public function submit() {
		$request['Request'] = $this->data;
		$request['Request']['from'] = $_SERVER['REMOTE_ADDR'];
		$this->Request->save($request);
		$var['name'] = $request['Request']['name'];
		$var['subject'] = $request['Request']['subject'];
		$this->sendMail( 'mandrill', 'sent', $var , 'request', $request['Request']['email'], 'admin@revolutionarybhagatsingh.com', 'Bhagat Singh', 'We have Received your Request', 'reply@revolutionarybhagatsingh.com', 'Bhagat Singh' );
		exit;
	}
	
}

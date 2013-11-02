<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components      = array( 'Session', 'Cookie', 'RequestHandler' );
	public $helpers = array('Facebook.Facebook', 'Xyz');
	
	public function sendMail( $provider = 'mandrill', $success = 'sent', $var = null, $template = null, $to = null, $fromEmail = 'admin@revolutionarybhagatsingh.com', $fromName = 'Bhagat Singh', $subject = null, $replyToEmail = 'reply@revolutionarybhagatsingh.com', $replyToName = 'Bhagat Singh' ) {
		$email = new CakeEmail($provider);
		$email->viewVars(array('var' => $var ));
		$email->template($template)->emailFormat( 'html' )->to( $to )->from( $fromEmail, $fromName )->subject( $subject )->replyTo( $replyToEmail, $replyToName );
		if( !$email->send() ) $success = "Error sending mail";
		return $success;
	}
	
}

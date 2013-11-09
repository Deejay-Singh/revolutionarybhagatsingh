<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class ImagesController extends AppController {

	public $name = 'Images';
	
	public function index( $slug = null ) {
		$imageId = end( explode( '-', $slug ) );
		$imageId = $imageId != null ? $imageId: 'PJ4SB5';
		$current = $this->Image->find( 'first', array( 'conditions' => array( 'name' => $imageId ) ) );
		$current = $this->checkImage( $current, 'current' );
		$prev = $this->Image->find( 'first', array( 'fields' => array( 'id', 'slug', 'name' ), 'conditions' => array( 'id' => $current['Image']['id']-1 ) ) );
		$prev = $this->checkImage( $prev, 'prev' );
		$next = $this->Image->find( 'first', array( 'fields' => array( 'id', 'slug', 'name' ), 'conditions' => array( 'id' => $current['Image']['id']+1 ) ) );
		$next = $this->checkImage( $next, 'next' );
		$this->set( 'current', $current );
		$this->set( 'prev', $prev );
		$this->set( 'next', $next );
	}
	
	public function all() {
		$images = $this->Image->find( 'all', array( 'fields' => array( 'id', 'slug', 'name' ), 'conditions' => array( 'is_active' => '1' ), 'order' => 'created DESC' ) );
		$this->set( 'images', $images );
	}
	
	public function checkImage( $current, $mode ) {
		$id = $current['Image']['id'];
		$i = $id-1;
		$filename = '/var/www/revolutionarybhagatsingh/app/webroot/img/gallery/images('.$i.')';
		if (file_exists($filename)) {
			return $current;
		} else {
			if($mode == 'current' )	{
				$current = $this->Image->find( 'first', array( 'conditions' => array( 'id' => $i+2 ) ) );
				if( !$current['Image']['id'] ) $current = $this->Image->find( 'first' );
			}
			if($mode == 'prev' ) {
				$current = $this->Image->find( 'first', array( 'fields' => array( 'id', 'slug', 'name' ), 'conditions' => array( 'id' => $i-1 ) ) );
				if( !$current['Image']['id'] ) $current = $this->Image->find( 'first', array( 'order' => 'created DESC' ) );
			}
			if($mode == 'next' ) { 
				$current = $this->Image->find( 'first', array( 'fields' => array( 'id', 'slug', 'name' ), 'conditions' => array( 'id' => $i+3 ) ) );
				if( !$current['Image']['id'] ) $current = $this->Image->find( 'first' );
			}
			return $this->checkImage( $current, $mode );
		}
	}
	
	public function adminAdd(){
		if( $data = Sanitize::clean($this->data, array('encode' => false)) ) {
			//for($i=443; $i<455; $i++) {
				$data['name'] = $this->Xyz->createId( time() - (int) (time() / 100000000) * 100000000 );
			//	$this->Image->create();
				$this->Image->save($data);
			//}
		}
		$image = $this->Image->find('first',array( 'fields' => array( 'id' ), 'order' => 'created desc'));
		$image = $image['Image']['id'];
		$image++;
		$this->set('image', $image);
	}
	
	public function up() {
		for($i=0; $i<473; $i++) {
			$data['Image']['keyword'] = 'bhagat singh, revolutionary, india, freedom fighter, bhagat, shaheed, singh soorma, revolution, india, independence, bhagat singh images,bhagat singh,bhagat singh bday photos,bhagat singh ajay devgan songs,bhagat singh movie online,the legend of bhagat singh,bhagat singh pictures,shaheed bhagat singh,bhagat singh photos,the legend of bhagat singh full movie download,bhagat singh birthday quotes,the legend of bhagat singh movie online,bhagat singh image,the legend of bhagat singh full,photo gallery bhagat singh,shaheed bhagat singh college,history of bhagat singh,the legend of bhagat singh full movie,the legend of bhagat singh movie online free,shahid bhagat singh,bhagat singh singh,bhagat singh session judge,bhagat singh quotes,watch legend of bhagat singh online free,bhagat singh birthday postcards,the legend of bhagat singh movie,yo yo honey singh bhagat singh full song,bhagat singh biography,bhagat singh movie,real image of bhagat singh,legend of bhagat singh full movie,photo quotes on bhagat singh birthday,sardar bhagat singh,information about bhagat singh,bhagat singh birthday,bhagat singh diary,bhagat singh original photo,bhagat singh rajguru sukhdev images,bhagat singh full movie watch online,shaheed bhagat singh state technical campus,bombs exploded after bhagat singh by mistake,bhagat singh images download,legend of bhagat singh stream,bhikhowal wale sant baba bhagat singh,bhagat singh full movie,give information about bhagat singh,poem on bhagat singh in punjabi,bhagat singh movie watch online,the legend of bhagat singh watch online,the lrgend of bhagat singh watch online,the legend of bhagat singh movie free download,quotes,main fan bhagat singh da, fan bhagat singh, bhagat singh hindi, hindi quote on bhagta singh, poem on bhagat singh in hindi,bhagat singh in punjabi, bhagat singh poem in punjabi, bhagat singh songs';
			$data['Image']['desc'] = 'Bhagat Singh';
			$data['Image']['slug'] = 'bhagat-singh';
			$data['Image']['web_desc'] = 'Bhagat Singh';
			$data['Image']['web_name'] = 'Shaheed-E-Azam Bhagat Singh';
			$data['Image']['name'] = $this->Xyz->createId( time() - (int) (time() / 100000000) * 100000000 );
			$this->Image->create();
			//$this->Image->save($data);
			dump($data);
			sleep(1);
		}
		die();
	}
	
}

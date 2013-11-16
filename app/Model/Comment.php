<?php
App::uses('AppModel', 'Model');
/**
 * State Model
 *
 */
class Comment extends AppModel {
    
    //var $useDbConfig = 'mongo';
    //public $primaryKey = '_id';
    //public $mongoNoSetOperator = true;
    
    var $commentSchema = array(
			'user_id' => array('type'=>'int'),
			'user_email' => array('type'=>'string'),
			'user_name' => array('type'=>'string'),
			'comment' => array('type'=>'text'),
			'is_active' => array('type'=>'boolean'),
			'object_id' => array('type'=>'int'),
			'object_type' => array('type'=>'string'),
			'created'=>array('type'=>'datetime'),
			'modified'=>array('type'=>'datetime')
        );
}

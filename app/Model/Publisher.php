<?php
App::uses('AppModel', 'Model');
/**
 * Publisher Model
 *
 * @property Library $Library
 */
class Publisher extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Library' => array(
			'className' => 'Library',
			'foreignKey' => 'publisher_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

<?php
App::uses('AppModel', 'Model');
/**
 * Library Model
 *
 * @property Category $Category
 * @property Publisher $Publisher
 */
class Library extends AppModel {

	public $validate = array(
			'book_no' => array(
					'rule' => array('between',2,5),
					'required' => TRUE,
					'message' => '本No.は5文字以内で入力してください',
			),
			'title' => array(
					'rule' => array('between',3,100),
					'required' => TRUE,
					'message' => 'タイトルは100文字以内で入力してください',
			),

	);


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Publisher' => array(
			'className' => 'Publisher',
			'foreignKey' => 'publisher_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $hasMany = array('Review');
	/*	'Review' => array(
			'className' => 'Review',
			'foreignKey' => 'library_id',
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
	);*/
}

<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Library $Library
 */
class Review extends AppModel {

	public $validate = array(
			'review' => array(
					'rule' => 'notEmpty',
					'required' => TRUE,
					'message' => 'レビューを入力してください',
			),
	);

	public $belongsTo = array('Library');
}

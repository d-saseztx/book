<?php
/**
 * LibraryFixture
 *
 */
class LibraryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'book_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'author' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'publisher_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'used' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'book_no' => 'Lor',
			'title' => 'Lorem ipsum dolor sit amet',
			'category_id' => 1,
			'author' => 'Lorem ipsum dolor sit amet',
			'publisher_id' => 1,
			'used' => 1,
			'created' => '2015-01-24 06:51:43',
			'modified' => '2015-01-24 06:51:43'
		),
	);

}

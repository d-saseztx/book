<?php
App::uses('AppController', 'Controller');
/**
 * Libraries Controller
 *
 * @property Library $Library
 * @property PaginatorComponent $Paginator
 */
class LibrariesController extends AppController {

/**
 * Components
 *
 * @var array
 */

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Library->recursive = 0;
		$this->set('libraries', $this->paginate());

		$count = 10;
		$this->paginate = array(
			'conditions' => array(
			),
					'order' => 'Library.id ASC',
					'limit' => $count,
					);
			$this->set('libraries', $this->paginate());
	}
	public function search() {
		if ($this->request->is('post')) {
			$key = $this->request->data['Library']['title'];
			if($this->request->data['Library']['category_id'] == ''){
			$this->paginate = array(
					'conditions' => array(
							'Library.title LIKE'=> "%$key%",
					)
			);
			}else{
			$this->paginate = array(
					'conditions' => array(
							'Library.title LIKE'=> "%$key%",
						'Library.category_id' => $this->request->data['Library']['category_id']
					)
			);
			}
			$this->set('libraries', $this->paginate());
			//exit;
			$this->render('index');
		}
		$categories = $this->Library->Category->find('list');
		$publishers = $this->Library->Publisher->find('list');
		$this->set(compact('categories', 'publishers'));
	}
	public function old() {
		$this->Library->recursive = 0;
		//$this->set('libraries', $this->paginate());

		$count = 10;
		$this->paginate = array(
				'conditions' => array(
						array('Library.used' =>1,
						)
				),
				'order' => 'Library.id ASC',
				'limit' => $count,
		);
		$this->set('libraries', $this->paginate()); //データを渡す
		$this->render('index');
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Invalid library'));
		}
		$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
		$this->set('library', $this->Library->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Library->create();
			if ($this->Library->save($this->request->data)) {

				//debug($this->request->data);
				//exit;

				$this->Session->setFlash(__('The library has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Library->Category->find('list');
		$publishers = $this->Library->Publisher->find('list');
		$this->set(compact('categories', 'publishers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Library->exists($id)) {
			throw new NotFoundException(__('Invalid library'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Library->save($this->request->data)) {

				/*debug($this->request->data);
				exit;*/

				$this->Session->setFlash(__('The library has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Library.' . $this->Library->primaryKey => $id));
			$this->request->data = $this->Library->find('first', $options);
		}
		$categories = $this->Library->Category->find('list');
		$publishers = $this->Library->Publisher->find('list');
		$this->set(compact('categories', 'publishers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Library->id = $id;
		if (!$this->Library->exists()) {
			throw new NotFoundException(__('Invalid library'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Library->delete()) {
			$this->Session->setFlash(__('The library has been deleted.'));
		} else {
			$this->Session->setFlash(__('The library could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

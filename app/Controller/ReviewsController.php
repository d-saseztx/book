<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class ReviewsController extends AppController {
	public $uses =array('Review','Library');
	public function index() {
		$this->Review->recursive = 0;
		//$this->set('libraries', $this->paginate());

		$count = 10;
		$this->paginate = array(
		 'conditions' => array(
		 		array('Review.used' =>0,
		 		)
		 ),
				'order' => 'Review.id ASC',
				'limit' => $count,
		);
		$libraries = $this->Library->find('list');
		//debug($this->Library->find('list'));
		//exit;
		$this->set('libraries', $libraries);
		$this->set('reviews', $this->paginate());

	}

	public function add($library = null) {
		if ($this->request->is('post')) {
			$this->request->data['Review']['used'] ='0';
			$this->Review->create();
			if ($this->Review->save($this->request->data)) {
				$this->Session->setFlash(__('The library has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
			}
		}
		else {

		}

		$this->set('library', $library);
	}
	public function edit($id = null) {
		if (!$this->Review->exists($id)) {
			throw new NotFoundException(__('Invalid Review'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Review->save($this->request->data)) {
				$this->Session->setFlash(__('レビューを編集しました.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The library could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Review.' . $this->Review->primaryKey => $id));
			$this->request->data = $this->Review->find('first', $options);
		}
		$this->set('libraries', $libraries);
		$this->set('reviews', $this->paginate());
	}





	public function delete($id = null) {
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid library'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Review->delete()) {
			$this->Session->setFlash(__('The library has been deleted.'));
		} else {
			$this->Session->setFlash(__('The library could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
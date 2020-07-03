<?php
App::uses('AppController', 'Controller');
/**
 * Fileuploads Controller
 *
 * @property Fileupload $Fileupload
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FileuploadsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fileupload->recursive = 0;
		$this->set('fileuploads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fileupload->exists($id)) {
			throw new NotFoundException(__('Invalid fileupload'));
		}
		$options = array('conditions' => array('Fileupload.' . $this->Fileupload->primaryKey => $id));
		$this->set('fileupload', $this->Fileupload->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fileupload->create();
			if ($this->Fileupload->save($this->request->data)) {
				$this->Session->setFlash(__('The fileupload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fileupload could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fileupload->exists($id)) {
			throw new NotFoundException(__('Invalid fileupload'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fileupload->save($this->request->data)) {
				$this->Session->setFlash(__('The fileupload has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fileupload could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fileupload.' . $this->Fileupload->primaryKey => $id));
			$this->request->data = $this->Fileupload->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fileupload->id = $id;
		if (!$this->Fileupload->exists()) {
			throw new NotFoundException(__('Invalid fileupload'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fileupload->delete()) {
			$this->Session->setFlash(__('The fileupload has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fileupload could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

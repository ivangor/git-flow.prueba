<?php
App::uses('AppController', 'Controller');
/**
 * Imagenes Controller
 *
 * @property Imagene $Imagene
 * @property PaginatorComponent $Paginator
 */
class ImagenesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Imagene->recursive = 0;
		$this->set('imagenes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Imagene->exists($id)) {
			throw new NotFoundException(__('Invalid imagene'));
		}
		$options = array('conditions' => array('Imagene.' . $this->Imagene->primaryKey => $id));
		$this->set('imagene', $this->Imagene->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Imagene->create();
			if ($this->Imagene->save($this->request->data)) {
				$this->Flash->success(__('The imagene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The imagene could not be saved. Please, try again.'));
			}
		}
		$secciones = $this->Imagene->Seccione->find('list');
		$this->set(compact('secciones'));
	}

public function vista(){
	
}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Imagene->exists($id)) {
			throw new NotFoundException(__('Invalid imagene'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Imagene->save($this->request->data)) {
				$this->Flash->success(__('The imagene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The imagene could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Imagene.' . $this->Imagene->primaryKey => $id));
			$this->request->data = $this->Imagene->find('first', $options);
		}
		$secciones = $this->Imagene->Seccione->find('list');
		$this->set(compact('secciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Imagene->id = $id;
		if (!$this->Imagene->exists()) {
			throw new NotFoundException(__('Invalid imagene'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Imagene->delete()) {
			$this->Flash->success(__('The imagene has been deleted.'));
		} else {
			$this->Flash->error(__('The imagene could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

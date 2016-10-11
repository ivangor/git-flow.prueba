<?php
App::uses('AppController', 'Controller');
/**
 * Casas Controller
 *
 * @property Casa $Casa
 * @property PaginatorComponent $Paginator
 */
class CasasController extends AppController {

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
		$this->Casa->recursive = 0;
		$this->set('casas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Casa->exists($id)) {
			throw new NotFoundException(__('Invalid casa'));
		}
		$options = array('conditions' => array('Casa.' . $this->Casa->primaryKey => $id));
		$this->set('casa', $this->Casa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Casa->create();
			if ($this->Casa->save($this->request->data)) {
				$this->Flash->success(__('The casa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The casa could not be saved. Please, try again.'));
			}
		}
		$secciones = $this->Casa->Seccione->find('list');
		$this->set(compact('secciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Casa->exists($id)) {
			throw new NotFoundException(__('Invalid casa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Casa->save($this->request->data)) {
				$this->Flash->success(__('The casa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The casa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Casa.' . $this->Casa->primaryKey => $id));
			$this->request->data = $this->Casa->find('first', $options);
		}
		$secciones = $this->Casa->Seccione->find('list');
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
		$this->Casa->id = $id;
		if (!$this->Casa->exists()) {
			throw new NotFoundException(__('Invalid casa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Casa->delete()) {
			$this->Flash->success(__('The casa has been deleted.'));
		} else {
			$this->Flash->error(__('The casa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

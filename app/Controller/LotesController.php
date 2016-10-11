<?php
App::uses('AppController', 'Controller');
/**
 * Lotes Controller
 *
 * @property Lote $Lote
 * @property PaginatorComponent $Paginator
 */
class LotesController extends AppController {

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
		$this->Lote->recursive = 0;
		$this->set('lotes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lote->exists($id)) {
			throw new NotFoundException(__('Invalid lote'));
		}
		$options = array('conditions' => array('Lote.' . $this->Lote->primaryKey => $id));
		$this->set('lote', $this->Lote->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lote->create();
			if ($this->Lote->save($this->request->data)) {
				$this->Flash->success(__('The lote has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The lote could not be saved. Please, try again.'));
			}
		}
		$loteEstados = $this->Lote->LoteEstado->find('list');
		$secciones = $this->Lote->Seccione->find('list');
		$this->set(compact('loteEstados', 'secciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lote->exists($id)) {
			throw new NotFoundException(__('Invalid lote'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lote->save($this->request->data)) {
				$this->Flash->success(__('The lote has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The lote could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lote.' . $this->Lote->primaryKey => $id));
			$this->request->data = $this->Lote->find('first', $options);
		}
		$loteEstados = $this->Lote->LoteEstado->find('list');
		$secciones = $this->Lote->Seccione->find('list');
		$this->set(compact('loteEstados', 'secciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lote->id = $id;
		if (!$this->Lote->exists()) {
			throw new NotFoundException(__('Invalid lote'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lote->delete()) {
			$this->Flash->success(__('The lote has been deleted.'));
		} else {
			$this->Flash->error(__('The lote could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Secciones Controller
 *
 * @property Seccione $Seccione
 * @property PaginatorComponent $Paginator
 */
class SeccionesController extends AppController {

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
		$this->Seccione->recursive = 0;
		$this->set('secciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Seccione->exists($id)) {
			throw new NotFoundException(__('Invalid seccione'));
		}
		$options = array('conditions' => array('Seccione.' . $this->Seccione->primaryKey => $id));
		$this->set('seccione', $this->Seccione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Seccione->create();
			if ($this->Seccione->save($this->request->data)) {
				$this->Flash->success(__('The seccione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The seccione could not be saved. Please, try again.'));
			}
		}
		$this->loadModel('Lote');
		$lote = $this->Lote->find('list');
		$seccioneEstados = $this->Seccione->SeccioneEstado->find('list',array('fields'=> array('SeccioneEstado.id','SeccioneEstado.estado')));
		$seccioneVisibilidades = $this->Seccione->SeccioneVisibilidade->find('list');
		$casas = $this->Seccione->Casa->find('list', array('fields'=> array('Casa.id','Casa.nombre')));
		$this->set(compact('seccioneEstados', 'seccioneVisibilidades', 'casas'));
		$this->set('lote',$lote);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Seccione->exists($id)) {
			throw new NotFoundException(__('Invalid seccione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Seccione->save($this->request->data)) {
				$this->Flash->success(__('The seccione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The seccione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Seccione.' . $this->Seccione->primaryKey => $id));
			$this->request->data = $this->Seccione->find('first', $options);
		}
		$seccioneEstados = $this->Seccione->SeccioneEstado->find('list');
		$seccioneVisibilidades = $this->Seccione->SeccioneVisibilidade->find('list');
		$casas = $this->Seccione->Casa->find('list');
		$this->set(compact('seccioneEstados', 'seccioneVisibilidades', 'casas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Seccione->id = $id;
		if (!$this->Seccione->exists()) {
			throw new NotFoundException(__('Invalid seccione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Seccione->delete()) {
			$this->Flash->success(__('The seccione has been deleted.'));
		} else {
			$this->Flash->error(__('The seccione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

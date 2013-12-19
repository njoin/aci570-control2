<?php
App::uses('AppController', 'Controller');
/**
 * TaskTags Controller
 *
 * @property TaskTag $TaskTag
 * @property PaginatorComponent $Paginator
 */
class TaskTagsController extends AppController {

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
		$this->TaskTag->recursive = 0;
		$this->set('taskTags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TaskTag->exists($id)) {
			throw new NotFoundException(__('Invalid task tag'));
		}
		$options = array('conditions' => array('TaskTag.' . $this->TaskTag->primaryKey => $id));
		$this->set('taskTag', $this->TaskTag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TaskTag->create();
			if ($this->TaskTag->save($this->request->data)) {
				$this->Session->setFlash(__('The task tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task tag could not be saved. Please, try again.'));
			}
		}
		$tasks = $this->TaskTag->Task->find('list');
		$tags = $this->TaskTag->Tag->find('list');
		$this->set(compact('tasks', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TaskTag->exists($id)) {
			throw new NotFoundException(__('Invalid task tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TaskTag->save($this->request->data)) {
				$this->Session->setFlash(__('The task tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TaskTag.' . $this->TaskTag->primaryKey => $id));
			$this->request->data = $this->TaskTag->find('first', $options);
		}
		$tasks = $this->TaskTag->Task->find('list');
		$tags = $this->TaskTag->Tag->find('list');
		$this->set(compact('tasks', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TaskTag->id = $id;
		if (!$this->TaskTag->exists()) {
			throw new NotFoundException(__('Invalid task tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TaskTag->delete()) {
			$this->Session->setFlash(__('The task tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The task tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TaskTag->recursive = 0;
		$this->set('taskTags', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TaskTag->exists($id)) {
			throw new NotFoundException(__('Invalid task tag'));
		}
		$options = array('conditions' => array('TaskTag.' . $this->TaskTag->primaryKey => $id));
		$this->set('taskTag', $this->TaskTag->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TaskTag->create();
			if ($this->TaskTag->save($this->request->data)) {
				$this->Session->setFlash(__('The task tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task tag could not be saved. Please, try again.'));
			}
		}
		$tasks = $this->TaskTag->Task->find('list');
		$tags = $this->TaskTag->Tag->find('list');
		$this->set(compact('tasks', 'tags'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->TaskTag->exists($id)) {
			throw new NotFoundException(__('Invalid task tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TaskTag->save($this->request->data)) {
				$this->Session->setFlash(__('The task tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TaskTag.' . $this->TaskTag->primaryKey => $id));
			$this->request->data = $this->TaskTag->find('first', $options);
		}
		$tasks = $this->TaskTag->Task->find('list');
		$tags = $this->TaskTag->Tag->find('list');
		$this->set(compact('tasks', 'tags'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->TaskTag->id = $id;
		if (!$this->TaskTag->exists()) {
			throw new NotFoundException(__('Invalid task tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TaskTag->delete()) {
			$this->Session->setFlash(__('The task tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The task tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}

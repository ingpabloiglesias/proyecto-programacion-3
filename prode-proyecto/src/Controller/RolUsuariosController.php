<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RolUsuarios Controller
 *
 * @property \App\Model\Table\RolUsuariosTable $RolUsuarios
 *
 * @method \App\Model\Entity\RolUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rolUsuarios = $this->paginate($this->RolUsuarios);

        $this->set(compact('rolUsuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Rol Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolUsuario = $this->RolUsuarios->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('rolUsuario', $rolUsuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolUsuario = $this->RolUsuarios->newEntity();
        if ($this->request->is('post')) {
            $rolUsuario = $this->RolUsuarios->patchEntity($rolUsuario, $this->request->getData());
            if ($this->RolUsuarios->save($rolUsuario)) {
                $this->Flash->success(__('The rol usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rol usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('rolUsuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rol Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolUsuario = $this->RolUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolUsuario = $this->RolUsuarios->patchEntity($rolUsuario, $this->request->getData());
            if ($this->RolUsuarios->save($rolUsuario)) {
                $this->Flash->success(__('The rol usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rol usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('rolUsuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rol Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolUsuario = $this->RolUsuarios->get($id);
        if ($this->RolUsuarios->delete($rolUsuario)) {
            $this->Flash->success(__('The rol usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The rol usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

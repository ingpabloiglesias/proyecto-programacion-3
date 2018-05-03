<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Encuentros Controller
 *
 * @property \App\Model\Table\EncuentrosTable $Encuentros
 *
 * @method \App\Model\Entity\Encuentro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EncuentrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fechas']
        ];
        $encuentros = $this->paginate($this->Encuentros);

        $this->set(compact('encuentros'));
    }

    /**
     * View method
     *
     * @param string|null $id Encuentro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $encuentro = $this->Encuentros->get($id, [
            'contain' => ['Fechas']
        ]);

        $this->set('encuentro', $encuentro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $encuentro = $this->Encuentros->newEntity();
        if ($this->request->is('post')) {
            $encuentro = $this->Encuentros->patchEntity($encuentro, $this->request->getData());
            if ($this->Encuentros->save($encuentro)) {
                $this->Flash->success(__('The encuentro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The encuentro could not be saved. Please, try again.'));
        }
        $fechas = $this->Encuentros->Fechas->find('list', ['limit' => 200]);
        $this->set(compact('encuentro', 'fechas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Encuentro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $encuentro = $this->Encuentros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $encuentro = $this->Encuentros->patchEntity($encuentro, $this->request->getData());
            if ($this->Encuentros->save($encuentro)) {
                $this->Flash->success(__('The encuentro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The encuentro could not be saved. Please, try again.'));
        }
        $fechas = $this->Encuentros->Fechas->find('list', ['limit' => 200]);
        $this->set(compact('encuentro', 'fechas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Encuentro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $encuentro = $this->Encuentros->get($id);
        if ($this->Encuentros->delete($encuentro)) {
            $this->Flash->success(__('The encuentro has been deleted.'));
        } else {
            $this->Flash->error(__('The encuentro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

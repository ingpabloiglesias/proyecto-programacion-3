<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fechas Controller
 *
 * @property \App\Model\Table\FechasTable $Fechas
 *
 * @method \App\Model\Entity\Fecha[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FechasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campeonatos']
        ];
        $fechas = $this->paginate($this->Fechas);

        $this->set(compact('fechas'));
    }

    /**
     * View method
     *
     * @param string|null $id Fecha id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fecha = $this->Fechas->get($id, [
            'contain' => ['Campeonatos', 'Encuentros']
        ]);

        $this->set('fecha', $fecha);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fecha = $this->Fechas->newEntity();
        if ($this->request->is('post')) {
            $fecha = $this->Fechas->patchEntity($fecha, $this->request->getData());
            if ($this->Fechas->save($fecha)) {
                $this->Flash->success(__('The fecha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fecha could not be saved. Please, try again.'));
        }
        $campeonatos = $this->Fechas->Campeonatos->find('list', ['limit' => 200]);
        $this->set(compact('fecha', 'campeonatos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fecha id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fecha = $this->Fechas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fecha = $this->Fechas->patchEntity($fecha, $this->request->getData());
            if ($this->Fechas->save($fecha)) {
                $this->Flash->success(__('The fecha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fecha could not be saved. Please, try again.'));
        }
        $campeonatos = $this->Fechas->Campeonatos->find('list', ['limit' => 200]);
        $this->set(compact('fecha', 'campeonatos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fecha id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fecha = $this->Fechas->get($id);
        if ($this->Fechas->delete($fecha)) {
            $this->Flash->success(__('The fecha has been deleted.'));
        } else {
            $this->Flash->error(__('The fecha could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Niveaux Controller
 *
 * @property \App\Model\Table\NiveauxTable $Niveaux
 *
 * @method \App\Model\Entity\Niveaux[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NiveauxController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $niveaux = $this->paginate($this->Niveaux);

        $this->set(compact('niveaux'));
    }

    /**
     * View method
     *
     * @param string|null $id Niveaux id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $niveaux = $this->Niveaux->get($id, [
            'contain' => [],
        ]);

        $this->set('niveaux', $niveaux);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $niveaux = $this->Niveaux->newEntity();
        if ($this->request->is('post')) {
            $niveaux = $this->Niveaux->patchEntity($niveaux, $this->request->getData());
            if ($this->Niveaux->save($niveaux)) {
                $this->Flash->success(__('The niveaux has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The niveaux could not be saved. Please, try again.'));
        }
        $this->set(compact('niveaux'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Niveaux id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $niveaux = $this->Niveaux->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $niveaux = $this->Niveaux->patchEntity($niveaux, $this->request->getData());
            if ($this->Niveaux->save($niveaux)) {
                $this->Flash->success(__('The niveaux has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The niveaux could not be saved. Please, try again.'));
        }
        $this->set(compact('niveaux'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Niveaux id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $niveaux = $this->Niveaux->get($id);
        if ($this->Niveaux->delete($niveaux)) {
            $this->Flash->success(__('The niveaux has been deleted.'));
        } else {
            $this->Flash->error(__('The niveaux could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

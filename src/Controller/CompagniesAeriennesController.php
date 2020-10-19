<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompagniesAeriennes Controller
 *
 * @property \App\Model\Table\CompagniesAeriennesTable $CompagniesAeriennes
 *
 * @method \App\Model\Entity\CompagniesAerienne[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompagniesAeriennesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $compagniesAeriennes = $this->paginate($this->CompagniesAeriennes);

        $this->set(compact('compagniesAeriennes'));
    }

    /**
     * View method
     *
     * @param string|null $id Compagnies Aerienne id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compagniesAerienne = $this->CompagniesAeriennes->get($id, [
            'contain' => [],
        ]);

        $this->set('compagniesAerienne', $compagniesAerienne);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compagniesAerienne = $this->CompagniesAeriennes->newEntity();
        if ($this->request->is('post')) {
            $compagniesAerienne = $this->CompagniesAeriennes->patchEntity($compagniesAerienne, $this->request->getData());
            if ($this->CompagniesAeriennes->save($compagniesAerienne)) {
                $this->Flash->success(__('The compagnies aerienne has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compagnies aerienne could not be saved. Please, try again.'));
        }
        $this->set(compact('compagniesAerienne'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Compagnies Aerienne id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compagniesAerienne = $this->CompagniesAeriennes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compagniesAerienne = $this->CompagniesAeriennes->patchEntity($compagniesAerienne, $this->request->getData());
            if ($this->CompagniesAeriennes->save($compagniesAerienne)) {
                $this->Flash->success(__('The compagnies aerienne has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compagnies aerienne could not be saved. Please, try again.'));
        }
        $this->set(compact('compagniesAerienne'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Compagnies Aerienne id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compagniesAerienne = $this->CompagniesAeriennes->get($id);
        if ($this->CompagniesAeriennes->delete($compagniesAerienne)) {
            $this->Flash->success(__('The compagnies aerienne has been deleted.'));
        } else {
            $this->Flash->error(__('The compagnies aerienne could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

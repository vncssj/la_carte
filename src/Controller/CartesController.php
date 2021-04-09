<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cartes Controller
 *
 * @property \App\Model\Table\CartesTable $Cartes
 * @method \App\Model\Entity\Carte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $cartes = $this->paginate($this->Cartes);

        $this->set(compact('cartes'));
    }

    /**
     * View method
     *
     * @param string|null $id Carte id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carte = $this->Cartes->get($id, [
            'contain' => ['Categorias', 'Produtos'],
        ]);

        $this->set(compact('carte'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carte = $this->Cartes->newEmptyEntity();
        if ($this->request->is('post')) {
            $carte = $this->Cartes->patchEntity($carte, $this->request->getData());
            if ($this->Cartes->save($carte)) {
                $this->Flash->success(__('The carte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carte could not be saved. Please, try again.'));
        }
        $this->set(compact('carte'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carte id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carte = $this->Cartes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carte = $this->Cartes->patchEntity($carte, $this->request->getData());
            if ($this->Cartes->save($carte)) {
                $this->Flash->success(__('The carte has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carte could not be saved. Please, try again.'));
        }
        $this->set(compact('carte'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carte id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carte = $this->Cartes->get($id);
        if ($this->Cartes->delete($carte)) {
            $this->Flash->success(__('The carte has been deleted.'));
        } else {
            $this->Flash->error(__('The carte could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

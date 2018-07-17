<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gamecatalog Controller
 *
 * @property \App\Model\Table\GamecatalogTable $Gamecatalog
 *
 * @method \App\Model\Entity\Gamecatalog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GamecatalogController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $gamecatalog = $this->paginate($this->Gamecatalog);

        $this->set(compact('gamecatalog'));
    }

    /**
     * View method
     *
     * @param string|null $id Gamecatalog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gamecatalog = $this->Gamecatalog->get($id, [
            'contain' => []
        ]);

        $this->set('gamecatalog', $gamecatalog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gamecatalog = $this->Gamecatalog->newEntity();
        if ($this->request->is('post')) {
            $gamecatalog = $this->Gamecatalog->patchEntity($gamecatalog, $this->request->getData());
            if ($this->Gamecatalog->save($gamecatalog)) {
                $this->Flash->success(__('The gamecatalog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gamecatalog could not be saved. Please, try again.'));
        }
        $this->set(compact('gamecatalog'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gamecatalog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gamecatalog = $this->Gamecatalog->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gamecatalog = $this->Gamecatalog->patchEntity($gamecatalog, $this->request->getData());
            if ($this->Gamecatalog->save($gamecatalog)) {
                $this->Flash->success(__('The gamecatalog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gamecatalog could not be saved. Please, try again.'));
        }
        $this->set(compact('gamecatalog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gamecatalog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gamecatalog = $this->Gamecatalog->get($id);
        if ($this->Gamecatalog->delete($gamecatalog)) {
            $this->Flash->success(__('The gamecatalog has been deleted.'));
        } else {
            $this->Flash->error(__('The gamecatalog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

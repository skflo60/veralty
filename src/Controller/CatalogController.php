<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Catalog Controller
 *
 * @property \App\Model\Table\CatalogTable $Catalog
 *
 * @method \App\Model\Entity\Catalog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatalogController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $catalog = $this->paginate($this->Catalog);

        $this->set(compact('catalog'));
    }

    /**
     * View method
     *
     * @param string|null $id Catalog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catalog = $this->Catalog->get($id, [
            'contain' => []
        ]);

        $this->set('catalog', $catalog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catalog = $this->Catalog->newEntity();
        if ($this->request->is('post')) {
            $catalog = $this->Catalog->patchEntity($catalog, $this->request->getData());
            if ($this->Catalog->save($catalog)) {
                $this->Flash->success(__('The catalog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catalog could not be saved. Please, try again.'));
        }
        $this->set(compact('catalog'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Catalog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catalog = $this->Catalog->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catalog = $this->Catalog->patchEntity($catalog, $this->request->getData());
            if ($this->Catalog->save($catalog)) {
                $this->Flash->success(__('The catalog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catalog could not be saved. Please, try again.'));
        }
        $this->set(compact('catalog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Catalog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catalog = $this->Catalog->get($id);
        if ($this->Catalog->delete($catalog)) {
            $this->Flash->success(__('The catalog has been deleted.'));
        } else {
            $this->Flash->error(__('The catalog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Game Controller
 *
 * @property \App\Model\Table\GameTable $Game
 *
 * @method \App\Model\Entity\Game[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GameController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method REST API
     *
     * @return \Cake\Http\Response|void
     */
    public function index($id = null)
    {
        if ($id !== null) {
            $games = $this->Game->find('all')->where(['Id' => $id]);
        } else {
            $games = $this->Game->find('all');
        }
        $this->set([
            'games' => $games,
            '_serialize' => ['games']
        ]);

        $this->response->type('json');
        $this->response->body(json_encode($games));
        return $this->response;
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function list()
    {
        $Game = $this->paginate($this->Game);
        $this->set(compact('Game'));
    }

    /**
     * View method
     *
     * @param string|null $id Game id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $game = $this->Game->get($id, [
            'contain' => []
        ]);

        $this->set('game', $game);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Catalog');
        $this->loadModel('GameCatalog');
        $game = $this->Game->newEntity();

        // When the form is submitted
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $game = $this->Game->patchEntity($game, $data);
            $linkedCatalogs = $data["catalogs"];
            //$GameCatalog
            if ($this->Game->save($game)) {
                $this->Flash->success(__('The game has been saved.'));

                // Add association for each GameCatalog
                foreach($linkedCatalogs as $catalog) {
                    $gameCatalog = $this->GameCatalog->newEntity();
                    $gameCatalog->IdGame = $game->Id;
                    $gameCatalog->IdCatalog = $catalog;
                    $this->GameCatalog->save($gameCatalog);
                }
                return $this->redirect(['action' => 'list']);
            }
            $this->Flash->error(__('The game could not be saved. Please, try again.'));
        }

        $this->set(compact('game'));
        $catalogs = $this->Catalog->find('list', [
            'keyField' => 'Id',
            'valueField' => 'Name'
        ]);
        $this->set(compact('catalogs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Game id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $game = $this->Game->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $game = $this->Game->patchEntity($game, $this->request->getData());
            if ($this->Game->save($game)) {
                $this->Flash->success(__('The game has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The game could not be saved. Please, try again.'));
        }
        $this->set(compact('game'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Game id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $game = $this->Game->get($id);
        if ($this->Game->delete($game)) {
            $this->Flash->success(__('The game has been deleted.'));
        } else {
            $this->Flash->error(__('The game could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Games Controller Route
 *
 */
class GamesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Game');
        $this->loadComponent('RequestHandler');
    }

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

    public function catalog($id = null) {
        $games = $this->Game->find('list');
    }
}

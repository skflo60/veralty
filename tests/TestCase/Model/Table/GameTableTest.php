<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GameTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GameTable Test Case
 */
class GameTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GameTable
     */
    public $Game;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.game'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Game') ? [] : ['className' => GameTable::class];
        $this->Game = TableRegistry::getTableLocator()->get('Game', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Game);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

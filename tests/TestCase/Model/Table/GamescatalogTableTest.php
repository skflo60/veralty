<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GameCatalogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GameCatalogTable Test Case
 */
class GameCatalogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GameCatalogTable
     */
    public $GameCatalog;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GameCatalog'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GameCatalog') ? [] : ['className' => GameCatalogTable::class];
        $this->GameCatalog = TableRegistry::getTableLocator()->get('GameCatalog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GameCatalog);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GamecatalogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GamecatalogTable Test Case
 */
class GamecatalogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GamecatalogTable
     */
    public $Gamecatalog;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gamecatalog'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Gamecatalog') ? [] : ['className' => GamecatalogTable::class];
        $this->Gamecatalog = TableRegistry::getTableLocator()->get('Gamecatalog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gamecatalog);

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

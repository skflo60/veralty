<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookingTable Test Case
 */
class BookingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BookingTable
     */
    public $Booking;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.booking'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Booking') ? [] : ['className' => BookingTable::class];
        $this->Booking = TableRegistry::getTableLocator()->get('Booking', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Booking);

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

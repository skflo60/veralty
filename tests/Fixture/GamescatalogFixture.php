<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GameCatalogFixture
 *
 */
class GameCatalogFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'GameCatalog';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'IdGame' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'IdCatalog' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'IX_GameCatalog_IdGame' => ['type' => 'index', 'columns' => ['IdGame'], 'length' => []],
            'IX_GameCatalog_IdCatalog' => ['type' => 'index', 'columns' => ['IdCatalog'], 'length' => []],
        ],
        '_constraints' => [
            'FK_Catalog_GameCatalog' => ['type' => 'foreign', 'columns' => ['IdCatalog'], 'references' => ['catalog', 'Id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Game_GameCatalog' => ['type' => 'foreign', 'columns' => ['IdGame'], 'references' => ['Game', 'Id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'IdGame' => 1,
                'IdCatalog' => 1
            ],
        ];
        parent::init();
    }
}

<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GamecatalogFixture
 *
 */
class GamecatalogFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gamecatalog';

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
            'IX_GamesCatalog_IdGames' => ['type' => 'index', 'columns' => ['IdGame'], 'length' => []],
            'IX_GamesCatalog_IdCatalog' => ['type' => 'index', 'columns' => ['IdCatalog'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['IdGame', 'IdCatalog'], 'length' => []],
            'FK_Catalog_GamesCatalog' => ['type' => 'foreign', 'columns' => ['IdCatalog'], 'references' => ['catalog', 'Id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_Games_GamesCatalog' => ['type' => 'foreign', 'columns' => ['IdGame'], 'references' => ['game', 'Id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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

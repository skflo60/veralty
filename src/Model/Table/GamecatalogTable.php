<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gamecatalog Model
 *
 * @method \App\Model\Entity\Gamecatalog get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gamecatalog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gamecatalog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gamecatalog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gamecatalog|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gamecatalog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gamecatalog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gamecatalog findOrCreate($search, callable $callback = null, $options = [])
 */
class GamecatalogTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('gamecatalog');
        $this->setDisplayField('IdGame');
        $this->setPrimaryKey(['IdGame', 'IdCatalog']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('IdGame')
            ->allowEmpty('IdGame', 'create');

        $validator
            ->integer('IdCatalog')
            ->allowEmpty('IdCatalog', 'create');

        return $validator;
    }
}

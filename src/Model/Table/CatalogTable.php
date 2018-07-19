<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Catalog Model
 *
 * @method \App\Model\Entity\Catalog get($primaryKey, $options = [])
 * @method \App\Model\Entity\Catalog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Catalog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Catalog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catalog|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catalog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Catalog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Catalog findOrCreate($search, callable $callback = null, $options = [])
 */
class CatalogTable extends Table
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

        $this->setTable('catalog');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');
         $this->belongsToMany('Game', [
            'joinTable' => 'GameCatalog',
            'targetForeignKey' => 'IdGame',
            'foreignKey' => 'IdCatalog',
        ]);
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
            ->integer('Id')
            ->allowEmpty('Id', 'create');

        $validator
            ->scalar('Name')
            ->maxLength('Name', 50)
            ->requirePresence('Name', 'create')
            ->notEmpty('Name');

        return $validator;
    }
}

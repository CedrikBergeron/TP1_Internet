<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompagniesAeriennes Model
 *
 * @method \App\Model\Entity\CompagniesAerienne get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompagniesAerienne newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompagniesAerienne[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompagniesAerienne|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompagniesAerienne saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompagniesAerienne patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompagniesAerienne[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompagniesAerienne findOrCreate($search, callable $callback = null, $options = [])
 */
class CompagniesAeriennesTable extends Table
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

        $this->setTable('compagnies_aeriennes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('id')
            ->maxLength('id', 3)
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 21)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 50)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('pays')
            ->maxLength('pays', 25)
            ->requirePresence('pays', 'create')
            ->notEmptyString('pays');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flights Model
 *
 * @property \App\Model\Table\CompagniesAeriennesTable&\Cake\ORM\Association\BelongsTo $CompagniesAeriennes
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Flight get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flight newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Flight[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flight|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flight[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flight findOrCreate($search, callable $callback = null, $options = [])
 */
class FlightsTable extends Table
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

        $this->setTable('flights');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('CompagniesAeriennes', [
            'foreignKey' => 'cie_aerienne_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
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
            ->scalar('id')
            ->maxLength('id', 11)
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('code_type_avion')
            ->maxLength('code_type_avion', 25)
            ->requirePresence('code_type_avion', 'create')
            ->notEmptyString('code_type_avion');

        $validator
            ->scalar('code_aeroport_depart')
            ->maxLength('code_aeroport_depart', 4)
            ->requirePresence('code_aeroport_depart', 'create')
            ->notEmptyString('code_aeroport_depart');

        $validator
            ->scalar('code_aeroport_arrive')
            ->maxLength('code_aeroport_arrive', 4)
            ->requirePresence('code_aeroport_arrive', 'create')
            ->notEmptyString('code_aeroport_arrive');

        $validator
            ->dateTime('heure_depart')
            ->requirePresence('heure_depart', 'create')
            ->notEmptyDateTime('heure_depart');

        $validator
            ->dateTime('heure_arrive')
            ->requirePresence('heure_arrive', 'create')
            ->notEmptyDateTime('heure_arrive');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['cie_aerienne_id'], 'CompagniesAeriennes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}

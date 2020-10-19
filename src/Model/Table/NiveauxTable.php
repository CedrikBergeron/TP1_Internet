<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Niveaux Model
 *
 * @method \App\Model\Entity\Niveaux get($primaryKey, $options = [])
 * @method \App\Model\Entity\Niveaux newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Niveaux[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Niveaux|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Niveaux saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Niveaux patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Niveaux[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Niveaux findOrCreate($search, callable $callback = null, $options = [])
 */
class NiveauxTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);
        $this->addBehavior('Translate', ['fields' => ['nom']]);
        $this->setTable('niveaux');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        I18n::setLocale('es');
        $this->loadModel('Articles');

        $article = $this->Articles->get(12);
        echo $article->title; // Affiche 'A title', pas encore traduit
        
        $article->title = 'Un Artículo';
$this->Articles->save($article);

$article = $this->Articles->get(12);
echo $article->title; // Affiche 'Un Artículo', ouah facile!
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmptyString('id', null, 'create');

        $validator
                ->scalar('nom')
                ->maxLength('nom', 40)
                ->requirePresence('nom', 'create')
                ->notEmptyString('nom');

        return $validator;
    }

}
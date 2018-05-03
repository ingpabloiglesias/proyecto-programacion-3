<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Encuentros Model
 *
 * @property \App\Model\Table\FechasTable|\Cake\ORM\Association\BelongsTo $Fechas
 *
 * @method \App\Model\Entity\Encuentro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Encuentro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Encuentro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Encuentro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Encuentro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Encuentro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Encuentro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EncuentrosTable extends Table
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

        $this->setTable('encuentros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Fechas', [
            'foreignKey' => 'fecha_id',
            'joinType' => 'INNER'
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('resultado')
            ->maxLength('resultado', 255)
            ->requirePresence('resultado', 'create')
            ->notEmpty('resultado');

        $validator
            ->scalar('observaciones')
            ->maxLength('observaciones', 255)
            ->requirePresence('observaciones', 'create')
            ->notEmpty('observaciones');

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
        $rules->add($rules->existsIn(['fecha_id'], 'Fechas'));

        return $rules;
    }
}

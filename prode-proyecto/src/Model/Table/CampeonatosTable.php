<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campeonatos Model
 *
 * @property \App\Model\Table\ResponsablesTable|\Cake\ORM\Association\BelongsTo $Responsables
 * @property \App\Model\Table\FechasTable|\Cake\ORM\Association\HasMany $Fechas
 *
 * @method \App\Model\Entity\Campeonato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campeonato newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Campeonato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campeonato|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campeonato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campeonato[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campeonato findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampeonatosTable extends Table
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

        $this->setTable('campeonatos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Responsables', [
            'foreignKey' => 'responsable_id',
            'joinType' => 'INNER',
            'className' => 'Users'
        ]);
        $this->hasMany('Fechas', [
            'foreignKey' => 'campeonato_id'
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
            ->dateTime('fecha_inicio')
            ->requirePresence('fecha_inicio', 'create')
            ->notEmpty('fecha_inicio');

        $validator
            ->dateTime('fecha_fin')
            ->requirePresence('fecha_fin', 'create')
            ->notEmpty('fecha_fin');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 255)
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

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
        $rules->add($rules->existsIn(['responsable_id'], 'Responsables'));

        return $rules;
    }
}

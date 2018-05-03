<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fecha Entity
 *
 * @property string $id
 * @property \Cake\I18n\FrozenTime $fecha_inicio
 * @property \Cake\I18n\FrozenTime $fecha_fin
 * @property string $descripcion
 * @property string $campeonato_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Campeonato $campeonato
 * @property \App\Model\Entity\Encuentro[] $encuentros
 */
class Fecha extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'fecha_inicio' => true,
        'fecha_fin' => true,
        'descripcion' => true,
        'campeonato_id' => true,
        'created' => true,
        'modified' => true,
        'campeonato' => true,
        'encuentros' => true
    ];
}

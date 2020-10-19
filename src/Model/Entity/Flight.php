<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flight Entity
 *
 * @property string $id
 * @property string $cie_aerienne_id
 * @property string $code_type_avion
 * @property string $code_aeroport_depart
 * @property string $code_aeroport_arrive
 * @property \Cake\I18n\FrozenTime $heure_depart
 * @property \Cake\I18n\FrozenTime $heure_arrive
 * @property int $utilisateur_id
 *
 * @property \App\Model\Entity\CompagniesAerienne $compagnies_aerienne
 * @property \App\Model\Entity\User $user
 */
class Flight extends Entity
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
        'id' => true,
        'cie_aerienne_id' => true,
        'code_type_avion' => true,
        'code_aeroport_depart' => true,
        'code_aeroport_arrive' => true,
        'heure_depart' => true,
        'heure_arrive' => true,
        'user_id' => true,
        'compagnies_aerienne' => true,
        'user' => true,
    ];
}

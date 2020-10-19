<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property string $slug
 * @property string|null $vol_id
 * @property int $nombre_personne
 * @property int|null $classe_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Flight $flight
 * @property \App\Model\Entity\Niveaux $niveaux
 * @property \App\Model\Entity\User $user
 */
class Reservation extends Entity
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
        'slug' => true,
        'vol_id' => true,
        'nombre_personne' => true,
        'classe_id' => true,
        'user_id' => true,
        'flight' => true,
        'niveaux' => true,
        'user' => true,
    ];
}

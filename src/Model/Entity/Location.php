<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Location Entity
 *
 * @property int $location_id
 * @property string|null $street_address
 * @property string|null $postal_code
 * @property string $city
 * @property string|null $state_province
 * @property string $country_id
 *
 * @property \App\Model\Entity\Country $country
 */
class Location extends Entity
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
        'street_address' => true,
        'postal_code' => true,
        'city' => true,
        'state_province' => true,
        'country_id' => true,
        'country' => true,
    ];
}

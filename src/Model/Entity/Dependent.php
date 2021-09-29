<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dependent Entity
 *
 * @property int $dependent_id
 * @property string $first_name
 * @property string $last_name
 * @property string $relationship
 * @property int $employee_id
 *
 * @property \App\Model\Entity\Employee $employee
 */
class Dependent extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'relationship' => true,
        'employee_id' => true,
        'employee' => true,
    ];
}

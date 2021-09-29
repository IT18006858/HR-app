<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $employee_id
 * @property string|null $first_name
 * @property string $last_name
 * @property string $email
 * @property string|null $phone_number
 * @property \Cake\I18n\FrozenDate $hire_date
 * @property int $job_id
 * @property string $salary
 * @property int|null $manager_id
 * @property int|null $department_id
 *
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Department $department
 */
class Employee extends Entity
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
        'email' => true,
        'phone_number' => true,
        'hire_date' => true,
        'job_id' => true,
        'salary' => true,
        'manager_id' => true,
        'department_id' => true,
        'job' => true,
        'employee' => true,
        'department' => true,
    ];
}

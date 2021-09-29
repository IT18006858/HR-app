<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'employee_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'first_name' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'last_name' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'email' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'phone_number' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'hire_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'job_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'salary' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'manager_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'department_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'job_id' => ['type' => 'index', 'columns' => ['job_id'], 'length' => []],
            'department_id' => ['type' => 'index', 'columns' => ['department_id'], 'length' => []],
            'manager_id' => ['type' => 'index', 'columns' => ['manager_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['employee_id'], 'length' => []],
            'employee_id' => ['type' => 'unique', 'columns' => ['employee_id'], 'length' => []],
            'employees_ibfk_2' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['departments', 'department_id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'employees_ibfk_1' => ['type' => 'foreign', 'columns' => ['job_id'], 'references' => ['jobs', 'job_id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'employees_ibfk_3' => ['type' => 'foreign', 'columns' => ['manager_id'], 'references' => ['employees', 'employee_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'employee_id' => 1,
                'first_name' => 'Lorem ipsum dolor ',
                'last_name' => 'Lorem ipsum dolor sit a',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum dolor ',
                'hire_date' => '2021-09-29',
                'job_id' => 1,
                'salary' => 1.5,
                'manager_id' => 1,
                'department_id' => 1,
            ],
        ];
        parent::init();
    }
}

<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DependentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DependentsTable Test Case
 */
class DependentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DependentsTable
     */
    protected $Dependents;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Dependents',
        'app.Employees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Dependents') ? [] : ['className' => DependentsTable::class];
        $this->Dependents = $this->getTableLocator()->get('Dependents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Dependents);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DependentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DependentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

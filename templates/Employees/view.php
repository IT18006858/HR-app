<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->employee_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->employee_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->employee_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($employee->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($employee->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($employee->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($employee->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Job') ?></th>
                    <td><?= $employee->has('job') ? $this->Html->link($employee->job->job_id, ['controller' => 'Jobs', 'action' => 'view', $employee->job->job_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Employee') ?></th>
                    <td><?= $employee->has('employee') ? $this->Html->link($employee->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $employee->employee->employee_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $employee->has('department') ? $this->Html->link($employee->department->department_id, ['controller' => 'Departments', 'action' => 'view', $employee->department->department_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Employee Id') ?></th>
                    <td><?= $this->Number->format($employee->employee_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salary') ?></th>
                    <td><?= $this->Number->format($employee->salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hire Date') ?></th>
                    <td><?= h($employee->hire_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

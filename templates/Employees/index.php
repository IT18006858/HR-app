<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="employees index content">
    <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Employees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('employee_id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('hire_date') ?></th>
                    <th><?= $this->Paginator->sort('job_id') ?></th>
                    <th><?= $this->Paginator->sort('salary') ?></th>
                    <th><?= $this->Paginator->sort('manager_id') ?></th>
                    <th><?= $this->Paginator->sort('department_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $this->Number->format($employee->employee_id) ?></td>
                    <td><?= h($employee->first_name) ?></td>
                    <td><?= h($employee->last_name) ?></td>
                    <td><?= h($employee->email) ?></td>
                    <td><?= h($employee->phone_number) ?></td>
                    <td><?= h($employee->hire_date) ?></td>
                    <td><?= $employee->has('job') ? $this->Html->link($employee->job->job_id, ['controller' => 'Jobs', 'action' => 'view', $employee->job->job_id]) : '' ?></td>
                    <td><?= $this->Number->format($employee->salary) ?></td>
                    <td><?= $employee->has('employee') ? $this->Html->link($employee->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $employee->employee->employee_id]) : '' ?></td>
                    <td><?= $employee->has('department') ? $this->Html->link($employee->department->department_id, ['controller' => 'Departments', 'action' => 'view', $employee->department->department_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employee->employee_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->employee_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->employee_id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->employee_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

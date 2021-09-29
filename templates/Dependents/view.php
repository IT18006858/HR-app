<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependent $dependent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dependent'), ['action' => 'edit', $dependent->dependent_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dependent'), ['action' => 'delete', $dependent->dependent_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependent->dependent_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dependents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dependent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dependents view content">
            <h3><?= h($dependent->dependent_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($dependent->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($dependent->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Relationship') ?></th>
                    <td><?= h($dependent->relationship) ?></td>
                </tr>
                <tr>
                    <th><?= __('Employee') ?></th>
                    <td><?= $dependent->has('employee') ? $this->Html->link($dependent->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $dependent->employee->employee_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dependent Id') ?></th>
                    <td><?= $this->Number->format($dependent->dependent_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

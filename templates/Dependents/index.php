<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependent[]|\Cake\Collection\CollectionInterface $dependents
 */
?>
<div class="dependents index content">
    <?= $this->Html->link(__('New Dependent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dependents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('dependent_id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('relationship') ?></th>
                    <th><?= $this->Paginator->sort('employee_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dependents as $dependent): ?>
                <tr>
                    <td><?= $this->Number->format($dependent->dependent_id) ?></td>
                    <td><?= h($dependent->first_name) ?></td>
                    <td><?= h($dependent->last_name) ?></td>
                    <td><?= h($dependent->relationship) ?></td>
                    <td><?= $dependent->has('employee') ? $this->Html->link($dependent->employee->employee_id, ['controller' => 'Employees', 'action' => 'view', $dependent->employee->employee_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dependent->dependent_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dependent->dependent_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dependent->dependent_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependent->dependent_id)]) ?>
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

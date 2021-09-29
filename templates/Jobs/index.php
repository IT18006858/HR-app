<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job[]|\Cake\Collection\CollectionInterface $jobs
 */
?>
<div class="jobs index content">
    <?= $this->Html->link(__('New Job'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Jobs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('job_id') ?></th>
                    <th><?= $this->Paginator->sort('job_title') ?></th>
                    <th><?= $this->Paginator->sort('min_salary') ?></th>
                    <th><?= $this->Paginator->sort('max_salary') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobs as $job): ?>
                <tr>
                    <td><?= $this->Number->format($job->job_id) ?></td>
                    <td><?= h($job->job_title) ?></td>
                    <td><?= $this->Number->format($job->min_salary) ?></td>
                    <td><?= $this->Number->format($job->max_salary) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $job->job_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->job_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->job_id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->job_id)]) ?>
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

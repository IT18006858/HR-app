<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->job_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->job_id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->job_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Jobs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Job'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jobs view content">
            <h3><?= h($job->job_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Job Title') ?></th>
                    <td><?= h($job->job_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Job Id') ?></th>
                    <td><?= $this->Number->format($job->job_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Min Salary') ?></th>
                    <td><?= $this->Number->format($job->min_salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Max Salary') ?></th>
                    <td><?= $this->Number->format($job->max_salary) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

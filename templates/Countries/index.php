<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country[]|\Cake\Collection\CollectionInterface $countries
 */
?>
<div class="countries index content">
    <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Countries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('country_name') ?></th>
                    <th><?= $this->Paginator->sort('region_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($countries as $country): ?>
                <tr>
                    <td><?= h($country->country_id) ?></td>
                    <td><?= h($country->country_name) ?></td>
                    <td><?= $country->has('region') ? $this->Html->link($country->region->region_id, ['controller' => 'Regions', 'action' => 'view', $country->region->region_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $country->country_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->country_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->country_id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->country_id)]) ?>
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

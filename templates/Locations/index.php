<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location[]|\Cake\Collection\CollectionInterface $locations
 */
?>
<div class="locations index content">
    <?= $this->Html->link(__('New Location'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Locations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('location_id') ?></th>
                    <th><?= $this->Paginator->sort('street_address') ?></th>
                    <th><?= $this->Paginator->sort('postal_code') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state_province') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($locations as $location): ?>
                <tr>
                    <td><?= $this->Number->format($location->location_id) ?></td>
                    <td><?= h($location->street_address) ?></td>
                    <td><?= h($location->postal_code) ?></td>
                    <td><?= h($location->city) ?></td>
                    <td><?= h($location->state_province) ?></td>
                    <td><?= $location->has('country') ? $this->Html->link($location->country->country_id, ['controller' => 'Countries', 'action' => 'view', $location->country->country_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $location->location_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $location->location_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $location->location_id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->location_id)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->location_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->location_id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->location_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Location'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locations view content">
            <h3><?= h($location->location_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Street Address') ?></th>
                    <td><?= h($location->street_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= h($location->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($location->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Province') ?></th>
                    <td><?= h($location->state_province) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $location->has('country') ? $this->Html->link($location->country->country_id, ['controller' => 'Countries', 'action' => 'view', $location->country->country_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Location Id') ?></th>
                    <td><?= $this->Number->format($location->location_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

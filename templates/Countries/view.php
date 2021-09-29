<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->country_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->country_id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->country_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries view content">
            <h3><?= h($country->country_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Country Id') ?></th>
                    <td><?= h($country->country_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country Name') ?></th>
                    <td><?= h($country->country_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region') ?></th>
                    <td><?= $country->has('region') ? $this->Html->link($country->region->region_id, ['controller' => 'Regions', 'action' => 'view', $country->region->region_id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

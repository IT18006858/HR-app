<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Region $region
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->region_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->region_id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->region_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Regions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Region'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="regions view content">
            <h3><?= h($region->region_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Region Name') ?></th>
                    <td><?= h($region->region_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region Id') ?></th>
                    <td><?= $this->Number->format($region->region_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

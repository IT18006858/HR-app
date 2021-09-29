<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependent $dependent
 * @var string[]|\Cake\Collection\CollectionInterface $employees
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dependent->dependent_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dependent->dependent_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Dependents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dependents form content">
            <?= $this->Form->create($dependent) ?>
            <fieldset>
                <legend><?= __('Edit Dependent') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('relationship');
                    echo $this->Form->control('employee_id', ['options' => $employees]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

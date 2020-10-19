<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompagniesAerienne $compagniesAerienne
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compagniesAerienne->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compagniesAerienne->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Compagnies Aeriennes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="compagniesAeriennes form large-9 medium-8 columns content">
    <?= $this->Form->create($compagniesAerienne) ?>
    <fieldset>
        <legend><?= __('Edit Compagnies Aerienne') ?></legend>
        <?php
            echo $this->Form->control('slug');
            echo $this->Form->control('nom');
            echo $this->Form->control('pays');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

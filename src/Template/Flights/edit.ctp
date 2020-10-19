<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $flight->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Flights'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Compagnies Aeriennes'), ['controller' => 'CompagniesAeriennes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compagnies Aerienne'), ['controller' => 'CompagniesAeriennes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flights form large-9 medium-8 columns content">
    <?= $this->Form->create($flight) ?>
    <fieldset>
        <legend><?= __('Edit Flight') ?></legend>
        <?php
            echo $this->Form->control('cie_aerienne_id', ['options' => $compagniesAeriennes]);
            echo $this->Form->control('code_type_avion');
            echo $this->Form->control('code_aeroport_depart');
            echo $this->Form->control('code_aeroport_arrive');
            echo $this->Form->control('heure_depart');
            echo $this->Form->control('heure_arrive');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

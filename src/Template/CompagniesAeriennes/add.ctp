<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompagniesAerienne $compagniesAerienne
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Flights'), ['controller' => 'Flights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Compagnies Aeriennes'), ['controller' => 'CompagniesAeriennes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Niveaux'), ['controller' => 'Niveaux', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="compagniesAeriennes form large-9 medium-8 columns content">
    <?= $this->Form->create($compagniesAerienne) ?>
    <fieldset>
        <legend><?= __('Add Compagnies Aerienne') ?></legend>
        <?php
            echo $this->Form->control('slug');
            echo $this->Form->control('nom');
            echo $this->Form->control('pays');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

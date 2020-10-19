<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Flight'), ['action' => 'edit', $flight->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flight'), ['action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flights'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flight'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compagnies Aeriennes'), ['controller' => 'CompagniesAeriennes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compagnies Aerienne'), ['controller' => 'CompagniesAeriennes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="flights view large-9 medium-8 columns content">
    <h3><?= h($flight->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($flight->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Compagnies Aerienne') ?></th>
            <td><?= $flight->has('compagnies_aerienne') ? $this->Html->link($flight->compagnies_aerienne->id, ['controller' => 'CompagniesAeriennes', 'action' => 'view', $flight->compagnies_aerienne->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Type Avion') ?></th>
            <td><?= h($flight->code_type_avion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Aeroport Depart') ?></th>
            <td><?= h($flight->code_aeroport_depart) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Aeroport Arrive') ?></th>
            <td><?= h($flight->code_aeroport_arrive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $flight->has('user') ? $this->Html->link($flight->user->id, ['controller' => 'Users', 'action' => 'view', $flight->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Heure Depart') ?></th>
            <td><?= h($flight->heure_depart) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Heure Arrive') ?></th>
            <td><?= h($flight->heure_arrive) ?></td>
        </tr>
    </table>
</div>

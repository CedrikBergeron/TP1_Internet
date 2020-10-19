<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompagniesAerienne $compagniesAerienne
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compagnies Aerienne'), ['action' => 'edit', $compagniesAerienne->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compagnies Aerienne'), ['action' => 'delete', $compagniesAerienne->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compagniesAerienne->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Compagnies Aeriennes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compagnies Aerienne'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="compagniesAeriennes view large-9 medium-8 columns content">
    <h3><?= h($compagniesAerienne->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($compagniesAerienne->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($compagniesAerienne->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($compagniesAerienne->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pays') ?></th>
            <td><?= h($compagniesAerienne->pays) ?></td>
        </tr>
    </table>
</div>

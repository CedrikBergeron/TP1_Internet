<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight[]|\Cake\Collection\CollectionInterface $flights
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Compagnies Aeriennes'), ['controller' => 'CompagniesAeriennes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Compagnies Aerienne'), ['controller' => 'CompagniesAeriennes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flights index large-9 medium-8 columns content">
    <h3><?= __('Flights') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cie_aerienne_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_type_avion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_aeroport_depart') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_aeroport_arrive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heure_depart') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heure_arrive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flights as $flight): ?>
            <tr>
                <td><?= h($flight->id) ?></td>
                <td><?= $flight->has('compagnies_aerienne') ? $this->Html->link($flight->compagnies_aerienne->id, ['controller' => 'CompagniesAeriennes', 'action' => 'view', $flight->compagnies_aerienne->id]) : '' ?></td>
                <td><?= h($flight->code_type_avion) ?></td>
                <td><?= h($flight->code_aeroport_depart) ?></td>
                <td><?= h($flight->code_aeroport_arrive) ?></td>
                <td><?= h($flight->heure_depart) ?></td>
                <td><?= h($flight->heure_arrive) ?></td>
                <td><?= $flight->has('user') ? $this->Html->link($flight->user->id, ['controller' => 'Users', 'action' => 'view', $flight->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $flight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

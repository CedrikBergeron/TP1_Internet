<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation[]|\Cake\Collection\CollectionInterface $reservations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flights'), ['controller' => 'Flights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flight'), ['controller' => 'Flights', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Niveaux'), ['controller' => 'Niveaux', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Niveaux'), ['controller' => 'Niveaux', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reservations index large-9 medium-8 columns content">
    <h3><?= __('Reservations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vol_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_personne') ?></th>
                <th scope="col"><?= $this->Paginator->sort('classe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= $this->Number->format($reservation->id) ?></td>
                <td><?= h($reservation->slug) ?></td>
                <td><?= $reservation->has('flight') ? $this->Html->link($reservation->flight->id, ['controller' => 'Flights', 'action' => 'view', $reservation->flight->id]) : '' ?></td>
                <td><?= $this->Number->format($reservation->nombre_personne) ?></td>
                <td><?= $reservation->has('niveaux') ? $this->Html->link($reservation->niveaux->id, ['controller' => 'Niveaux', 'action' => 'view', $reservation->niveaux->id]) : '' ?></td>
                <td><?= $reservation->has('user') ? $this->Html->link($reservation->user->id, ['controller' => 'Users', 'action' => 'view', $reservation->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reservation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reservation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id)]) ?>
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

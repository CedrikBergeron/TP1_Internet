<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Niveaux $niveaux
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $niveaux->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $niveaux->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Niveaux'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="niveaux form large-9 medium-8 columns content">
    <?= $this->Form->create($niveaux) ?>
    <fieldset>
        <legend><?= __('Edit Niveaux') ?></legend>
        <?php
            echo $this->Form->control('nom');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Encuentro $encuentro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $encuentro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $encuentro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Encuentros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fechas'), ['controller' => 'Fechas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fecha'), ['controller' => 'Fechas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="encuentros form large-9 medium-8 columns content">
    <?= $this->Form->create($encuentro) ?>
    <fieldset>
        <legend><?= __('Edit Encuentro') ?></legend>
        <?php
            echo $this->Form->control('resultado');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('fecha_id', ['options' => $fechas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

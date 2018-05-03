<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fecha $fecha
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fecha->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fecha->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fechas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campeonatos'), ['controller' => 'Campeonatos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campeonato'), ['controller' => 'Campeonatos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Encuentros'), ['controller' => 'Encuentros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fechas form large-9 medium-8 columns content">
    <?= $this->Form->create($fecha) ?>
    <fieldset>
        <legend><?= __('Edit Fecha') ?></legend>
        <?php
            echo $this->Form->control('fecha_inicio');
            echo $this->Form->control('fecha_fin');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('campeonato_id', ['options' => $campeonatos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

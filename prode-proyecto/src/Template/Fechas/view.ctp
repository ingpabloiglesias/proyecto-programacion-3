<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fecha $fecha
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fecha'), ['action' => 'edit', $fecha->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fecha'), ['action' => 'delete', $fecha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fecha->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fechas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fecha'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campeonatos'), ['controller' => 'Campeonatos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campeonato'), ['controller' => 'Campeonatos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Encuentros'), ['controller' => 'Encuentros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fechas view large-9 medium-8 columns content">
    <h3><?= h($fecha->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($fecha->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($fecha->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Campeonato') ?></th>
            <td><?= $fecha->has('campeonato') ? $this->Html->link($fecha->campeonato->id, ['controller' => 'Campeonatos', 'action' => 'view', $fecha->campeonato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($fecha->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($fecha->fecha_fin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fecha->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fecha->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Encuentros') ?></h4>
        <?php if (!empty($fecha->encuentros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Resultado') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Fecha Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fecha->encuentros as $encuentros): ?>
            <tr>
                <td><?= h($encuentros->id) ?></td>
                <td><?= h($encuentros->resultado) ?></td>
                <td><?= h($encuentros->observaciones) ?></td>
                <td><?= h($encuentros->fecha_id) ?></td>
                <td><?= h($encuentros->created) ?></td>
                <td><?= h($encuentros->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Encuentros', 'action' => 'view', $encuentros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Encuentros', 'action' => 'edit', $encuentros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Encuentros', 'action' => 'delete', $encuentros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $encuentros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

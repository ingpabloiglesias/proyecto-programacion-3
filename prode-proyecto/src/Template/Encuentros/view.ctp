<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Encuentro $encuentro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Encuentro'), ['action' => 'edit', $encuentro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Encuentro'), ['action' => 'delete', $encuentro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $encuentro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Encuentros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Encuentro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fechas'), ['controller' => 'Fechas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fecha'), ['controller' => 'Fechas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="encuentros view large-9 medium-8 columns content">
    <h3><?= h($encuentro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($encuentro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resultado') ?></th>
            <td><?= h($encuentro->resultado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($encuentro->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= $encuentro->has('fecha') ? $this->Html->link($encuentro->fecha->id, ['controller' => 'Fechas', 'action' => 'view', $encuentro->fecha->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($encuentro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($encuentro->modified) ?></td>
        </tr>
    </table>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fecha[]|\Cake\Collection\CollectionInterface $fechas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fecha'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campeonatos'), ['controller' => 'Campeonatos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campeonato'), ['controller' => 'Campeonatos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Encuentros'), ['controller' => 'Encuentros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Encuentro'), ['controller' => 'Encuentros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fechas index large-9 medium-8 columns content">
    <h3><?= __('Fechas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('campeonato_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fechas as $fecha): ?>
            <tr>
                <td><?= h($fecha->id) ?></td>
                <td><?= h($fecha->fecha_inicio) ?></td>
                <td><?= h($fecha->fecha_fin) ?></td>
                <td><?= h($fecha->descripcion) ?></td>
                <td><?= $fecha->has('campeonato') ? $this->Html->link($fecha->campeonato->id, ['controller' => 'Campeonatos', 'action' => 'view', $fecha->campeonato->id]) : '' ?></td>
                <td><?= h($fecha->created) ?></td>
                <td><?= h($fecha->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fecha->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fecha->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fecha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fecha->id)]) ?>
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

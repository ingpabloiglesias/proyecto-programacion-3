<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campeonato[]|\Cake\Collection\CollectionInterface $campeonatos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Campeonato'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fechas'), ['controller' => 'Fechas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fecha'), ['controller' => 'Fechas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="campeonatos index large-9 medium-8 columns content">
    <h3><?= __('Campeonatos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsable_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($campeonatos as $campeonato): ?>
            <tr>
                <td><?= h($campeonato->id) ?></td>
                <td><?= h($campeonato->fecha_inicio) ?></td>
                <td><?= h($campeonato->fecha_fin) ?></td>
                <td><?= h($campeonato->descripcion) ?></td>
                <td><?= h($campeonato->responsable_id) ?></td>
                <td><?= h($campeonato->created) ?></td>
                <td><?= h($campeonato->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $campeonato->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campeonato->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campeonato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campeonato->id)]) ?>
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

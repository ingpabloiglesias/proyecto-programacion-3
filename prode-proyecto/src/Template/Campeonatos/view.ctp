<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campeonato $campeonato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Campeonato'), ['action' => 'edit', $campeonato->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campeonato'), ['action' => 'delete', $campeonato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campeonato->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campeonatos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campeonato'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fechas'), ['controller' => 'Fechas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fecha'), ['controller' => 'Fechas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="campeonatos view large-9 medium-8 columns content">
    <h3><?= h($campeonato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($campeonato->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($campeonato->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsable Id') ?></th>
            <td><?= h($campeonato->responsable_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($campeonato->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($campeonato->fecha_fin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($campeonato->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($campeonato->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fechas') ?></h4>
        <?php if (!empty($campeonato->fechas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fecha Inicio') ?></th>
                <th scope="col"><?= __('Fecha Fin') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Campeonato Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($campeonato->fechas as $fechas): ?>
            <tr>
                <td><?= h($fechas->id) ?></td>
                <td><?= h($fechas->fecha_inicio) ?></td>
                <td><?= h($fechas->fecha_fin) ?></td>
                <td><?= h($fechas->descripcion) ?></td>
                <td><?= h($fechas->campeonato_id) ?></td>
                <td><?= h($fechas->created) ?></td>
                <td><?= h($fechas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fechas', 'action' => 'view', $fechas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fechas', 'action' => 'edit', $fechas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fechas', 'action' => 'delete', $fechas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fechas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolUsuario $rolUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rolUsuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rolUsuario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rol Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rolUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($rolUsuario) ?>
    <fieldset>
        <legend><?= __('Edit Rol Usuario') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserProfile $userProfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Profile'), ['action' => 'edit', $userProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Profile'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Profile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userProfiles view large-9 medium-8 columns content">
    <h3><?= h($userProfile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($userProfile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($userProfile->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($userProfile->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= h($userProfile->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagen') ?></th>
            <td><?= h($userProfile->imagen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($userProfile->fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userProfile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userProfile->modified) ?></td>
        </tr>
    </table>
</div>

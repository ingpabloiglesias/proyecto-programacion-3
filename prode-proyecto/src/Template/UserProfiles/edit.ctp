<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserProfile $userProfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userProfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Profiles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="userProfiles form large-9 medium-8 columns content">
    <?= $this->Form->create($userProfile) ?>
    <fieldset>
        <legend><?= __('Edit User Profile') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('dni');
            echo $this->Form->control('fecha_nacimiento');
            echo $this->Form->control('imagen');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

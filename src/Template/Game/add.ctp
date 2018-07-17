<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Game'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="Game form large-9 medium-8 columns content">
    <?= $this->Form->create($game) ?>
    <fieldset>
        <legend><?= __('Add Game') ?></legend>
        <?php
            echo $this->Form->control('FileImage');
            echo $this->Form->textarea('Description');
            echo $this->Form->input('catalogs', array(
                'multiple' => 'checkbox',
                'options' => $catalogs
            ));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

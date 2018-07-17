<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gamecatalog $gamecatalog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gamecatalog->IdGame],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gamecatalog->IdGame)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gamecatalog'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gamecatalog form large-9 medium-8 columns content">
    <?= $this->Form->create($gamecatalog) ?>
    <fieldset>
        <legend><?= __('Edit Gamecatalog') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

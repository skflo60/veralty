<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catalog $catalog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Catalog'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="catalog form large-9 medium-8 columns content">
    <?= $this->Form->create($catalog) ?>
    <fieldset>
        <legend><?= __('Add Catalog') ?></legend>
        <?php
            echo $this->Form->control('Name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

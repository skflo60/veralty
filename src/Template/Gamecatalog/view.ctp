<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gamecatalog $gamecatalog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gamecatalog'), ['action' => 'edit', $gamecatalog->IdGame]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gamecatalog'), ['action' => 'delete', $gamecatalog->IdGame], ['confirm' => __('Are you sure you want to delete # {0}?', $gamecatalog->IdGame)]) ?> </li>
        <li><?= $this->Html->link(__('List Gamecatalog'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gamecatalog'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gamecatalog view large-9 medium-8 columns content">
    <h3><?= h($gamecatalog->IdGame) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdGame') ?></th>
            <td><?= $this->Number->format($gamecatalog->IdGame) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCatalog') ?></th>
            <td><?= $this->Number->format($gamecatalog->IdCatalog) ?></td>
        </tr>
    </table>
</div>

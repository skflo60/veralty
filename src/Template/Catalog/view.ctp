<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catalog $catalog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Catalog'), ['action' => 'edit', $catalog->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Catalog'), ['action' => 'delete', $catalog->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $catalog->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Catalog'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catalog'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="catalog view large-9 medium-8 columns content">
    <h3><?= h($catalog->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($catalog->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($catalog->Id) ?></td>
        </tr>
    </table>
</div>

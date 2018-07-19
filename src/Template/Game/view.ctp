<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Game'), ['action' => 'edit', $game->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Game'), ['action' => 'delete', $game->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Game'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="game view large-9 medium-8 columns content">
    <h3><?= h($game->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('FileImage') ?></th>
            <td><?= h($game->FileImage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($game->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UrlTrailer') ?></th>
            <td><?= h($game->UrlTrailer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($game->Id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PublicVisibility') ?></th>
            <td><?= $game->PublicVisibility ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

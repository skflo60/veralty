<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Booking'), ['action' => 'edit', $booking->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Booking'), ['action' => 'delete', $booking->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Booking'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Booking'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="booking view large-9 medium-8 columns content">
    <h3><?= h($booking->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($booking->Id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NbUser') ?></th>
            <td><?= $this->Number->format($booking->NbUser) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($booking->UserId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($booking->Date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($booking->Time) ?></td>
        </tr>
    </table>
</div>

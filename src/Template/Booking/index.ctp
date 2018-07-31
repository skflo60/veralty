<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking[]|\Cake\Collection\CollectionInterface $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Booking'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="booking index large-9 medium-8 columns content">
    <h3><?= __('Booking') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NbUser') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('UserId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($booking as $booking): ?>
            <tr>
                <td><?= $this->Number->format($booking->Id) ?></td>
                <td><?= h($booking->Date) ?></td>
                <td><?= $this->Number->format($booking->NbUser) ?></td>
                <td><?= h($booking->Time) ?></td>
                <td><?= $this->Number->format($booking->UserId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $booking->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booking->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

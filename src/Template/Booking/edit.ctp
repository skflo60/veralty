<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $booking->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $booking->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Booking'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="booking form large-9 medium-8 columns content">
    <?= $this->Form->create($booking) ?>
    <fieldset>
        <legend><?= __('Edit Booking') ?></legend>
        <?php
            echo $this->Form->control('Date');
            echo $this->Form->control('NbUser');
            echo $this->Form->control('Time');
            echo $this->Form->control('UserId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catalog[]|\Cake\Collection\CollectionInterface $catalog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Catalog'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="catalog index large-9 medium-8 columns content">
    <h3><?= __('Catalog') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($catalog as $catalog): ?>
            <tr>
                <td><?= $this->Number->format($catalog->Id) ?></td>
                <td><?= h($catalog->Name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $catalog->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catalog->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catalog->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $catalog->Id)]) ?>
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

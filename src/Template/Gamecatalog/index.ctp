<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gamecatalog[]|\Cake\Collection\CollectionInterface $gamecatalog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gamecatalog'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gamecatalog index large-9 medium-8 columns content">
    <h3><?= __('Gamecatalog') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('IdGame') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IdCatalog') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gamecatalog as $gamecatalog): ?>
            <tr>
                <td><?= $this->Number->format($gamecatalog->IdGame) ?></td>
                <td><?= $this->Number->format($gamecatalog->IdCatalog) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gamecatalog->IdGame]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gamecatalog->IdGame]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gamecatalog->IdGame], ['confirm' => __('Are you sure you want to delete # {0}?', $gamecatalog->IdGame)]) ?>
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

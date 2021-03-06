<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Industry[]|\Cake\Collection\CollectionInterface $industries
  */
?>

<style>
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  td, th {
      border: 2px solid #87CEFA;
      text-align: left;
      padding: 8px;
  }

  th {
      color: #48c2c5;
  }

  a{
      color: #4169E1;
  }

  tr:nth-child(even) {
      background-color: #FFF;
  }
</style>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Industry'), ['action' => 'add']) ?></li>
    </ul>
</nav> 
<div class="industries index large-9 medium-8 columns content">
    <h3><?= __('Industries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_indus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categori_indus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($industries as $industry): ?>
            <tr>
                <td><?= $this->Number->format($industry->id_indus) ?></td>
                <td><?= h($industry->categori_indus) ?></td>
                <td><?= h($industry->created) ?></td>
                <td><?= h($industry->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $industry->id_indus]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $industry->id_indus]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $industry->id_indus], ['confirm' => __('Are you sure you want to delete # {0}?', $industry->id_indus)]) ?>
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

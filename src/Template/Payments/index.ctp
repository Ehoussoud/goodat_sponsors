<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Payment[]|\Cake\Collection\CollectionInterface $payments
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
 tr:nth-child(even) {
      background-color: #FFF;
  }

  a{
      color: #4169E1;
  }
  
</style>


<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="payments index large-9 medium-8 columns content">
    <h3><?= __('Payments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_pay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validTo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payments as $payment): ?>
            <tr>
                <td><?= $this->Number->format($payment->id_pay) ?></td>
                <td><?= $this->Number->format($payment->amount) ?></td>
                <td><?= h($payment->validTo) ?></td>
                <td><?= $payment->has('user') ? $this->Html->link($payment->user->username, ['controller' => 'Users', 'action' => 'view', $payment->user->id_user]) : '' ?></td>
                <td><?= h($payment->created) ?></td>
                <td><?= h($payment->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $payment->id_pay]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->id_pay]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payment->id_pay], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id_pay)]) ?>
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

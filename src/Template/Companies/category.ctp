<?php
$this->extend('/Common/view');

/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Company[]|\Cake\Collection\CollectionInterface $companies
  */

use Cake\Core\Plugin;
use Cake\Routing\Router;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Route\DashedRoute;

?>

<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Industries'), ['controller' => 'Industries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Industry'), ['controller' => 'Industries', 'action' => 'add']) ?></li>
    </ul>
</nav> -->

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<div>
<?php $this->start('navHeader'); ?>

    <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-info pull-right']) ?>

<?php $this->end(); ?>
</div>

<div class="companies index large-9 medium-8 columns content">
    <!-- <h3><?= __('Companies') ?></h3> -->
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
<!--                 <th scope="col"><?= $this->Paginator->sort('id_cmpny') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Company') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('industri_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sponsor') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
<!--                 <th scope="col" class="actions"><?= __('Actions') ?></th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $company): ?>
            <tr>
<!--                 <td><?= $this->Number->format($company->id_cmpny) ?></td> -->
                <td><?= h($company->name_company) ?></td>
                <td><?= h($company->company_website) ?></td>
                <td><?= h($company->email) ?></td>
                <td><?= h($company->town_city) ?></td>
                <td><?= $company->has('industry') ? $company->industry->categori_indus : 'Néant' ?></td>
                <!-- <td><?= h($company->sponsor) ?></td> -->
                <td><?= $company->sponsor ? __('Yes') : __('No'); ?></td>
               <!--  <td><?= h($company->created) ?></td>
                <td><?= h($company->modified) ?></td> -->
                <!-- <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $company->id_cmpny]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->id_cmpny]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->id_cmpny], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id_cmpny)]) ?>
                </td> -->
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

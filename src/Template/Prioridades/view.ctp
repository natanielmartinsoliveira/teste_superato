<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prioridade $prioridade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prioridade'), ['action' => 'edit', $prioridade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prioridade'), ['action' => 'delete', $prioridade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prioridade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prioridades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prioridade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prioridades view large-9 medium-8 columns content">
    <h3><?= h($prioridade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($prioridade->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($prioridade->id) ?></td>
        </tr>
    </table>
</div>

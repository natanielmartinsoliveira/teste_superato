<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<div class="row">
  <div class="col-sm-3">
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('Edit Tarefa'), ['action' => 'edit', $tarefa->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete Tarefa'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]) ?> </li>
                <li><?= $this->Html->link(__('List Tarefas'), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New Tarefa'), ['action' => 'add']) ?> </li>
            </ul>
        </nav>
  </div>
  <div class="col-sm-9">
    
        <h3><?= h($tarefa->id) ?></h3>
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Titulo') ?></th>
                <td><?= h($tarefa->titulo) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Descricao') ?></th>
                <td><?= h($tarefa->descricao) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($tarefa->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Prioridade') ?></th>
                <td><?= $this->Number->format($tarefa->prioridade) ?></td>
            </tr>
        </table>
   
  </div>
</div>
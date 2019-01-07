<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prioridade $prioridade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prioridades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prioridades form large-9 medium-8 columns content">
    <?= $this->Form->create($prioridade) ?>
    <fieldset>
        <legend><?= __('Add Prioridade') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

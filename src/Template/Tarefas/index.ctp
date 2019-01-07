<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa[]|\Cake\Collection\CollectionInterface $tarefas
 */
?>
<section class="body" ng-app="main-App" >

<ng-view></ng-view>

<div class="container"  style="margin-top: 20px;"> 
  <div class="alert alert-success message error" style="display: none;" id='mensagens' role="alert" onclick="$(this).hide();">

  </div>
  <div class="alert alert-danger message error" style="display: none;" id='mensagens-erro' role="alert" onclick="$(this).hide();">

  </div>
</div>

<div class="row"  ng-controller="myCtrl">
  <div class="col-sm-3" style="padding-top: 30px;">
       
    <button class="btn btn-primary btn-lg" ng-click="openModal('create-nota','<?= $this->request->getParam('_csrfToken') ?>')"  style="margin-top: -25px;">Nova Tarefa</button>
   
  </div>
  <div class="col-sm-9">
 
    <h3><?= __('Tarefas') ?></h3>
     <table class="table table-hover table-striped table-bordered sorted_table" id="myTable">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col" class="actions"><?= __('Açoes') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tarefas as $tarefa): ?>
            <tr id="<?= $this->Number->format($tarefa->id) ?>">
                <td class="index"><?= $this->Number->format($tarefa->id) ?></td>
                <td><?= h($tarefa->titulo) ?></td>
                <td><?= h($tarefa->descricao) ?></td>
                <td class="actions">
                    
            
                    <a href="#" ng-click="openEdit(<?= $this->Number->format($tarefa->id) ?>, <?= $this->Number->format($tarefa->id) ?>, '', '<?= $this->request->getParam('_csrfToken') ?>')"><i class="fas fa-edit" ></i><?= __('Editar') ?></a>
                    <a href="#" ng-click="remove('<?= $this->Number->format($tarefa->id) ?>', '<?= $this->request->getParam('_csrfToken') ?>')" ><i class="fas fa-trash-alt"></i><?= __('Deletar') ?></a>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   
    <div class="paginator">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php
                $this->Paginator->templates([
                    'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                    'prevDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                    'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                    'current' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                    'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                    'nextDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>'
                ]); ?>
                <?= $this->Paginator->prev() ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next() ?>
            </ul>
        </nav>
    </div>
    
    
</section>

  </div>
</div>


<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    
    <?= $this->Html->css('https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css') ?>
    <?= $this->Html->css('https://use.fontawesome.com/releases/v5.6.3/css/all.css') ?>
    <?= $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js') ?>
    <?= $this->Html->script('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') ?>
    <?= $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-route.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ng-dialog/1.4.0/js/ngDialog.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ng-dialog/1.4.0/css/ngDialog.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ng-dialog/1.4.0/css/ngDialog-theme-default.min.css">

    <?= $this->Html->css('main.min.css') ?>
    <?= $this->Html->script('main.js') ?>
    <?= $this->Html->script('../app/Routes.js') ?>
    <?= $this->Html->script('../app/services/myServices.js') ?>
    <?= $this->Html->script('../app/helper/myHelper.js') ?>
    <?= $this->Html->script('../app/controllers/NotaController.js') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"><?= $this->fetch('title') ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tarefas</a>
              </li>
              
            </ul>
            
          </div>
        </nav>
   
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>

var app =  angular.module('main-App',['ngRoute','ngDialog']);

app.config(['$routeProvider',

function($routeProvider) {

  $routeProvider.
  when('/receber', {
    templateUrl: 'app/notas.html',
    controller: 'NotaController',
    title: 'Contas a Receber'
  }).
  when('/pagar', {
    templateUrl: 'app/saidas.html',
    controller: 'SaidasController',
    title: 'Contas a Pagar'
  });
}]);

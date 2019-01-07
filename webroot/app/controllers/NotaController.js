
app.controller('AdminController', function(dataFactory,$scope,$http){
  $scope.pools = [];

});


app.run(['$location', '$rootScope', function($location, $rootScope) {
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {
        $rootScope.title = current.$$route.title;
    });
}]);

app.controller('FileController', function(dataFactory,$scope,$http,$filter,ngDialog,$rootScope) {

 


$scope.saveAdd = function(){

console.log($scope.form);
      $http({
          url: '/teste_superato/tarefas/add',
          method: "POST",
           headers: {
             'X-CSRF-Token': $scope.form._csrfToken
            },
          data: $scope.form
      }).then(function(data) {
         $('#mensagens').html('Gravado com sucesso');
         $('#mensagens').show();
          //$rootScope.$broadcast('novosDados', {data: null});
          ngDialog.close();
          
      }, 
      function(response) { // optional
        console.log(response);
        $('#mensagens-erro').html('Erro ao Gravar tarefas');
        $('#mensagens-erro').show();
          alert('Não Foi possivel Gravar os dados.');
      });

  }

  $scope.saveEdit = function(){

          $http({
              url: '/teste_superato/tarefas/editrest/'+$scope.form.id,
              method: "POST",
              headers: {
                 'X-CSRF-Token': $scope.form._csrfToken
              },
              data: $scope.form
          }).then(function(datares) {
              //pageChanged(1);
              ngDialog.close();
              $('#mensagens').html('Atualizado com sucesso');
              $('#mensagens').show();
              $rootScope.$broadcast('sendModalForm',{data: datares.data.data});

          }, 
          function(response) { // optional
              alert('Não Foi possivel Gravar os dados.');
          });

  }


  
});



app.controller('myCtrl', function(dataFactory,$scope,$http,$filter,ngDialog,$templateCache) {

 var vm = this;

 $scope.openModal = function(id, token){
      var form = {
        _method : 'POST',
        _csrfToken : token

      };
      vm.init = function() {
          $scope.form = form;
      }
      vm.init();
      var dialog = ngDialog.open({ template: 'app/externalTemplate1.html', controller:'FileController', scope : $scope });
  }

  $scope.closeModal = function(id){
    ngDialog.close();
  }


 $scope.openEdit = function(id,index, pessoa,token){
    //$("#loading_gif").show();
    $scope.form = {};

    dataFactory.httpRequest('/teste_superato/tarefas/editrest/'+id).then(function(data) {

      $scope.form = data;

        $scope.form._method = 'POST';
        $scope.form._csrfToken = token;
      
        var dialog2 = ngDialog.open({ template: 'webroot/app/externalTemplateEdit.html', controller:'FileController', scope : $scope });
 

    });
  }



  $scope.remove = function(nota, index){

  var result = ngDialog.openConfirm({
    template: 'webroot/app/alert-modal.html',
            closeByDocument: false,
            closeByEscape: false,
            className: 'ngdialog-theme-default',
            showClose: false,
            width: 520,
             data: {
                modalHeader: 'Deletar / Cancelar ',
                modalBody: 'Deseja deletar / Cancelar este Registro? \n',
                trueOption: 'Deletar',
                falseOption: 'Cancelar'
            }// <- ability to use the scopes from directive controller
    }).then(function (success) {
        // Success logic here
        alert('Cancelada Solicitação pelo Usuario.');

    }, function (error) {

    var dataObj = {
        _method : 'POST',
        _csrfToken : index };

        $http({
            url: '/teste_superato/tarefas/delete/'+nota,
            method: "POST",
             headers: {
             'X-CSRF-Token': index
              },
            data: dataObj
        }).then(function(data) {
           $('#mensagens').show();
            alert('Excluido com sucesso!');
            //$scope.data = apiModifyTable($scope.data , index, data.data.data)
        }, 
        function(response) { // optional
            alert('Não Foi possivel Gravar os dados.');
        });
    });

  }


});

app.controller('NotaController', function(dataFactory,$scope,$http,$filter,ngDialog,$templateCache){

   var vm = this;

    // select all items
    $scope.selectAll = function() {
      angular.forEach($scope.data, function(item) {
        item.Selected = $scope.selectedAll;
      });
    };

    // use the array "every" function to test if ALL items are checked
    $scope.checkIfAllSelected = function() {
      $scope.selectedAll = $scope.data.every(function(item) {
        return item.Selected == true
      })
    };

  




  $scope.currentPage = 1;
  $scope.pageSize = 25;
  $scope.collection = [];
  $scope.title ='------';

  $scope.sortType     = 'nome'; // set the default sort type
  $scope.sortReverse  = false;  // set the default sort order
 
  $scope.data = [];
  $scope.pageNumber = 1;
  $scope.libraryTemp = {};
  $scope.totalItemsTemp = {};
  $scope.totalItems = 0;


  function isUndefinedOrNull(obj) {
    return angular.isDefined(obj) || obj===null;
  };

  $scope.$on('sendModalForm', function (event, args) {

          //$scope.data = apiModifyTable($scope.data , args.data.index, args.data);
          ngDialog.close();

  });

  $scope.$on('novosDados', function (event, args) {
          //getResultsPage(1);
          //$scope.data = apiModifyTable($scope.data , args.data.index, args.data);

          ngDialog.close();

  });


 

});



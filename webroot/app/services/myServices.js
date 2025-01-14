app.factory('dataFactory', function($http) {
  var myService = {
    httpRequest: function(url,method,params,dataPost,upload) {
      var passParameters = {};
      passParameters.url = url;
      if (typeof method == 'undefined'){
        passParameters.method = 'GET';
      }else{
        passParameters.method = method;
      }
      if (typeof params != 'undefined'){
        passParameters.params = params;
        passParameters.params = params;
      }
      if (typeof dataPost != 'undefined'){
        passParameters.data = dataPost;
      }
      if (typeof upload != 'undefined'){
        passParameters.upload = upload;
      }
      var promise = $http(passParameters).then(function (response) {
        if(typeof response.data == 'string' && response.data != 1){
          //console.log(response);
          if(response.data.substr('loginMark')){
            location.reload();
            return;
          }
          
          $.gritter.add({
            title: 'Aplicação',
            text: response.data
          });
          return false;
        }
        
        if(response.data.jsMessage){
          $.gritter.add({
            title: response.data.jsTitle,
            text: response.data.jsMessage
          });
        }
        return response.data;
      },function(){
        
        $.gritter.add({
          title: 'Aplicação',
          text: 'Ocorreu um erro ao processar a solicitação'
        });
      });
      return promise;
    }
  };
  return myService;
});

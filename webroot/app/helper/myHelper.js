function apiModifyTable(originalData,id,response){
  angular.forEach(originalData, function (item,key) {
    if(item.id_parcela_pessoa == id){
      originalData[key] = response;
      console.log(originalData[key]);
    }else{
      
    }
  });
  return originalData;
}


function apiModifyTable_saidas(originalData,id,response){
  angular.forEach(originalData, function (item,key) {
    if(item.id == id){
      originalData[key] = response;
      console.log(originalData[key]);
    }else{
      
    }
  });
  return originalData;
}


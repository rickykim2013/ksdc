var app = angular.module('menuApp', []);
app.controller('menuCtrl', function($scope, $http) {
  $scope._mode = 'LIST';
  $scope._error_msg = "";
  $scope.selObj = {c_id:0};
  $scope.pinObj = {val:""};

  $scope.goToPage = function (pageStr) {
    if (pageStr == "MAIN"){document.location = "../";}
    if (pageStr == "NEW"){$scope.selObj = {c_id:0};}
    

    $scope._mode = pageStr;
  };




  $scope._users = [
  { "c1": "대구탕",  "c2": "채민호","c3": "Sr. SW Engineer(R,Computational)","c4":"1111111", "c5":"dfdf@dfd.com"  }

  ];



  $scope.checkRec = function(rec) { 

    $scope._mode = 'CHECK';
    $scope._error_msg = "";
    $scope.selObj = rec;
    //$scope._mode = 'MOD';
  }

  $scope.selectRec = function() { 
    if ( $scope.selObj.c4 == $scope.pinObj.val ){
      $scope._mode = 'MOD';
      $scope.pinObj.val = "";
    }else{
      $scope._error_msg = 'Invalid!, please check your email!';

    }

   
    
  }
  $scope.addRec = function() { 
    //console.log(rec);
    //$scope.selObj = {c_id:0};
    $scope.selObj.mode_type = "ADD";

     $http({
        method : "POST",url: 'action/',data: $scope.selObj
    }).then(function mySuccess(response) {
        $scope.goRefresh();

    }, function myError(response) {
        
    });

    
  }  
  $scope.updateRec = function() { 
    //console.log(rec);
    //$scope.selObj = rec;
    $scope.selObj.mode_type = "MOD";

     $http({
        method : "POST",url: 'action/',data: $scope.selObj
    }).then(function mySuccess(response) {
        $scope.goRefresh();
    }, function myError(response) {
        
    });

    
  }


  $scope.goRefresh = function() { 
    $scope.getList();
    $scope.goToPage ("LIST");
  }
  $scope.getList = function() { 

    var dataObj = {mode_type:"LIST"};

    $http({
        method : "POST",url: 'action/',data: dataObj
    }).then(function mySuccess(response) {
        $scope._users = response.data.list;
    }, function myError(response) {
        
    });



  }


$scope.getList();








});

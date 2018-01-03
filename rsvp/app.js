var app = angular.module('menuApp', []);
app.controller('menuCtrl', function($scope, $http) {
      $scope._mode = 'LIST';
      $scope.goToPage = function (pageStr) {
        if (pageStr == "MAIN"){document.location = "../";}
        $scope._mode = pageStr;
      };




      $scope._users = [
      { "food": "대구탕",  "name": "채민호","title": "Sr. SW Engineer(R,Computational)","c_phone":"1111111", "c_email":"dfdf@dfd.com"  },
      { "food": "대구탕",  "name": "최호원","title": "Sr. Engineer(ANDROID)" ,"c_phone":"1111111", "c_email":"dfdf@dfd.com" },
      { "food": "알탕",  "name": "김영일","title": "Sr. Engineer(J2EE)" ,"c_phone":"214-531-0553", "c_email":"blueschool25@gmail.com" },
      { "food": "대구탕",  "name": "송현술","title": "Sr. Engineer(J2EE)" ,"c_phone":"1111111", "c_email":"dfdf@dfd.com" },
      { "food": "대구탕",  "name": "정남호","title": "Sr. Engineer(.NET)" ,"c_phone":"1111111", "c_email":"dfdf@dfd.com" },
      { "food": "대구탕",  "name": "김영태","title": "Mid. Engineer(.NET)" ,"c_phone":"1111111", "c_email":"dfdf@dfd.com" },
      { "food": "대구탕",  "name": "김기범","title": "Mid. Engineer(.NET)" ,"c_phone":"214-664-6222", "c_email":"kibum.kim@hotmail.com" },
      { "food": "대구탕",  "name": "이종상","title": "Mid. SW Engineer(AWS)" ,"c_phone":"214-664-6222", "c_email":"kibum.kim@hotmail.com" },
      { "food": "대구탕",  "name": "박재현","title": "Jr. SW Engineer(WEB)" ,"c_phone":"214-664-6222", "c_email":"kibum.kim@hotmail.com" },


      ];


});

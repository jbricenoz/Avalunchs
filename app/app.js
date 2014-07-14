//Define an angular module for our app
var app = angular.module('myApp', ['autocomplete', 'ui.bootstrap']);

app.controller('tasksController', function($scope, $http) {
  getTask(); // Load all available tasks 
  getMenu(); // Load all countries with capitals
  $scope.date = new Date();

  function getMenu(){  
    $http.get("ajax/getMenu.php").success(function(data){
      $scope.menu = data;
    });
  };
  function getTask(){  
    $http.post("ajax/getTask.php").success(function(data){
      $scope.tasks = data;
    });
  };
  $scope.addTask = function (task) {
    if ( $http.post("ajax/addTask.php?task="+task) === null) {

    }else{
      $http.post("ajax/addTask.php?task="+task).success(function(data){
        getTask();
        $scope.taskInput = "";
      });
    }
  };
  $scope.deleteTask = function (task) {
    if(confirm("Are you sure to delete this line?")){
      $http.post("ajax/deleteTask.php?taskID="+task).success(function(data){
        getTask();
      });
    }
  };

  $scope.toggleStatus = function(item, status, task) {
    if(status=='2'){status='0';}else{status='2';}
    $http.post("ajax/updateTask.php?taskID="+item+"&status="+status).success(function(data){
      getTask();
    });
  };

});


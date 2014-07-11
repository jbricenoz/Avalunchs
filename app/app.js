//Define an angular module for our app
var app = angular.module('myApp', ['autocomplete']);

app.controller('tasksController', function($scope, $http) {
  getTask(); // Load all available tasks 

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

// the service that retrieves some movie title from an url
app.factory('MovieRetriever', function($http, $q, $timeout){
  var MovieRetriever = new Object();

  MovieRetriever.getmovies = function(i) {
    var moviedata = $q.defer();
    var movies;

    var someMovies = [
    "Pescado empanizado.",
    "Pescado al ajillo.",
    "Filete de pollo a la plancha",
    "Pollo sudado.",
    "Bistec de res encebollado.",
    "Carne desmechada (Mexicana).",
    "Carne en trocitos.",
    "Costilla de cerdo frita."
      ];

    var moreMovies = [
    "Pescado empanizado.",
    "Pescado al ajillo.",
    "Filete de pollo a la plancha",
    "Pollo sudado.",
    "Bistec de res encebollado.",
    "Carne desmechada (Mexicana).",
    "Carne en trocitos.",
    "Costilla de cerdo frita."]

    if(i && i.indexOf('T')!=-1)
      movies=moreMovies;
    else
      movies=moreMovies;

    $timeout(function(){
      moviedata.resolve(movies);
    },1000);

    return moviedata.promise
  }

  return MovieRetriever;
});

app.controller('MyCtrl', function($scope, MovieRetriever){

  $scope.movies = MovieRetriever.getmovies("...");
  $scope.movies.then(function(data){
    $scope.movies = data;
  });

  $scope.getmovies = function(){
    return $scope.movies;
  }

  $scope.doSomething = function(typedthings){
    console.log("Do something like reload data with this: " + typedthings );
    $scope.newmovies = MovieRetriever.getmovies(typedthings);
    $scope.newmovies.then(function(data){
      $scope.movies = data;
    });
  }

  $scope.doSomethingElse = function(suggestion){
    console.log("Suggestion selected: " + suggestion );
  }

});

<?php $timeStr = time() + (7 * 24 * 60 * 60) ;
$jsTimeStamp = '?version=v-'.$timeStr;
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../../../favicon.ico">
<title>Info   </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="css/style.css<?php echo $jsTimeStamp ?>" rel="stylesheet">
</head>

<body ng-app="menuApp"  ng-controller="menuCtrl">

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">KSDC@DFW</a>
  </nav>
</header>


  <main role="main">
    <br><br><br>

    <!-- Main jumbotron for a primary marketing message or call to action -->







<div class="container">

<div ng-if="_mode == 'LIST' "class="table-responsive">

  <div class="jumbotron">
  <div class="container">

  <ul>
  <li>7:00pm, 1/18/2018</li>
  <li>장소: 수라식당 2층</li>
  </ul>


  <p>

  <button type="button" class="btn btn-primary" ng-click="goToPage('NEW')">+ Click RSVP</button>
  <button type="button" class="btn btn-success" ng-click="goToPage('MAIN')">Back To Main</button>

  </p>


  </div>
  </div>


  <table class="table table-striped">
  <thead>
  <tr>
  <th>#1</th>
  <th>Name</th>
  <th>Menu</th>
  </thead>
  <tbody>
  <tr ng-repeat="x in _users " >
  <td>{{$index+1}}</td>
  <td>{{x.name}} </td>
  <td>{{x.food}} </td>
  </tr>
  </tbody>
  </table>
</div>





<div ng-if="_mode == 'NEW' "class="table-responsive">

기본정보와 메뉴를 선택해주신후 저장!(1/8 Open)
  <p>
<button type="button" class="btn btn-primary" ng-click="goToPage('NEW')">+ SAVE</button>
  <button type="button" class="btn btn-success" ng-click="goToPage('LIST')">CANCEL</button>

  </p>

  <form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Name</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" required placeholder="홍길동/Jame Hong">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Phone</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="111-111-1111">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="example@google.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Work</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Project">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Level</label>
      <select  class="form-control" id="exampleFormControlSelect2">
        <option>Sr.Developer</option>
        <option>Mid.Developer</option>
        <option>Jr.Developer</option>
        <option>Student</option>
      </select>
    </div>


    <div class="form-group">


      <label for="exampleFormControlSelect2">Select Menu </label>
        <select class="form-control" id="exampleFormControlSelect2">
        <option>불고기</option>
        <option>돌솥비빔밥</option>
        <option>해물순두부</option>
        <option>육계장</option>
        <option>알탕</option>
        <option>대구매운탕</option>

      </select>
    </div>
  </form>


</div>



</div>
</main>



<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="app.js<?php echo $jsTimeStamp ?>"></script>


<!--


<script src="js/directives/MainItem.js"></script-->

  </body>
</html>

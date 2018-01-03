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
<title>Korean Developer Community@DFW   </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


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



<!-- Modal -->
<div ng-if="_mode == 'CHECK' " >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Validation</h5>


      </div>
      <div class="modal-body">
        <p>Please type your email address that you used for RSVP</p>
        <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input ng-model="pinObj.val"  class="form-control" placeholder="james@gmail.com">
        </div>
        </div>
        <p ng-if="$scope._error_msg  != '' " ><font color=red>{{_error_msg}}</font></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" ng-click="goToPage('LIST')">CANCEL</button>
        <button type="button" class="btn btn-primary" ng-click="selectRec()">CONFIRM </button>
      </div>
    </div>
  </div>
</div>




<div ng-if="_mode == 'LIST' "class="table-responsive">

  <div>
    <p>1/18 일 모임 RSVP 부탁드립니다.</p>
  
  <ul>
  <li>7:00pm, 1/18/2018</li>
  <li>장소: 수라식당 2층</li>
  </ul>
  <p>
  <button type="button" class="btn btn-primary" ng-click="goToPage('NEW')">+ Add New Member</button>
  <button type="button" class="btn btn-success" ng-click="goToPage('MAIN')">Back To Main</button>
  </p>

  </div>


  <table class="table table-striped">
  <thead>
  <tr>
  <th>#1</th>
  <th width=50%>Person</th>
  <th width=30%>Attend(1/18)</th>
  <th>Modify</th>
  </thead>
  <tbody>
  <tr ng-repeat="x in _users " >
  <td>{{$index+1}}</td>

  <td>{{x.c1}}<br>{{x.c2}}<br>{{x.c6}} </td>
  <td>{{x.c9}}<br>{{x.c7}}</td>
  



  <td> <button type="button" class="btn btn-primary" ng-click="checkRec(x)">Modify</button> </td>
  </tr>
  </tbody>
  </table>





</div>





<div ng-if="_mode == 'NEW' || _mode == 'MOD'  " class="table-responsive">

기본정보와 메뉴를 선택해주신후 저장!(1/8 Open)
  <p>
  <button ng-if=" _mode == 'MOD'  "  type="button" class="btn btn-primary" ng-click="updateRec(x)">Save(Update)</button>
  <button ng-if=" _mode == 'NEW'  "  type="button" class="btn btn-primary" ng-click="addRec()">+ Save(New)</button>
  <button type="button" class="btn btn-success" ng-click="goToPage('LIST')">CANCEL</button>

  </p>

  <form>


  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Attend(1/18)</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c9"  class="form-control" id="exampleFormControlSelect2">
        <option value="YES">Yes, I will go.</option>
        <option value="NO">No I am not be able to attend.</option>
        <option value="TBD">Not sure yet</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name(KOR)</label>
    <div class="col-sm-10">
      <input type="text" ng-model="selObj.c1"  class="form-control" placeholder="홍길동">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name(ENG)</label>
    <div class="col-sm-10">
      <input type="text" ng-model="selObj.c2"  class="form-control" placeholder="Jame Hong">
    </div>
  </div>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="text" ng-model="selObj.c3"  class="form-control" placeholder="972-111-1111">
    </div>
  </div>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" ng-model="selObj.c4"  class="form-control" placeholder="example@google.com">
    </div>
  </div>

   <div class="form-group row">
    <label class="col-sm-2 col-form-label">Work</label>
    <div class="col-sm-10">
      <input type="text" ng-model="selObj.c5"  class="form-control" placeholder="Company or Project">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Level</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c6"  class="form-control" id="exampleFormControlSelect2">
        <option value="SR">Sr.Developer</option>
        <option value="MD">Mid.Developer</option>
        <option value="JR">Jr.Developer</option>
        <option value="ST">Student</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Menu</label>
    <div class="col-sm-10">
      <select  ng-model="selObj.c7"  class="form-control" id="exampleFormControlSelect2">
        <option >불고기</option>
        <option >돌솥비빔밥</option>
        <option >해물순두부</option>
        <option >육계장</option>
        <option >알탕</option>
        <option >대구매운탕</option>
      </select>
    </div>
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

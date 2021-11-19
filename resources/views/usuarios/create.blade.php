<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Step by step form</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href="{{asset('css/style_reguser.css')}}" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<div ng-app="coolform" class="wrapper">
  
  <div cool-form>
    <div class="q-title">Join the club!</div>
    <div ng-repeat="q in questions" class="question">
      <label>
        <span class="q-text">
          {{q.question}}
          <span class="q-answer">
            {{q.answer}}
          </span>
        </span>
        <input type="text" id="q{{$index}}" ng-model="q.answer">
        <span class="q-back" ng-click="open($index)"><</span>
      </label>
      <span class="q-next" ng-click="open($index+1)">></span>  
    </div>
    <div class="q-after">
      <hr>
      <div class="q-confirm-text">Is the above information correct?</div>
      <div class="q-confirm-button">Absolutely</div>
    </div>
  </div>
  <center ng-show="activequestion > -1 && activequestion < questions.length">{{activequestion+1}} / {{questions.length}}</center>
  
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>
  <script src="{{asset('js/script_reguser.js')}}"></script>

</body>
</html>

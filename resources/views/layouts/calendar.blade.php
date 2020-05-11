@extends('welcome');
@section('content');
<div class="row">
     <div class = "col-sm-3 user-ui" id = "user-ui">
     </div>
     <div class = "row col-sm-9 calendar" id = "calendar">
         <date :date="date"></date>
         <buttonleft @decreasemonth = "decreaseMonth()"></buttonleft>
         <buttonright @increasemonth = "increaseMonth()"></buttonright>
         <calendar :date="date"></calendar>
         
     </div>
     </div>
@endsection
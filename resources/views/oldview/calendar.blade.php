@extends('welcome');
@section('content');
<div class="row">
     <div class = "col-sm-3 user-ui" id = "user-ui">

     </div>
     <div class = "row col-sm-9 calendar" id = "calendar">
         <date></date>
         <div class = "month" id = "month">
             <div class = "row" id = "week_info">
                 <div class = "day day_info" id = "monday">
                     Monday
                 </div>
                 <div class = "day day_info" id = "tuesday"> 
                     Tuesday
                 </div>
                 <div class = "day day_info" id = "wednesday">
                     Wednesday
                 </div>
                 <div class = "day day_info" id = "thursday"> 
                     Thursday
                 </div>
                 <div class = "day day_info" id = "friday">
                     Friday
                 </div>
                 <div class = "day day_info" id = "saturday">
                     Saturday
                 </div>
                 <div class = "day day_info" id = "sunday">
                     Sunday
                 </div>
             </div>
             <div class = "row week" id = "week1">                           
                 <div class = "day" id = "w1_day1">
                     <div class = "day_num" id = "day_num_1">
                         12
                     </div>
                     <div class="create_task">
                         <img class = "create_task_icon" src="{!!asset('../public/icons/plus.svg')!!}">                                  
                     </div>
                     <div class = "tasks" id = "tasks">
                         <div class = "task" id  = "task1">
                             1. написать текст
                         </div>
                         <div  class = "task" id  = "task2">
                             2. написать текст  и очень длинную фразу
                         </div>
                         <div class = "task" id  = "task3">
                             3. написать текст
                         </div>
                     </div>
                 </div>
                 <div class = "day" id = "w1_day2">
                 </div>
                 <div class = "day" id = "w1_day3">
                 </div>
                 <div class = "day" id = "w1_day4"> 
                 </div>
                 <div class = "day" id = "w1_day5">
                 </div>
                 <div class = "day" id = "w1_day6">
                 </div>
                 <div class = "day" id = "w1_day7">  
                 </div>
             </div>
             <div class = "row week" id = "week2">
                 <div class = "day" id = "w2_day1">
                 </div>
                 <div class = "day" id = "w2_day2">
                 </div>
                 <div class = "day" id = "w2_day3">
                 </div>
                 <div class = "day" id = "w2_day4"> 
                 </div>
                 <div class = "day" id = "w2_day5">
                 </div>
                 <div class = "day" id = "w2_day6">
                 </div>
                 <div class = "day" id = "w2_day7">  
                 </div>
             </div>
             <div class = "row week" id = "week3">
                 <div class = "day" id = "w3_day1">
                 </div>
                 <div class = "day" id = "w3_day2">
                 </div>
                 <div class = "day" id = "w3_day3">
                 </div>
                 <div class = "day" id = "w3_day4"> 
                 </div>
                 <div class = "day" id = "w3_day5">
                 </div>
                 <div class = "day" id = "w3_day6">
                 </div>
                 <div class = "day" id = "w3_day7">  
                 </div>
             </div>
             <div class = "row week" id = "week3">
                 <div class = "day" id = "w4_day1">
                 </div>
                 <div class = "day" id = "w4_day2">
                 </div>
                 <div class = "day" id = "w4_day3">
                 </div>
                 <div class = "day" id = "w4_day4"> 
                 </div>
                 <div class = "day" id = "w4_day5">
                 </div>
                 <div class = "day" id = "w4_day6">
                 </div>
                 <div class = "day" id = "w4_day7">  
                 </div>
             </div>
             </div>
         </div>
     </div>
@endsection
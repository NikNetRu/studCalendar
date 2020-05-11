<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Calendar;
use Illuminate\Support\Facades\DB;
use App\Task;

class CalendarController extends Controller
{   
    
    public  function makeNewCalendar () {
        $name = Calendar::makeNewName();
        Calendar::create(['name' => $name]);
        
        return redirect('calendar/'.$name);
}

    public function getCalendarByName ($name) {
        $calendar = Calendar::where(['name' => $name])->first();
        if ($calendar) {
        return view('layouts.calendar');//->with(['tasks' => $tasks]);
        }
        else return 'такой календарь не найден';
    }
    
    public function getTasksByName () {
        $url = URL::current();
        $pattern = '/\//';
        $name = preg_split($pattern, $url);
        $calendar = $tasks = Calendar::where(['name' => $name[8]])->first();
        $tasks = Task::where(['calendar_id' => $calendar->id])->get();
        if ($calendar) {
        return json_encode($tasks);
        }
        else return 'такой календарь не найден';
    }

}

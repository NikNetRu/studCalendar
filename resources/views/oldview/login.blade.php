@extends('welcome')
@section('content')
<div class = "row login-ui" id = "login-ui">
    <form method="POST" action="{{ route('MakeNewCalendar') }}">
        {{ csrf_field() }}
        <label class = "col-sm-offset-4 col-sm-4 login-ui-label" for="calendarName">Я хочу создать новый календарь</label>
        <input class = "col-sm-offset-5 col-sm-2 col-sm-offset-3 login-ui-input" id = "calendarName" name = "name" placeholder="индикатор">
        <input class = "col-sm-offset-5 col-sm-2 col-sm-offset-3 login-ui-input" id = "calendarPass" name = "password" placeholder="пароль(опционально)">
        <button class = "col-sm-offset-5 col-sm-2 col-sm-offset-3 login-ui-button">Создать</button>
    </form>
    <form method="POST" action="">
        {{ csrf_field() }}
        <label class = "col-sm-offset-4 col-sm-4 login-ui-label" for="calendarName">У меня уже есть</label>
        <input class = "col-sm-offset-5 col-sm-2 col-sm-offset-3 login-ui-input" id = "calendarName" name = "name" placeholder="индикатор">
        <input class = "col-sm-offset-5 col-sm-2 col-sm-offset-3 login-ui-input" id = "calendarPass" name = "password" placeholder="пароль(опционально)">
        <button class = "col-sm-offset-5 col-sm-2 col-sm-offset-3 login-ui-button">Создать</button>
    </form>
</div>
@endsection
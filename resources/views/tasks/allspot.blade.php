@extends('layouts.app')

@section('title', 'tâches')

@section('content')
    <div id="header">
        <div class="content-icon">
            <span id="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="40"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>
            </span>
            <span class="title">@yield('title')</span>
        </div>
        <span id="end">
            <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="40"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </span>
    </div>
    @foreach ($spots as $spot)
        <section class="card1">
            <input type="checkbox" name="checkbox">
            <span>{{ $spot->title }}</span>
            <input type="checkbox" name="checkbox2" id="boolean">
        </section>
    @endforeach
    
@endsection
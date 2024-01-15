@extends('layouts.app')

@section('title', 'Tâches')

@section('content')
    <!-- Header -->
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
    <!-- Affiche les tâches contenu dans la Base de données -->
    @foreach ($spots as $spot)
        <section class="card1">
            <form action="" method="post">
                @csrf
                <input type="checkbox" name="finish">
            </form>
            <span>{{ $spot->title }}</span>
        </section>
    @endforeach

    <!-- Barre permettant d'ajouter des tâches dans la Base de données -->
    <form action="" method="post" id="form">
        @csrf
        <button id="button1">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
        </button>
        <input type="text" name="edit" id="edit" placeholder="Ajouter une tâche">
    </form>
    
@endsection
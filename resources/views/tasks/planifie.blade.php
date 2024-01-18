@extends('layouts.app')

@section('title', 'planifier')

@section('content')
    <!-- Header -->
    <div id="header">
        <div class="content-icon">

            <span id="icon">
                <i class="bi bi-calendar calendar"></i>
            </span>
            <span class="title">@yield('title')</span>
        </div>

        <span id="end">
            <i class="bi bi-list bar"></i>
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

            @include('tasks.partials.supp')
        </section>
    @endforeach

    <!-- Barre permettant d'ajouter des tâches dans la Base de données -->
    <form action="" method="post" id="form">
        @csrf
        <button id="button1">
            <i class="bi bi-plus-lg plus"></i>
        </button>
        <input type="text" name="edit" id="edit" placeholder="Ajouter une tâche">
        <button id="button2">
            <i class="bi bi-alarm alarm"></i>
        </button>
    </form>
@endsection
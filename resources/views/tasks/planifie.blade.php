@extends('layouts.app')

@section('title', 'planifier')

@section('content')
    <!-- Header -->
    <div id="header">
        <div class="content-icon">
            <span id="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="38" viewBox="0 -960 960 960" width="38"><path d="M360-300q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z"/></svg>
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

            @include('tasks.partials.supp')
        </section>
    @endforeach

    <!-- Barre permettant d'ajouter des tâches dans la Base de données -->
    <form action="" method="post" id="form">
        @csrf
        <button id="button1">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
        </button>
        <input type="text" name="edit" id="edit" placeholder="Ajouter une tâche">
        <button id="button2">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M440-280h80v-120h120v-80H520v-120h-80v120H320v80h120v120Zm40 200q-75 0-140.5-28.5t-114-77q-48.5-48.5-77-114T120-440q0-75 28.5-140.5t77-114q48.5-48.5 114-77T480-800q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-440q0 75-28.5 140.5t-77 114q-48.5 48.5-114 77T480-80Zm0-360ZM224-866l56 56-170 170-56-56 170-170Zm512 0 170 170-56 56-170-170 56-56ZM480-160q117 0 198.5-81.5T760-440q0-117-81.5-198.5T480-720q-117 0-198.5 81.5T200-440q0 117 81.5 198.5T480-160Z"/></svg>
        </button>
    </form>
@endsection
@extends('layouts.app')

@section('title', 'journée')

@section('content')
    <!-- Header -->
    <div id="header">
        <div class="content-icon">
            <span id="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="35" viewBox="0 -960 960 960" width="35"><path d="M440-760v-160h80v160h-80Zm266 110-55-55 112-115 56 57-113 113Zm54 210v-80h160v80H760ZM440-40v-160h80v160h-80ZM254-652 140-763l57-56 113 113-56 54Zm508 512L651-255l54-54 114 110-57 59ZM40-440v-80h160v80H40Zm157 300-56-57 112-112 29 27 29 28-114 114Zm283-100q-100 0-170-70t-70-170q0-100 70-170t170-70q100 0 170 70t70 170q0 100-70 170t-170 70Zm0-80q66 0 113-47t47-113q0-66-47-113t-113-47q-66 0-113 47t-47 113q0 66 47 113t113 47Zm0-160Z"/></svg>
            </span>
            <span class="title">@yield('title')</span>
        </div>
        <span id="end">
            <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="40"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </span>
    </div>
    <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita placeat tenetur ea ullam. Voluptatum consequuntur dignissimos repellat eius voluptatem aut molestiae, distinctio officiis ad obcaecati illum molestias, ratione iste, minus commodi nesciunt ea necessitatibus delectus? Quisquam consequuntur eligendi molestiae odio accusamus blanditiis qui unde. Mollitia recusandae similique eligendi dolores velit?</h1>
@endsection
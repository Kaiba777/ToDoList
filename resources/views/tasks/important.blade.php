@extends('layouts.app')

@section('title', 'Important')

@section('content')
    <!-- Header -->
    <div id="header">
        <div class="content-icon">
            <span id="icon">
                <i class="bi bi-star star"></i>
            </span>
            <span class="title">@yield('title')</span>
        </div>
        <span id="end">
            <i class="bi bi-list bar"></i>
        </span>
    </div>
@endsection
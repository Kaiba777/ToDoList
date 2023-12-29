<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap4.6/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>
<body>
    <div class="container-global">
        <section class="content">
            @include('layouts.partials.nav')
        </section>
        <div class="main">
            @yield('content')
        </div>
    </div>
    
    
    <script src="{{ asset('bootstrap4.6/js/bootstrap.min.js') }}"></script>
</body>
</html>
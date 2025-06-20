<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>
        @yield('title', 'Gestion des Ventes')
    </title>
</head>
<body>
    
    @include('partials.header')

    <div class="body">
        <div class="container">
            @yield('content')
        </div>
    </div>
    @include('partials.footer')
    @yield('scripts')
</body>
</html>
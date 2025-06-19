<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('accueil.css')}}">
</head>
<body>

    @include('partials.header')

    <div class="body">
        <div class="container-wrapper">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')
    
    <script src="{{asset('accueil.js')}}"></script>
</body>
</html>

  

    

 

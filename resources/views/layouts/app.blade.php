<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href={{asset('favicon.ico')}}>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Prenotazione')</title>
</head>
<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" href="{{route('home.index')}}">Home</a>
          <a class="nav-link active" href="{{route('home.about')}}">About</a>
          
            @guest
            <a class="nav-link active" href="{{route('login')}}">Login</a>
            <a class="nav-link active" href="{{route('register')}}">Register</a>
            @else
              <form method="POST" id="logout" action='{{route('logout')}}'>
                <a class="nav-link active" role="button" onclick="document.getElementById('logout').submit()">Logout</a>
                @csrf
              </form>
            @endguest
            @if(Auth::user() && Auth::user()->getRole() == 'admin')
              <a class="nav-link active" href="{{route('admin.home.index')}}">Admin Panel</a>
            @endif
        </div>
      </div>
    </div>
  </nav>

  <header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
      <h2>@yield('subtitle', 'Benvenuto nella pagina per la prenotazione dei colloqui')</h2>
    </div>
  </header>
  <!-- header -->

  <div class="container my-4">
    @yield('content')
  </div>

  <!-- footer -->
  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>
        GITHUB - <a class="text-reset fw-bold text-decoration-none" target="_blank"
          href="https://github.com/GitForSchool1/PrenotazioneColloquiGPOI">
        </a>
      </small>
    </div>
  </div>
  <!-- footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>
</html>

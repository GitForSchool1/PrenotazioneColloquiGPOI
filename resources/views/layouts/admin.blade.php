<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <link href="{{asset('css/admin.css')}}" rel="stylesheet" />
  <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
  <div class="row g-0">
    <!-- sidebar -->
    <div class="p-3 col fixed text-white bg-dark">
      <a href=# class="text-white text-decoration-none">
        <span class="fs-4">Admin Panel</span>
      </a>
      <hr/>
      <ul class="nav flex-column">
        <li><a href={{route('admin.archivio.store')}} class="nav-link text-white">- Admin - Archivio</a></li>
        <li><a href="{{route('admin.report.show')}}" class="nav-link text-white">- Admin - Report</a></li>
        <li><a href="{{route('admin.gestore.users')}}" class="nav-link text-white">- Admin - View all users</a></li>
        
        <li>
          <a href={{route('home.index')}} class="mt-2 btn bg-primary text-white">Go back to the home page</a>
        </li>
      </ul>
    </div>
    <!-- sidebar -->
    <div class="col content-grey">
      <nav class="p-3 shadow text-end">
        <span class="profile-font">Admin</span>
        <img class="img-profile rounded-circle" src={{asset('storage/user.png')}}>
      </nav>

      <div class="g-0 m-5">
        @yield('content')
      </div>
    </div>
  </div>

  <!-- footer -->
  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>
        Copyright - <b>Kevin Tunaru, Fabio Puzzo, Paolo Mullace, Simone Pallara, Alessandro Manassero, Roberto Stanciu</b>
      </small>
    </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>

</html>

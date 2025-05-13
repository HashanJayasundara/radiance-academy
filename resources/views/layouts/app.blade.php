<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radiance Dance Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar {
      background-color: rgb(183, 180, 180);
    }

    .navbar-brand img {
      border-radius: 50%;
    }

    .carousel-item img {
      height: 400px;
      object-fit: cover;
    }

    footer {
      background-color: rgb(183, 180, 180);
      padding: 20px 0;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="40" height="40"> Radiance Dance Academy
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('events.index') }}">Events</a></li>
          @auth
            @if(auth()->user()->role === 'admin')
              <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            @elseif(auth()->user()->role === 'student')
              <li class="nav-item"><a class="nav-link" href="{{ route('student.dashboard') }}">Dashboard</a></li>
            @endif
          @else
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Dashboard</a></li>
          @endauth
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="classesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Classes</a>
            <ul class="dropdown-menu" aria-labelledby="classesDropdown">
              <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
              <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
            </ul>
          </li> -->
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('contact.form') }}">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="container mt-4">
    @yield('content')
  </div>

  <footer class="text-center mt-4">
    <div class="container">
      <p>&copy; {{ date('Y') }} Radiance Dance Academy. All Rights Reserved.</p>

    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
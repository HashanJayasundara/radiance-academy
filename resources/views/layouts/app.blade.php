<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radiance Dance Academy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>

    .container{
      background-color: rgb(255, 255, 255);
    }
    .navbar-brand img {
      border-radius: 50%;
    }

    .carousel-item img {
      height: 400px;
      object-fit: cover;
    }

    footer {
      background-color: rgb(255, 255, 255);
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="classesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Classes</a>
            <ul class="dropdown-menu" aria-labelledby="classesDropdown">
              <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
              <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('contact.form') }}">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="Slide 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt-4">
    @yield('content')
  </div>

  <footer class="text-center mt-4">
    <div class="container">
      <p>&copy; {{ date('Y') }} Radiance Dance Creation Academy. All rights reserved.</p>

    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
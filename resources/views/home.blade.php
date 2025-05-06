@extends('layouts.app')

@section('content')
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
<div class="container text-center mt-5">
    <h1 class="display-4">Welcome to Radiance Dance Creation and Academy!</h1>
    <p class="lead">Your journey of dance starts here...</p>
    <hr class="my-4">
    <div class="row mt-5">
        <div class="col-md-4">
            <h3>Our Mission</h3>
            <p>To inspire and nurture the love of dance in every individual, fostering creativity and confidence.</p>
        </div>
        <div class="col-md-4">
            <h3>Classes We Offer</h3>
            <p>Ballet, Hip-Hop, Contemporary, Jazz, and more! Suitable for all age groups and skill levels.</p>
        </div>
        <div class="col-md-4">
            <h3>Join Us Today</h3>
            <p>Sign up for a free trial class and experience the joy of dance with us!</p>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer >
    <p>&copy; {{ date('Y') }} Radiance Dance Creation and Academy. All Rights Reserved.</p>
    
</footer>
@endsection

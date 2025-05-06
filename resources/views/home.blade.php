@extends('layouts.app')

@section('content')
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

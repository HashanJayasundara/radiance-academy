@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h2 class="text-primary">Get in Touch</h2>
        <p class="text-muted">We'd love to hear from you! Please fill out the form below.</p>
        <form action="{{ route('contact.submit') }}" method="POST" class="shadow p-4 rounded bg-light">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea id="comment" name="comment" class="form-control" rows="4" placeholder="Write your message here..." required></textarea>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rate Us</label>
                <select id="rating" name="rating" class="form-select" required>
                    <option value="5">★★★★★ Excellent</option>
                    <option value="4">★★★★☆ Good</option>
                    <option value="3">★★★☆☆ Average</option>
                    <option value="2">★★☆☆☆ Poor</option>
                    <option value="1">★☆☆☆☆ Very Poor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <div class="col-md-6">
        <h4 class="text-primary">Contact Information</h4>
        <p class="text-muted">Feel free to reach out to us through the following channels:</p>
        <ul class="list-unstyled">
            <li><strong>Phone:</strong> +123 456 789</li>
            <li><strong>Email:</strong> <a href="mailto:info@radiancedance.com" class="text-decoration-none">info@radiancedance.com</a></li>
            <li><strong>Follow us:</strong></li>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-decoration-none">WhatsApp</a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none">Facebook</a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none">YouTube</a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none">Instagram</a></li>
                <li class="list-inline-item"><a href="#" class="text-decoration-none">TikTok</a></li>
            </ul>
        </ul>
    </div>
</div>
@endsection

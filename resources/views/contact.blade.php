@extends('layouts.app')

@section('title', 'Contact Us - E-Portal Marketing Solutions')

@section('content')
<div class="container">
    <!-- Contact Hero Section -->
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Contact Us</h1>
            <p class="lead">Get in touch with our team for a free consultation</p>
        </div>
    </div>

    <div class="row">
        <!-- Contact Form -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Send us a Message</h2>
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Contact Information</h2>
                    <div class="mb-4">
                        <h4>Office Location</h4>
                        <p>123 Marketing Street<br>
                        Digital City, DC 12345<br>
                        United States</p>
                    </div>
                    <div class="mb-4">
                        <h4>Contact Details</h4>
                        <p><i class="fas fa-phone me-2"></i> +1 (234) 567-8900<br>
                        <i class="fas fa-envelope me-2"></i> info@eportal.com</p>
                    </div>
                    <div class="mb-4">
                        <h4>Business Hours</h4>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                        Saturday: 10:00 AM - 2:00 PM<br>
                        Sunday: Closed</p>
                    </div>
                    <div>
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="row py-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.2155710122!2d-73.98784492416467!3d40.75798597138948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1710500000000!5m2!1sen!2sus"
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endpush 
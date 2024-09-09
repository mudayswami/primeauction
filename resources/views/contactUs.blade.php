@extends('auction.layout.masterLayout')

@push('meta')
@endpush

@push('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .contact-section {
            padding: 60px 0;
        }

        .contact-section h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
        }

        .submit-btn {
            background-color: #5b4caf;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: #493aa8;
        }

        .form-label {
            font-weight: 500;
            color: #333;
        }

        .info-text {
            font-size: 14px;
            color: #666;
        }

        .contact-info {
            padding-top: 20px;
            font-size: 16px;
            color: #333;
        }

        .contact-info i {
            margin-right: 10px;
            color: #5b4caf;
        }

        .map-embed {
            width: 100%;
            height: 300px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .address-info {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

    </style>
@endpush

@push('content')
<section class="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center mb-4">
                        <h2>Contact Us</h2>
                        <p class="info-text">We’d love to hear from you! Fill out the form below and we will get back to you as soon as possible.</p>
                    </div>
                    <div class="contact-form">
                        <form action="{{url('submit-contact')}}" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="submit-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="row justify-content-center contact-info text-center mt-5">
                <div class="col-md-4 address-info">
                    <p><i class="bi bi-geo-alt"></i> 123 Street, City, Country</p>
                </div>
                <div class="col-md-4 address-info">
                    <p><i class="bi bi-envelope"></i> info@primeauction.co.uk</p>
                </div>
                <div class="col-md-4 address-info">
                    <p><i class="bi bi-telephone"></i> +123 456 7890</p>
                </div>
            </div>

            <!-- Map Embed -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <iframe class="map-embed" src="https://maps.google.com/maps?q=London&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
            </div>
        </div>
    </section>

@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">

@endpush
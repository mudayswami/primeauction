@extends('auction.layout.masterLayout')

@push('meta')
    <title>Prime Auction</title>
    <?xml version="1.0" encoding="utf-8"?>
@endpush

@push('styles')
<style>
      :root {
            --bluec: rgb(16 35 67);
            --redc: #ff013c;
        }

        /* Custom styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
        }

        .hero-section {
            background-color: var(--bluec);
            color: white;
            padding: 60px 0;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }

        .info-section {
            background-color: white;
            padding: 50px 0;
        }

        .info-section h2 {
            color: var(--bluec);
            font-weight: bold;
            margin-bottom: 30px;
        }

        .info-card {
            border: none;
            background-color: white;
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: scale(1.05);
        }

        .info-card .icon {
            font-size: 3rem;
            color: var(--redc);
            margin-bottom: 20px;
        }

        .info-card h5 {
            color: var(--bluec);
            font-weight: bold;
        }

        .cta-section {
            background-color: var(--redc);
            color: white;
            padding: 50px 0;
        }

        .cta-section h3 {
            font-size: 2rem;
            font-weight: bold;
        }

        .cta-section a {
            color: white;
            text-decoration: underline;
        }

        footer {
            background-color: var(--bluec);
            color: white;
            padding: 20px 0;
        }
</style>
@endpush

@push('content')

@endpush

@push('scripts')
<section class="hero-section text-center">
        <div class="container">
            <h1>Retail Partnership</h1>
            <p>Have surplus or returned stock? Don’t let it go to waste! Sell it through our trusted circular economy marketplace.</p>
            <a href="{{url('contact-us')}}" class="btn btn-light btn-lg">Contact Us Today</a>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container">
            <h2 class="text-center">Why Partner With Us?</h2>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-recycle"></i>
                            </div>
                            <h5 class="card-title">Reduce Waste</h5>
                            <p>Prevent perfectly good items from ending up in landfills.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <h5 class="card-title">Save Resources</h5>
                            <p>Help conserve resources by keeping products in use longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h5 class="card-title">Maximise Value</h5>
                            <p>Turn surplus or returned goods into revenue.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h5 class="card-title">Promote Sustainability</h5>
                            <p>Support a greener planet by participating in a sustainable business model.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section text-center">
        <div class="container">
            <h3>Together, We Can Make a Difference</h3>
            <p>List your surplus or returned items today and contribute to a more sustainable future!</p>
            <p>Contact us at <a href="mailto:info@primeauctions.co.uk" id="contact">info@primeauctions.co.uk</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2024 Prime Auctions | All Rights Reserved.</p>
        </div>
    </footer>
@endpush
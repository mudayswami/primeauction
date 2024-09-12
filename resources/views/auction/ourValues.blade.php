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
            <h1>Our Core Values and Commitments</h1>
            <p>Building trust, fostering resilience, and encouraging a sustainable community</p>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container">
            <h2 class="text-center">What Drives Us</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h5 class="card-title">Human-Centred Platform</h5>
                            <p>Our marketplace prioritises human interactions, ensuring a supportive and trustworthy environment for all participants.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <h5 class="card-title">Value-Driven Success</h5>
                            <p>Success for us means upholding our values, fostering accountability and shared growth within a resilient community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-arrow-repeat"></i>
                            </div>
                            <h5 class="card-title">Continuous Improvement</h5>
                            <p>We strive for excellence by setting high standards and embracing feedback for continual learning and growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <h5 class="card-title">Simplicity and Accessibility</h5>
                            <p>We leverage technology to streamline processes while keeping the focus on human connections and accessibility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-leaf"></i>
                            </div>
                            <h5 class="card-title">Environmental Responsibility</h5>
                            <p>We are committed to reducing environmental impact by supporting sustainable practices and policies, including carbon neutrality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card info-card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h5 class="card-title">Integrity and Trust</h5>
                            <p>We act with integrity, building long-term trust with our community through transparency and accountability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section text-center">
        <div class="container">
            <h3>Join Us on Our Mission</h3>
            <p>Together, we can build a supportive, sustainable, and value-driven community.</p>
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
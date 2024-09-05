@extends('auction.layout.masterLayout')

@push('meta')
@endpush

@push('styles')
    body{
    color:var(--bluec);
    <!-- background: #e7eff5; -->
    }
    p{
    padding: 2rem 0rem;
    }
    .seo-paragraph{
    opacity:0.8;
    font-weight:400;
    padding: 2rem 0rem;
    }
    .heading img{
    height: auto;
    width: 70%;
    margin:auto;
    aspect-ratio: 16 / 6;
    padding:2rem 0rem;
    }
    .heading{
    font-size:2rem;
    font-weight:600;
    }
    .cata-btn {
    padding: .6rem 2rem;
    background: var(--redc);
    text-decoration: none;
    color: white;
    font-weight: 600;
    border-radius: 4px;
    }

    .cata-btn:hover {
    background: white;
    color: var(--bluec) !important;
    border: solid 1px var(--redc);
    }

    .contact-form{
    max-width: 50rem;
    margin: auto;
    padding: 2rem;
    border: solid 0.5px;
    border-radius: 12px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
@endpush

@push('content')
    <main id="MainContent" class="" role="main" tabindex="-1">
        <section id="" class="container py-5">
            <h1 class="py-3 fs-3 fw-bold">
                SELL US
            </h1>
            <div class="page-width page-width--narrow section-template--20100476698960__main-padding text-center">

                <div class="">
                    <meta charset="utf-8">
                    <div style="" class="heading"><img class="" width="100%" alt="" src="{{url('assets/handshake.jpg')}}">
                    </div>
                    <h2 style="" class="heading py-5">Selling with Prime Auctions</h2>
                    <div style="" class="seo-paragraph fw-bold fs-4">
                        <span>At Prime Auctions, we specialise in helping sellers unlock the full value of their assets.
                            Whether you're an individual or a business, and no matter the industry, we offer tailored
                            solutions for every type of product. With multiple sales events each week, there's always an
                            opportunity to match your items with the right buyers.

                        </span>
                    </div>
                    <div style="" class="seo-paragraph fs-4"></div>
                    <p style="" class="seo-paragraph fs-4 fw-bold ">
                        <span>
                            <span style="text-decoration: underline;" class="py-3 text-center"><strong>Why choose
                                    us?</strong></span>
                            <br><br>Our extensive experience across various asset classes allows
                            us to provide accurate and insightful valuations for anything you'd like to sell. To explore how
                            we can assist you in maximizing your returns, simply fill out the form below or contact us
                            directly. Let's discuss how Prime Auctions can make selling easy and profitable for you.In
                            addition to hosting sales on behalf of our sellers, we buy liquidation, surplus, and clearance
                            stock. Our goal is to help you convert excess inventory into cash efficiently and
                            seamlessly.</span>
                    </p>

                    <div style="" class="seo-paragraph fs-4">
                        <span>We cater to a wide range of products across various industries, providing flexible solutions
                            tailored to your specific needs.</span>
                    </div>
                    <p style="" class="seo-paragraph fs-4"><span><span style="text-decoration: underline;"
                                class="py-4"><strong>Get Assistment</strong></span><br><br></span>
                        <span class="fw-bold">To get started, simply contact us with
                            details about your stock. Our team is ready to assist you every step of the way.
                        </span>
                    </p>
                    <div style="" class="seo-paragraph fs-5"><span></span></div>
                </div>
            </div>

            <div class="text-center" width="">
            <h1 class="py-3 fs-3 fw-bold">
                Contact Us
            </h1>
                <form class="contact-form" >
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    placeholder="Jonathon Hawkins">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email address</label>
                                <input type="email" class="form-control" id="email" required
                                    placeholder="info@primeauctions.co.uk">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="message" class="form-label fw-bold">Message</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-2">
                            <button class="cata-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endpush

@push('scripts')
@endpush
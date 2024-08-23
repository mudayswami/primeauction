@extends('auction.layout.masterLayout')

@push('meta')
    <title>Prime Auction</title>
    <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">
@endpush

@push('styles')
    .herobanner{
    background-image:
    url('https://cdn.prod.website-files.com/61dc384cdd32214e08c06a78/620e746be78b0cba75bd69dc_Retail-returns-Hero-Image.jpg');
    background-size:cover;
    padding-bottom:100px;
    }
    .hero-heading{
    color:#fff;
    text-align:center;
    justify-content:center;
    align-self:auto;
    align-items:center;
    margin:auto auto 0 auto;
    padding:100px 0 20px 0;
    font-size:90px;
    display:flex;
    }
    .hero-container{
    display:flex;
    padding-left:0;
    padding-right:0;
    flex-direction:column;
    }
    .cata-btn {
    padding: .6rem 2rem;
    background: var(--redc);
    text-decoration: none;
    color: white;
    font-weight: 600;
    border-radius: 3rem;;
    text-align:center;
    margin:1rem 0;

    }
    .heading{
    color: #102343;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 0;
    padding: 30px;
    line-height: 40px;
    }
    .seo-para{
    color: #102343;
    text-align: center;
    font-family: Galatea, sans-serif;
    font-size: 16px;
    line-height: 30px;
    }
    .seo-section{
    margin:0 auto;
    padding-top:10px;
    padding-bottom:1px;
    max-width:940px;
    display:flex;
    justify-content:center;

    }
    .featured-img {
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: center;
    background-size: cover;
    background-image:
    url('assets/auction/retailreturn.jpg');
    }
    .card-sub-title{
    padding:0 2rem;
    }
    .featured-img-1 {
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: center;
    background-size: cover;
    background-image:
    url('assets/auction/art.jpeg');
    }

    .featured-img-2 {
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: center;
    background-size: cover;
    background-image:
    url('assets/auction/jewellery.jpg');
    }

    .feature-text {
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    display: flex;
    position: static;
    margin-bottom: 2rem;
    }

    .featured-title {
    color: #fff;
    text-align: center;
    justify-content: center;
    align-items: center;
    font-size: 25px;
    display: flex;
    font-weight: bold;
    margin-top: 20px;
    line-height: 36px;

    }

    .featured-button {
        background-color: var(--redc);
        text-decoration: none;
        color: white;
        padding: .5rem 2rem;
        border-radius: 30px;
        font-weight: bold;
    }
    .owl-prev, .owl-next{
    font-size:-webkit-xxx-large !important;
    }

    .selling-section{
    margin: 5rem auto 5rem auto;
    }
@endpush

@push('content')
    <div class="herobanner">
        <div class="container-fluid hero-container mx-auto">
            <h1 class="hero-heading h1 fw-bold">Online Retail Returns Auctions</h1>
        </div>
        <div class="container-fluid d-flex justify-content-center  mx-auto">
            <a href="auction" class="cata-btn">Explore Auctions</a>
        </div>
    </div>
    <div class="seo-section">
        <div class="container-fluid mx-auto d-blocks">
            <h2 class="heading">Big name brands and retailers</h2>
            <p class="seo-para">Our retail returns auctions offer huge money saving opportunities on products from big name
                brands and retailers. Buying from these auctions has never been more popular and you’ll be able to get your
                hands on items at a fraction of their original RRPs. Both from a financial point of view and for
                sustainability, it makes sense to shop here. Whether you’re looking for pallets of goods to resell, or
                you’re after individual pieces, you'll find them. There’s always a selection of these auctions live to bid
                on, often with no reserve price, so see what bargains you could be bidding for today!</p>
        </div>
    </div>

    <div class="py-5">
        <div class="container text-center mx-auto my-auto">
            <h2 class="fw-bold otc heading">Upcoming Auctions</h2>
            <div class="owl-carousel">
                <div class="card">
                    <img src="https://d42n4qo1elvf2.cloudfront.net/auctions/zzQJ5J1KIZAc3gK3d9J2aRPYwK65KxXRblpsbyS4.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://d42n4qo1elvf2.cloudfront.net/auctions/3Uan2n1JjN69sdqGhlVx9BHs8frvAXgWrI7dty13.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://d42n4qo1elvf2.cloudfront.net/auctions/zzQJ5J1KIZAc3gK3d9J2aRPYwK65KxXRblpsbyS4.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://d42n4qo1elvf2.cloudfront.net/auctions/3Uan2n1JjN69sdqGhlVx9BHs8frvAXgWrI7dty13.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and
                            make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="fw-bold otc">Shop By Categories</h2>
            <div class="row">
                <div class="col-12 col-md-4 my-2">
                    <div class="featured-img">
                        <div class="feature-text">
                            <h3 class="featured-title">Retail Returns</h3>
                            <a href="#" class="featured-button">Discover</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-2">
                    <div class="featured-img-1">
                        <div class="feature-text">
                            <h3 class="featured-title">Art</h3>
                            <a href="#" class="featured-button">Discover</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-2">
                    <div class="featured-img-2">
                        <div class="feature-text">
                            <h3 class="featured-title">Jewellery</h3>
                            <a href="#" class="featured-button">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container selling-section">
            <a href="/signup" class="start-selling">
                <img class="w-100"src="assets/sell-with-us.svg">
            </a>
            <div class="selling-info px-3 sub-para">
                <h2 class="heading">Interested in becoming a seller?</h2>
                <p class="seo-para ">Many of our return customers buy from our retail return auctions in order to sell on
                    their purchases for profit. If that’s something you’re thinking or you have other goods to list, find
                    out how quick and easy it really is.</p>
                <div class="container-fluid d-flex justify-content-center  mx-auto">
                    <a href="auction" class="cata-btn">Start Selling</a>
                </div>
            </div>
        </div>
        <div class="container selling-section">
        <h3 class="fw-bold otc">See More Online Auctions</h3>
        <div class="row">
            <div class="col-12 col-md-3 my-2">
                <div class="featured-img">
                    <div class="feature-text">
                        <h3 class="featured-title">Home Improvement</h3>
                        <a href="#" class="featured-button">Discover</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 my-2">
                <div class="featured-img-1">
                    <div class="feature-text">
                        <h3 class="featured-title">Bathroom</h3>
                        <a href="#" class="featured-button">Discover</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 my-2">
                <div class="featured-img-2">
                    <div class="feature-text">
                        <h3 class="featured-title">Fashion</h3>
                        <a href="#" class="featured-button">Discover</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 my-2">
                <div class="featured-img-1">
                    <div class="feature-text">
                        <h3 class="featured-title">High Street Goods</h3>
                        <a href="#" class="featured-button">Discover</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endpush

@push('scripts')
    <script src="js/jquery.min.js"></script>
    <script src="js/owlcarousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 3,
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: true
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: true
                    }
                }
            });
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
    </script>
@endpush
@extends('auction.layout.masterLayout')

@push('meta')
    <title>Prime Auction</title>
    <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">
@endpush


@push('styles')
    .intro {
    background-color: var(--bluec);
    /* margin-top: 167px; */
    }

    .sub-intro {
    width: 85%;
    height: 450px;

    }

    .main-heading {
    text-align: left;
    font-size: 80px;

    }

    .sub-para {
    margin: 0 auto;
    max-width: 940px;
    }

    .intro-para {
    max-width: 940px;
    margin-left: auto;
    margin-right: auto;
    }

    .exp-btn {
    background: linear-gradient(45deg, transparent 5%, #ff013c 5%);
    box-shadow: 6px 0 #9b2a3f;
    color: white;
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
    background-color: var(--bluec);
    text-decoration: none;
    color: white;
    padding: .5rem 2rem;
    border-radius: 30px;
    font-weight: bold;
    }

    .card {
    }

    .reviews-carousel{
    width:60%;
    display:flex;
    justify-content:center;
    margin:auto
    }

    .owl-prev, .owl-next{
    font-size:-webkit-xxx-large !important;
    }
    .owl-item{
        <!-- box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; -->
        <!-- margin:1rem 0; -->
    }
    .herobanner{
    background-image:
    url('assets/buynow.gif');
    background-size:cover;
    display:flex;
    flex-direction:column;
    justify-content:center;
    min-height:16rem;
    background-position:center;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    @media (max-width: 640px) {
    .main-heading {
    text-align: center;
    font-size: 40px;
    }

    .exp-btn {
    margin: 8px 0;
    }

    .reviews-carousel{
    display:flex;
    justify-content:center;
    margin:auto
    }
    .herobanner {
    background-image: url(assets/buynow.gif);
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background-position: center;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    }

@endpush


@push('content')
    <div class="intro">
        <div class="sub-intro d-flex flex-row align-items-center justify-content-start mx-auto">
            <div class="flex flex-column justify-content-md-center">
                <h1 class="main-heading text-white fw-bold ">Welcome to Prime Auctions</h1>
                <a class="btn ms-auto fw-light fs-5 py-3 red-100 exp-btn" href="/auctions">Explore Auctions</a>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="herobanner">
            <div class="container-fluid text-center  mx-auto">
                <a href="auction" class="btn ms-auto fs-5  mt-5 exp-btn">Explore</a>
            </div>
        </div>
    </div>
    <div class="contaier">
        <div class="sub-para">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h2 class=" h1 p-4 fw-bold mt-5">Welcome to Prime Auctions</h2>
                <p class="fs-5 text-center mb-2">Here you can browse and bid in our timed
                    auctions or Buy It Now Shop where you’ll discover a world of choice, for you, for your home or for your
                    business and at prices you’ll struggle to find elsewhere. In fact, many of our auctions have no reserve
                    and our simple, secure site, sustainability aims, and stellar service means you can shop with peace of
                    mind. If you have goods to sell, we offer 0% seller commission, so the profit is all yours. Come on in
                    and take a look around...

                </p>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container text-center mx-auto my-auto">
            <h5 class="fw-bold otc">Upcoming Auctions</h5>
            <div class="owl-carousel">
                <div class="card">
                    <img src="https://d42n4qo1elvf2.cloudfront.net/auctions/3Uan2n1JjN69sdqGhlVx9BHs8frvAXgWrI7dty13.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold fw-bold mx-0 text-start">Some quick example text to build on the card title and
                            make up the bulk of the card's content.</p>
                            <p class="card-text m-0 text-start">2024-09-01</p>
                            <p class="card-text m-0 text-start">Pows</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://d42n4qo1elvf2.cloudfront.net/auctions/3Uan2n1JjN69sdqGhlVx9BHs8frvAXgWrI7dty13.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold mx-0 text-start">Some quick example text to build on the card title and
                            make up the bulk of the card's content.</p>
                            <p class="card-text m-0 text-start">2024-09-01</p>
                            <p class="card-text m-0 text-start">Pows</p>

                    </div>
                </div>
                <div class="card">
                    <img src="https://d42n4qo1elvf2.cloudfront.net/auctions/zzQJ5J1KIZAc3gK3d9J2aRPYwK65KxXRblpsbyS4.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold mx-0 text-start">Some quick example text to build on the card title and
                            make up the bulk of the card's content.</p>
                            <p class="card-text m-0 text-start">2024-09-01</p>
                            <p class="card-text m-0 text-start">Nest</p>

                    </div>
                </div>
                <div class="card">
                    <img src="https://d42n4qo1elvf2.cloudfront.net/auctions/zzQJ5J1KIZAc3gK3d9J2aRPYwK65KxXRblpsbyS4.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold mx-0 text-start">Some quick example text to build on the card title and
                            make up the bulk of the card's content.</p>
                            <p class="card-text m-0 text-start">2024-09-01</p>
                            <p class="card-text m-0 text-start">Deling</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <h5 class="fw-bold otc">Our Top Categories</h5>
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
        <div class="container-fluid text-center my-5">
            <div class="owl-carousel reviews-carousel">
                <div class="" style="">
                    <div class="card-body">
                        <h5 class="card-sub-title d-flex justify-content-center"><img width="30%" 
                                src="assets/star_rating.png"></h5>
                        <h6 class="card-subtitle mb-2 text-muted">We've been working with Prime Auction for many years.
                            Helen is a real credit to their team, she's reliable and always willing to help in any way she
                            can.</h6>
                        <p class="card-text">Gemma Payne</p>
                    </div>
                </div>
                <div class="" style="">
                    <div class="card-body">
                        <h5 class="card-sub-title d-flex justify-content-center"><img width="30%"
                                src="assets/star_rating.png"></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Lovely staff very reliable and honest highly recommended
                        </h6>
                        <p class="card-text">Chris Dyer</p>
                    </div>
                </div>
                <div class="" style="">
                    <div class="card-body">
                        <h5 class="card-sub-title"><img width="30%" src="assets/star_rating.png"></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Poster sold as genuine was merly a fake. Since then no
                            answer to my claim by the vendor. Rapidly Prime Auction Auctions took the matter in hand,
                            banned the vendor and fully refunded me.</h6>
                        <p class="card-text">Emmanuel Lane</p>
                    </div>
                </div>
                <div class="" style="">
                    <div class="card-body">
                        <h5 class="card-sub-title d-flex justify-content-center"><img width="30%"
                                src="assets/star_rating.png"></h5>
                        <h6 class="card-subtitle mb-2 text-muted">We've been working with Prime Auction for many years.
                            Helen is a real credit to their team, she's reliable and always willing to help in any way she
                            can.</h6>
                        <p class="card-text">Gemma Payne</p>
                    </div>
                </div>
                <div class="" style="">
                    <div class="card-body">
                        <h5 class="card-sub-title d-flex justify-content-center"><img width="30%"
                                src="assets/star_rating.png"></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Lovely staff very reliable and honest highly recommended
                        </h6>
                        <p class="card-text">Chris Dyer</p>
                    </div>
                </div>
                <div class="" style="">
                    <div class="card-body">
                        <h5 class="card-sub-title"><img width="30%" src="assets/star_rating.png"></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Poster sold as genuine was merly a fake. Since then no
                            answer to my claim by the vendor. Rapidly Prime Auctions took the matter in hand,
                            banned the vendor and fully refunded me.</h6>
                        <p class="card-text">Emmanuel Lane</p>
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
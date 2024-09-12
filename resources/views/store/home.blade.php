@extends('store.storeLayout')

@push('meta')
    <title>Prime Auction</title>
    <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">
@endpush

@push('styles')
    .herobanner{
    background-image:
    url('assets/store/hero.jpg');
    background-size:cover;
    min-height:30rem;
    display:flex;
    flex-direction:column;
    justify-content:center;
    }
    .hero-heading{
    color:#fff;
    text-align:center;
    justify-content:center;
    align-self:auto;
    align-items:center;
    margin:auto auto 0 auto;
    padding:100px 0 20px 0;
    display:flex;
    font-size: -webkit-xxx-large;

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


    .owl-prev, .owl-next{
    font-size:-webkit-xxx-large !important;
    }

    .selling-section{
    margin: 5rem auto 5rem auto;
    }
    .card{
        border:none !important;
    }

    .bx-s-1{
    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    margin: 8px 5px;
    }

    .card-img-top {
    width: 100%;
    height: 300px;
    object-fit: cover;
    }
    .card-img-product{
    width: 100%;
    object-fit: cover;
    aspect-ratio:3/2;
    }
    .card {
    height: 100%;
    display: flex;
    flex-direction: column;
    }
    .card-body {
    flex: 1 1 auto; /* Ensure the card body grows to fill the space */
    }
    .btn-d {
    background: #fff;
    backface-visibility: hidden;
    border-radius: .375rem;
    border-style: solid;
    border-width: .125rem;
    box-sizing: border-box;
    color: var(--redc);
    cursor: pointer;
    display: inline-block;
    font-family: Circular,Helvetica,sans-serif;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: -.01em;
    line-height: 1.3;
    padding: .4rem .4rem;
    position: relative;
    text-decoration: none;
    transform: translateZ(0) scale(1);
    transition: transform .2s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width:100%;
    text-align:center;
    }

    .responsive-font{
    font-weight:500;
    font-size:1rem;
    }
    @media(max-width:768px){
    .responsive-font{
    font-size:0.75rem;
    }
    .btn-d {
    background: #fff;
    backface-visibility: hidden;
    border-radius: .375rem;
    border-style: solid;
    border-width: .125rem;
    box-sizing: border-box;
    color: var(--redc);
    cursor: pointer;
    display: inline-block;
    font-family: Circular,Helvetica,sans-serif;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: -.01em;
    line-height: 1.3;
    padding: .4rem .4rem;
    position: relative;
    text-decoration: none;
    transform: translateZ(0) scale(1);
    transition: transform .2s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width:100%;
    text-align:center;
    }
    .card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    }
    }

    a{
    text-decoration:none;
    color:black;
    }
    a:hover{
    text-decoration:none;
    }
@endpush

@push('content')
    <div class="herobanner">
        <div class="container-fluid hero-container mx-auto">
            <h2 class="hero-heading h1 fw-bold">Summer Sale-additional 10% off at checkout</h2>
        </div>
        <div class="container-fluid text-center  mx-auto">
            <a href="{{url('store/products')}}" class="cata-btn">Shop all</a>
        </div>
    </div>
    <div class="container">
        <div class="row g-1 my-5 ">
            <h2>Featured Products</h2>
        </div>
        <div class="row g-1">
            @foreach ($products as $product)
                <div class=" col-lg-3 col-6 ">
                    <div class="card bx-s-1">
                        <img src="{{url('') . '/' . $product->img}}" class="card-img-product" alt="...">
                        <div class="card-body">
                            <p class="card-text responsive-font">
                                <a href="{{url('store/item') . '/' . $product->id}}">
                                    {{$product->title}}
                                </a>
                            </p>
                            <div class="card-title text-center">
                                <h5 class="responsive-font discount-price text-center"><strong>£
                                        {{$product->discount_price}}</strong></h5>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="container-fluid d-flex justify-content-center  mx-auto">
                <a href="{{url('store/products')}}" class="cata-btn">Shop all</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-1 my-5">
            <h2>Departments</h2>
        </div>
        <div class="row g-1 mt-4 mb-3">
            <div class="col-lg-4 col-6 ">
                <div class="card ">
                    <img src="{{url('assets/department/appliances.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <a href="{{url('store/products')}}">
                            <h4 class="card-text">Small Domestic Appliances <svg xmlns="http://www.w3.org/2000/svg"
                                    width="84" height="34" fill="currentColor" class="bi bi-arrow-right"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></h4>
                        </a>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-6 ">
                <div class="card ">
                    <img src="{{url('assets/department/homeware.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <a href="{{url('store/products')}}">
                            <h4 class="card-text">Homeware <svg xmlns="http://www.w3.org/2000/svg" width="84" height="34"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></h4>
                        </a>
                    </div>
                </div>

            </div>


            <div class="col-lg-4 col-6 ">
                <div class="card ">
                    <img src="{{url('assets/department/jewellery.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <a href="{{url('store/products')}}">
                            <h4 class="card-text">Jewellery <svg xmlns="http://www.w3.org/2000/svg" width="84" height="34"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-6 ">
                <div class="card ">
                    <img src="{{url('assets/department/healthbeauty.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <a href="{{url('store/products')}}">
                            <h4 class="card-text">Health & Beauty <svg xmlns="http://www.w3.org/2000/svg" width="84"
                                    height="34" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-6 ">
                <div class="card ">
                    <img src="{{url('assets/department/cloth.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <a href="{{url('store/products')}}">
                            <h4 class="card-text">Clothing <svg xmlns="http://www.w3.org/2000/svg" width="84" height="34"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></h4>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-6 ">
                <div class="card ">
                    <img src="{{url('assets/department/baby.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <a href="{{url('store/products')}}">
                            <h4 class="card-text">Baby and Toddler <svg xmlns="http://www.w3.org/2000/svg" width="84"
                                    height="34" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center  mx-auto">
            <a href="store/department" class="cata-btn">Shop all</a>
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
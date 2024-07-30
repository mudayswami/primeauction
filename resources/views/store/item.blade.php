@extends('store.storeLayout')

@push('meta')
@endpush

@push('styles')
    body{
    }
    .responsive-font{
    font-weight:300;
    font-size:1rem;
    }

    .img-container img{
    object-fit:cover;
    width:100%;
    height:auto;
    }
    .img-container{
    position:sticky;
    height:100vh;
    top:0;
    }
    .product_title, .product_price, .product_quantity, .product_description{
    margin:2rem 0;
    }

    .btn-group-vertical{
    display:inline;
    }

    .btn-group-vertical button{
    font-size:large;
    padding:1rem 0rem;
    }

    .discount-price{
    margin-right:1rem;
    }
    .og-price{
    margin-right:1rem;
    }
    .discount{
    color:green;
    }

    a,
    a:hover{
    text-decoration: none;
    }

    .qty-container{
    display: flex;
    align-items: end;
    justify-content: start;
    }

    .qty-container .input-qty{
    text-align: center;
    padding: 6px 10px;
    border: 1px solid #d4d4d4;
    max-width: 80px;
    }

    .qty-container .qty-btn-minus,
    .qty-container .qty-btn-plus{
    border: 1px solid #d4d4d4;
    padding: 10px 13px;
    font-size: 10px;
    height: 38px;
    width: 38px;
    transition: 0.3s;
    }
    .qty-container .qty-btn-plus{
    margin-left: -1px;
    }
    .qty-container .qty-btn-minus{
    margin-right: -1px;
    }

    .btn-cornered,
    .input-cornered{
    border-radius: 4px;
    }
    .btn-rounded{
    border-radius: 50%;
    }
    .input-rounded{
    border-radius: 50px;
    }
    .card{
    min-height:100%
    }
    @media(max-width:768px){
    .responsive-font{
    font-size:0.75rem;
    }

    }
    a{
    text-decoration:none;
    color:black;
    }

@endpush

@push('content')
    <main>
        <section class="container py-5 mx-auto">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="img-container">
                        <img class="" src="{{url('assets/store/img4.jpg')}}">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="bread_crumb">
                        <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Trollys & Bags</li>
                                <li class="breadcrumb-item active" aria-current="page">Suitcase</li>
                            </ol>
                        </div>
                    </div>
                    <div class="product_title">
                        <span class="text-muted h5">Safari</span>
                        <h1>Small Cabin Suitcase (55 cm) 4 Wheels - Magnum Fury 55 - Teal</h1>
                    </div>
                    <div class="product_price">
                        <span class="h2 fw-bold discount-price">£180.00</span>
                        <span class="h5 og-price"><del>£300.00</del></span>
                        <span class="h5 discount">64% OFF</span>
                    </div>
                    <div class="terms">
                        <span>Tax included. <a href="#"><u>Shipping</u></a> calculated at checkout.</span>
                    </div>
                    <div class="product_quantity">
                        <span class="h5">Quantity:</span>
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-light" type="button"><svg style="width:15px" width="15px"
                                    height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M6 12L18 12" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg></button>
                            <input type="text" name="qty" value="0" class="input-qty" />
                            <button class="qty-btn-plus btn-light" type="button"><svg style="width:15px" width="15px"
                                    height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg')}}"
                                    stroke="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M13 3C13 2.44772 12.5523 2 12 2C11.4477 2 11 2.44772 11 3V11H3C2.44772 11 2 11.4477 2 12C2 12.5523 2.44772 13 3 13H11V21C11 21.5523 11.4477 22 12 22C12.5523 22 13 21.5523 13 21V13H21C21.5523 13 22 12.5523 22 12C22 11.4477 21.5523 11 21 11H13V3Z"
                                            fill="#0F0F0F"></path>
                                    </g>
                                </svg></button>
                        </div>
                    </div>
                    <div class="btn-group-vertical">
                        <button class="btn btn-outline-secondary my-2 add_to_cart">Add to cart</button>
                        <button class="btn btn-secondary bg-web my-2 buy_now">Buy Now</button>
                    </div>
                    <div class="product_description">
                        <p class="fs-3 py-2">Shark FlexStyle 5-in-1 Air Styler & Hair Dryer with Storage Case, Black/Rose
                            Gold</p>
                        <p class="fs-3 py-2">Grade: B</p>
                        <p class="fs-3 py-2">Any hair type. Any skill set. For all Hairkind. With a single twist, Shark
                            FlexStyle rotates between a powerful hair dryer and a versatile multi-styler. Style while you
                            dry with no heat damage. 5 ways to style: Curl, Straighten, Volumise, Smooth, Define.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 g-3">
                <div class="py-3">
                    <h2>More Like This</h2>
                </div>
                <div class="col-md-3 col-6 ">
                    <div class="card ">
                        <img src="{{url('assets/store/img1.jpg')}}" class="card-img-product" alt="...">
                        <div class="card-body">
                            <p class="card-text responsive-font">Mid Set of 2 for Adults Set of 2 for Adults Size Caps Set
                                of 2 for
                                Adults</p>
                            <div class="card-title d-flex ">
                                <h5 class="responsive-font discount-price"><strong>£99</strong></h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 ">
                    <div class="card ">
                        <img src="{{url('assets/store/img2.jpg')}}" class="card-img-product" alt="...">
                        <div class="card-body">
                            <p class="card-text responsive-font">Mid Size Caps Set of Set of 2 for Adults 2 for Adults</p>
                            <div class="card-title d-flex ">
                                <h5 class="responsive-font discount-price"><strong>£99</strong></h5>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-6 ">
                    <div class="card ">
                        <img src="{{url('assets/store/img3.jpg')}}" class="card-img-product" alt="...">
                        <div class="card-body">
                            <p class="card-text responsive-font">Lorem Ipsum has been the industry's standard Set of 2 for
                                Adults</p>
                            <div class="card-title d-flex ">
                                <h5 class="responsive-font discount-price"><strong>£99</strong></h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 ">
                    <div class="card ">
                        <img src="{{url('assets/store/img4.jpg')}}" class="card-img-product" alt="...">
                        <div class="card-body">
                            <p class="card-text responsive-font">Lorem Ipsum has been the industry's standard</p>
                            <div class="card-title d-flex ">
                                <h5 class="responsive-font discount-price"><strong>£99</strong></h5>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            </div>
        </section>
    </main>
@endpush

@push('scripts')
    <script>
        var buttonPlus = document.getElementsByClassName("qty-btn-plus");
        var buttonMinus = document.getElementsByClassName("qty-btn-minus");
        Array.from(buttonPlus).forEach(function (button) {
            button.addEventListener('click', function () {
                var n = this.closest(".qty-container").querySelector(".input-qty");
                n.value = Number(n.value) + 1;
            });
        });
        Array.from(buttonMinus).forEach(function (button) {
            button.addEventListener('click', function () {
                var n = this.closest(".qty-container").querySelector(".input-qty");
                var amount = Number(n.value);
                if (amount > 0) {
                    n.value = amount - 1;
                }
            });
        });

    </script>
@endpush
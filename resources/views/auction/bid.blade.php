@extends('auction.layout.masterLayout')

@push('meta')
    <title>Prime Auction</title>
@endpush

@push('styles')

    .cata-btn {
    padding: .5rem 2rem;
    background: var(--bluec);
    text-decoration: none;
    color: white;
    font-weight: 600;
    border-radius: 8px;
    text-align:center;
    margin:1rem 0;
    }
    .item-description {
    font-weight: 500;
    font-size:1.2rem;
    }
    .featured-lot{
    display:flex;
    }
    .venue-address{
    padding:1rem 0rem;
    text-align:center;
    }

    .buying{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    }

    .suggestion-search{
    background: var(--redc);
    padding: .5rem 1rem;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    margin-left: .5rem;
    }
    .bid-section{
    margin:2rem 0;
    padding:0 11px;
    box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
    border-radius:8px;
    }
    .img-container{
    width:100%;
    height:auto;
    max-width:400px;
    margin:auto;
    }
    .img-container img{
    padding:3rem 1rem 0 1rem;
    width:100%;
    height:auto;
    object-fit:cover;
    }
    .auction-item-img{
        max-width:150px;
    }
    .info-nav{
    padding:1rem;
    box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
    }
    @media(max-width:768px) {
    .featured-lot{
    display:flex;
    flex-direction:column;
    align-items:center;
    }

    .cata-btn {
    padding: 1rem 1rem;
    background: var(--bluec);
    text-decoration: none;
    color: white;
    font-weight: 600;
    border-radius: 8px;
    text-align:center;=
    margin:1rem 0;
    font-size:0.75rem;
    }

    }
@endpush

@push('content')
    @include('auction.include.auctionSearch')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-12"><span class="text-muted h4">Lot 1</span></div>
                <div class="col-md-11 col-12">
                    <a href="#">
                        <p class="fs-5">{{$lot->title}}</p>
                    </a>
                    <a href="{{url('catalogue') . '/' . $lot->auction->id}}">
                        <p class="h5"><u>Back to: {{$lot->auction->title}}</u></p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 ">
                    <div class="img-container">
                        <img src="{{'/primeshop/public/' . $lot->img}}">

                    </div>
                </div>
                <div class="col-md-6 col-12 ">
                    <div class="lot-message"></div>
                    <div class="bid-section border border-1">
                        <div class="row">
                            <span class="text-center py-2">Reserve not met</span>
                        </div>
                        <div class="row d-none">
                            <div class="col-4 fs-6 p-3 fw-bold">Closing Bid</div>
                            <div class="col-8 fs-6 p-3 ">Price of the lot has not been published</div>
                        </div>
                        <div class="row">
                            <div class="col-6 fs-6 p-3 fw-bold" id="opening-bid">Opening Bid</div>
                            <div class="col-6 fs-6 p-3 "></div>
                            <div class="col-6 fs-6 p-3 fw-bold" id="current-bid">Current Bid</div>
                            <div class="col-6 fs-6 p-3 ">150</div>
                            <div class="col-6 fs-6 p-3 fw-bold" id="next-minimum-bid">Next minimum bid</div>
                            <div class="col-6 fs-6 p-3 ">150</div>
                        </div>
                        <div class="row">
                            <div class="col-8 fs-6 p-3 fw-bold">
                                <div class="input-group">
                                    <input type="text" class="form-control p-2" placeholder="Enter your maximum bid"
                                        aria-label="bid" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">GBP</span>
                                </div>
                            </div>
                            <div class="col-4 "><button class="cata-btn">Place Bid</button></div>
                        </div>
                        <div class="row">
                            <div class="col-4 fs-6 p-3 fw-bold">Buyer's Premium</div>
                            <div class="col-8 fs-6 p-3 fw-bold">{{$lot->buyer_premium}}%</div>
                            <div class="col-6 py-3 btn-outline-light text-center border border-1"><a href="#">

                                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                fill="#1C274C"></path>
                                        </g>
                                    </svg>Add to watchlist</a></div>
                            <div class="col-6 py-3 btn-outline-light text-center border border-1"><a href="#">
                                    <img src="{{url('assets/svg/mail.svg')}}">Ask a
                                    question</a>
                            </div>
                            <div class="col-6 py-3 btn-outline-light text-center border border-1"><a href="#"><img
                                        src="{{url('assets/svg/hammer.svg')}}">Register to
                                    bid</a></div>
                            <div class="col-6 py-3 btn-outline-light text-center border border-1"><a href="#">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="bid-section">
                        <div class="row">
                            <div class="col-4 fs-6 fw-light p-3">{{$lot->auction->type}} Auction</div>
                            <div class="col-8 fs-6 fw-light p-3"></div>
                            <div class="col-4 fs-6 fw-light p-3">Lot Location</div>
                            <div class="col-8 fs-6 fw-light p-3">Multiple Sites</div>
                        </div>
                    </div>
                    <div class="">
                        <div class="row">
                            <div class="col-7 fs-6 fw-light p-3"></div>
                            <div class="col-5 fs-6 fw-light p-3"><a href="#"><u>Next Lot: 2</u><img
                                        src="{{url('assets/short-right-arrow.svg')}}" alt></a></div>
                            <div class="col-12 fs-6 fw-light p-3">
                                <div class="input-group">
                                    <input type="text" class="form-control p-3" placeholder="Jump to Lot" aria-label="bid"
                                        aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2"><img
                                            src="{{url('assets/short-right-arrow.svg')}}" alt></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="info-nav">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                    <button class="nav-link" id="nav-auction-details" data-bs-toggle="tab" data-bs-target="#nav-auction"
                        type="button" role="tab" aria-controls="nav-auction" aria-selected="false">Auction Details</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Shipping</button>
                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab" data-bs-target="#nav-terms"
                        type="button" role="tab" aria-controls="nav-terms" aria-selected="false">Terms & Conditions</button>
                    <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button"
                        role="tab" aria-controls="nav-info" aria-selected="false">Important Information</button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                        tabindex="0">
                        <span class="fw-bold">Title : </span>
                        <br><span class="fw-bold">Description : </span>
                        <br><span class="fw-bold">Condition : </span>
                        <br><span class="fw-bold">Delivery Option : </span>
                        <br><span class="fw-bold">Location : </span>
                        <br><span class="fw-bold">Category : </span>
                    </div>
                    <div class="tab-pane fade" id="nav-auction" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            <div class="col-lg-2 d-flex flex-column align-items-center">
                                <img class="auction-item-img" src="{{'/primeshop/public/' . $lot->auction->img}}">
                                <div class="type py-1">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M12 7V12L14.5 10.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                                stroke="#102343" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg> <span class="fw-bold">{{$lot->auction->type}}</span>
                                </div>
                                <div class="venue-address d-flex flex-column">
                                    <span>@if(isset($lot->auction->location)) {{$lot->aucction->location}} @else Multiple Sites
                                    @endif</span>
                                    <!-- <span> Ashton Under </span> -->
                                    <!-- <span>Lyne United</span> -->
                                </div>
                            </div>
                            <div class="col-lg-8 py-2">
                                <div class="item-description">
                                    {{$lot->auction->description}}
                                </div>
                                <div class="dates-section">
                                    <div class="item-dates-header category-header">Auction Dates</div>
                                    <div class="item-dates h6">
                                        <div class=""><span class="fw-bold">Starts :</span>
                                            {{date('d M y H:i:s', strtotime($lot->auction->start))}} BST</div>
                                        <div class=""><span class="fw-bold">Ends :</span>
                                            {{date('d M y H:i:s', strtotime($lot->auction->end))}} BST</div>
                                    </div>
                                </div>
                                <div class="payment-info py-3">
                                    <table class="">
                                        <tbody>
                                            <tr class="width:200px">
                                                <td>
                                                    <div class="h5">Auction currency</div>
                                                </td>
                                                <td><span class="">GBP</span></td>
                                            </tr>
                                            <tr class="width:200px">
                                                <td>
                                                    <div class="h5">Buyer's Premium</div>
                                                </td>
                                                <td><span class="">{{$lot->auction->buyer_premium}}%</span></td>
                                            </tr>
                                            <tr class="width:200px">
                                                <td>
                                                    <div class="h5">VAT on hammer</div>
                                                </td>
                                                <td><span class="">{{$lot->auction->vat_rate}}%</span></td>
                                            </tr>
                                            <tr class="width:200px">
                                                <td>
                                                    <div class="h5">Accepted cards for registeration</div>
                                                </td>
                                                <td><span class=""></span></td>
                                            </tr>
                                            <tr class="width:200px">
                                                <td>
                                                    <div class="h5">Accepted cards for payment</div>
                                                </td>
                                                <td><span class=""></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-auction" role="tabpanel" aria-labelledby="nav-contact-tab"
                        tabindex="0">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which don't look even slightly
                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                            Internet
                            tend to repeat predefined chunks as necessary, making this the first true generator on the
                            Internet.
                            It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                            structures,
                            to generate Lorem Ipsum which looks reasonable.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-disabled-tab"
                        tabindex="0">
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced
                            in
                            their exact original form, accompanied by English versions from the 1914 translation by H.
                            Rackham.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-disabled-tab"
                        tabindex="0">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                            their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                            infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                            purpose
                            (injected humour and the like).</p>
                    </div>
                    <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-disabled-tab"
                        tabindex="0">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which don't look even slightly
                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                            Internet
                            tend to repeat predefined chunks as necessary, making this the first true generator on the
                            Internet.
                            It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                            structures,
                            to generate Lorem Ipsum which looks reasonable.</p>
                    </div>
                </div>
            </nav>

        </div>
    </section>
@endpush

@push('scripts')
    <script>

    </script>

@endpush
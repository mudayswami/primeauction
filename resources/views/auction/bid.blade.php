
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
            @if((date($lot->auction->start)) > (date('Y-m-d H:i:s')) )
            <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                    <use xlink:href="#info-fill" />
                    </svg><div class="px-1"><strong class="fs-5">Bidding on this auction has not started</strong><br><span> Please register now so you are approved to bid when auction starts.</span></div>
            </div>
            @elseif((date($lot->auction->end)) < (date('Y-m-d H:i:s')) )
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center " role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                    <use xlink:href="#info-fill" />
                    </svg><div class="px-1"><strong class="fs-5">The auction is closed!</strong><br><span> It is no longer possible to bid at this auction</span></div>
            </div>
            @endif
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
                        <img src="{{ url($lot->img)}}">

                    </div>
                </div>
                <div class="col-md-6 col-12 ">
                    <div class="lot-message"></div>
                    <div class="bid-section border border-1">
                        @if((date($lot->auction->end)) > (date('Y-m-d H:i:s')))
                        <div class="row ">
                        <!-- Reserve not met -->
                            <span class="text-center py-2 "></span>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center <?php if(!empty($bids) && $bids[0]['user_id'] == session('user_data')['user_id']){echo '';}else{ echo 'd-none'; } ?>"  role="alert" id='bid-success'>
                            <svg class="bi flex-shrink-0 me-2" width="24" height="20" role="img" aria-label="Info:">
                                <use xlink:href="#info-fill" />
                                </svg><div class="px-1" id="bidSuccessText">You're currently in the lead</div>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center <?php if(!empty($user_bid) && $bids[0]['user_id'] != session('user_data')['user_id']){echo '';}else{ echo 'd-none'; } ?>" role="alert" id='bid-success'>
                            <svg class="bi flex-shrink-0 me-2" width="24" height="20" role="img" aria-label="Info:">
                                <use xlink:href="#info-fill" />
                                </svg><div class="px-1" id="bidSuccessText">You're outbid on this lot</div>
                        </div>
                        <div class="row d-none">
                            <div class="col-4 fs-6 p-3 fw-bold">Closing Bid</div>
                            <div class="col-8 fs-6 p-3 ">Price of the lot has not been published</div>
                        </div>
                        <div class="row">
                            @if(empty($bids))
                            <div id="opening-bid" class="row p-3">
                                <div class="col-6 fs-6 fw-bold" id="opening-bid">Opening Bid</div>
                                <div class="col-6 fs-6 "><span id="openingBid">{{$lot->start_bid}}</span> £</div>
                            </div>
                            @endif
                            <div class="row p-3 {{empty($bids) ? 'd-none' : ''}}" id="current-bid">
                                <div class="col-6 fs-6 fw-bold" >Current Bid</div>
                                <div class="col-6 fs-6 ">£ <span id="currentBid">{{!empty($bids) ? $bids[0]['bid_amount'] : ''}}</span></div>
                            </div>
                            <div class="row p-3 {{empty($user_bid) ? 'd-none' : '' }}" id="your-maximum-bid">
                                <div class="col-6 fs-6 fw-bold" >Your Maximum Bid</div>
                                <div class="col-6 fs-6 " >£ <span id="youMaximumBid">{{empty($user_bid) ? '' : $user_bid[0]['bid_amount'] }}</span></div>
                            </div>
                            <div class="row p-3" id="next-minimum-bid">
                                <div class="col-6 fs-6  fw-bold" id="next-minimum-bid">Next Minimum Bid</div>
                                <div class="col-6 fs-6">£<span id="nextMinimumBid">@if(empty($bids)) {{$lot->start_bid + $lot->next_bid}} @else {{$bids[0]['bid_amount']  + $lot->next_bid}} @endif</span></div>
                            </div>
                        </div>
                        
                        <div class="d-none alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert" id='bid-error'>
                            <svg class="bi flex-shrink-0 me-2" width="24" height="20" role="img" aria-label="Info:">
                                <use xlink:href="#info-fill" />
                                </svg><div class="px-1" id="bidErrorText"></div>
                        </div>
                        <div class="row">
                            <div class="col-8 fs-6 p-3 fw-bold">
                                <div class="input-group">
                                    <input type="number"  class="form-control p-2" placeholder="Enter your maximum bid"
                                        aria-label="bid" aria-describedby="basic-addon2" id="bid">
                                    <span class="input-group-text" id="basic-addon2">GBP</span>
                                </div>
                            </div>
                            @if(empty($auction_register))
                                <div class="col-4 "><a href="{{url('catalogue/'.$lot->auction->id.'/register')}}"><button class="cata-btn">Place Bid</button></a></div>
                            @else
                                <div class="col-4 "><button class="cata-btn" id='bidplace'>Place Bid</button></div>
                            @endif
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
                            <div class="col-6 py-3 btn-outline-light text-center border border-1">
                                @if(empty($auction_register))
                                <a href="{{url('catalogue/'.$lot->auction->id.'/register')}}"><img src="{{url('assets/svg/hammer.svg')}}">Register to bid</a>
                                @else
                                <a href=""><img src="{{url('assets/svg/hammer.svg')}}">Registered</a>
                                @endif
                            </div>
                            <div class="col-6 py-3 btn-outline-light text-center border border-1"><a href="#">Share</a>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div id="closing-bid" class="row p-3">
                                <div class="col-4 fs-6 fw-bold" id="closing-bid">Close Bid</div>
                                <div class="col-8 fs-6 "><span id="closingBid text-muted">Closing bid is yet not published</span> </div>
                            </div>
                        </div>
                        @endif
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
                            <div class="col-5 fs-6 fw-light p-3 d-none"><a href="#"><u>Next Lot: 2</u><img
                                        src="{{url('assets/short-right-arrow.svg')}}" alt></a></div>
                            <div class="col-12 fs-6 fw-light p-3 d-none">
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
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
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
                        <p ><span class="fw-bold ">Title : </span>{{$lot->title}}</p>
                        <p ><span class="fw-bold ">Description : </span>{{$lot->description}}</p>
                        <p ><span class="fw-bold ">Condition : </span>{{$lot->condition}}</p>
                        <p ><span class="fw-bold ">Delivery Option : </span>Delivery @if($lot->pickup) / Pickup @endif</p>
                        <p ><span class="fw-bold ">Location : </span>{{$lot->auction->loccation}} </span>
                        <p ><span class="fw-bold ">Category : </span>@foreach(json_decode($lot->category,true) as $key => $value) @if($key == 1){{$value}}@else {{$value}} , @endif @endforeach </p>
                    </div>
                    <div class="tab-pane fade" id="nav-auction" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            <div class="col-lg-2 d-flex flex-column align-items-center">
                                <img class="auction-item-img" src="{{url($lot->auction->img)}}">
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
                                    <span>@if(isset($lot->auction->location)) {{$lot->auction->location}} @else Multiple Sites
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
                        <p><span class="fw-bold">Shipping info: </span>{{$lot->ship_info}}</p>
                        <p><span class="fw-bold">Shipping Cost: </span>{{$lot->ship_ccost}}</p>
                    </div>
                    <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-disabled-tab"
                        tabindex="0">
                        <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="card shadow-sm border-none">
                    <div class="card-body">
                        <h2 class="card-title">Terms and Conditions for Auction</h2>
                        <p>Welcome to Prime Auctions. By participating in our auctions, whether as a seller or a buyer, you agree to comply with the following terms and conditions. These terms are designed to ensure a transparent, fair, and secure auction process for all participants.</p>

                        <h4>1. Definitions</h4>
                        <ul>
                            <li><strong>Auctioneer:</strong> Refers to Prime Auctions, the organiser of the auction.</li>
                            <li><strong>Seller:</strong> Any individual, business, or entity offering goods for sale through the auction.</li>
                            <li><strong>Buyer:</strong> Any individual, business, or entity purchasing goods through the auction.</li>
                            <li><strong>Lot:</strong> A single item or group of items offered for sale in the auction.</li>
                        </ul>

                        <h4>2. Registration</h4>
                        <p>All participants (buyers and sellers) must register with Prime Auctions prior to bidding or selling. Accurate and up-to-date personal and/or business information must be provided. Prime Auctions reserves the right to refuse or revoke registration at any time at its sole discretion.</p>

                        <h4>3. Seller Responsibilities</h4>
                        <ul>
                            <li>The seller guarantees that they are the legal owner of the assets listed for auction or are duly authorised to sell them.</li>
                            <li>The seller must provide accurate descriptions, images, and information about the lot. Misrepresentation of any kind may result in the lot being withdrawn, with the seller liable for any losses or damages incurred.</li>
                            <li>All sales are final and binding upon the conclusion of the auction. The seller must ensure the sold lot is delivered to the buyer in a timely manner as per the agreed terms.</li>
                        </ul>

                        <h4>4. Buyer Responsibilities</h4>
                        <ul>
                            <li>All bids placed are considered final and legally binding. The highest bid at the end of the auction constitutes the sale price.</li>
                            <li>Buyers are responsible for understanding the condition, description, and value of the item they are bidding on. Prime Auctions provides information as-is and is not liable for any discrepancies between the buyer’s expectations and the actual condition of the goods.</li>
                            <li>Payment for won lots must be made within <strong>[insert time frame, e.g., 7 days]</strong> from the conclusion of the auction. Failure to make payment may result in forfeiture of the winning bid and/or exclusion from future auctions.</li>
                        </ul>

                        <h4>5. Bidding Process</h4>
                        <ul>
                            <li>Bids may be placed online, in person, or through pre-approved channels as defined by Prime Auctions.</li>
                            <li>Prime Auctions reserves the right to set minimum bid increments and starting prices for each lot.</li>
                            <li>In the event of a dispute over bids, the auctioneer's decision will be final. Prime Auctions reserves the right to withdraw any lot or cancel the auction at its discretion.</li>
                        </ul>

                        <h4>6. Reserve Prices</h4>
                        <p>Some lots may be subject to a reserve price, which is the minimum price the seller is willing to accept. The auctioneer will indicate whether a reserve price applies. If the reserve price is not met, the auctioneer is not obligated to sell the lot.</p>

                        <h4>7. Payment Terms</h4>
                        <ul>
                            <li>Prime Auctions accepts payment methods as outlined during registration (e.g., credit card, bank transfer, etc.).</li>
                            <li>Buyers must pay the full purchase price, including any applicable VAT, buyer’s premium, and shipping or handling fees, as specified in the auction details.</li>
                            <li>Ownership of the lot will not transfer to the buyer until full payment has been received and cleared.</li>
                        </ul>

                        <h4>8. Buyer’s Premium</h4>
                        <p>A buyer’s premium of 20% will be added to the hammer price of each lot. This fee is payable by the buyer in addition to the final bid price.</p>

                        <h4>9. Collection and Delivery</h4>
                        <p>Buyers are responsible for arranging collection of purchased lots unless otherwise specified. Where delivery is available, it will be arranged at the buyer's expense. Purchased items must be collected within <strong>[insert time frame]</strong> of the auction’s conclusion, unless alternative arrangements have been made.</p>

                        <h4>10. Liability</h4>
                        <ul>
                            <li>Prime Auctions acts as an intermediary between sellers and buyers and does not assume ownership of any items listed for auction.</li>
                            <li>Prime Auctions is not liable for any disputes between buyers and sellers, including but not limited to disputes related to the condition, authenticity, or provenance of the lot.</li>
                            <li>The auctioneer is not responsible for any damage, loss, or theft of lots occurring after the sale is completed.</li>
                        </ul>

                        <h4>11. Returns and Disputes</h4>
                        <p>All sales are final. No returns or exchanges will be accepted unless explicitly stated in the auction terms for a specific lot. In the event of a dispute, Prime Auctions will make reasonable efforts to mediate, but the final responsibility rests with the buyer and seller.</p>

                        <h4>12. Auction Cancellation or Postponement</h4>
                        <p>Prime Auctions reserves the right to cancel, reschedule, or alter the format of an auction at any time for any reason. In such cases, registered participants will be notified promptly.</p>

                        <h4>13. Privacy Policy</h4>
                        <p>All personal information provided during registration and auction transactions will be handled in accordance with Prime Auctions' Privacy Policy. This information will not be shared with third parties without the participant's consent, except as required by law.</p>

                        <h4>14. Governing Law</h4>
                        <p>These terms and conditions are governed by and construed in accordance with the laws of England and Wales, and any disputes arising shall be subject to the exclusive jurisdiction of the courts in that region.</p>

                        <h4>15. Acceptance of Terms</h4>
                        <p>By participating in any auction hosted by Prime Auctions, all participants agree to these terms and conditions. Non-compliance may result in suspension or permanent exclusion from future auctions.</p>

                        <p>For any queries or further clarification regarding these Terms and Conditions, please contact us. We are here to ensure a smooth and successful auction experience for all involved.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

                    </div>
                    <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-disabled-tab"
                        tabindex="0">
                        <header class="bg-primary text-white text-center py-4">
        <h1>Prime Auctions - Shipping Policy</h1>
        <p>Information regarding shipping and collection for your purchases</p>
    </header>

    <!-- Content Section -->
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title">Shipping Policy</h2>
                        <p>At Prime Auctions, shipping arrangements vary depending on the item purchased. We strive to offer flexible options to suit our customers' needs.</p>

                        <h4>1. Collection or Delivery Options</h4>
                        <p><strong>Collection:</strong> Customers are welcome to collect their items free of charge from our designated location. Collection appointments can be arranged via phone or email.</p>
                        <p><strong>Shipping:</strong> For those who prefer delivery, we offer shipping at an additional cost. The exact shipping fees will depend on the size, weight, and destination of the item.</p>

                        <h4>2. Shipping Arrangements</h4>
                        <p>Once your order is placed, a member of our team will contact you via phone or email to discuss and finalise the best shipping or collection option. Shipping costs will be negotiated during this process to ensure you receive the most suitable and cost-effective method.</p>

                        <h4>3. Confirmation</h4>
                        <p>All shipping and collection arrangements will be confirmed by phone or email once agreed upon. We aim to ensure that your items are delivered or ready for collection in a timely and convenient manner.</p>

                        <p>If you have any questions about shipping before placing an order, please feel free to contact us directly.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Prime Auctions | All rights reserved.</p>
    </footer>
                    </div>
                </div>
            </nav>

        </div>
    </section>
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{asset('js/bp.js')}}"></script>
@if((date($lot->auction->end)) > (date('Y-m-d H:i:s')))
<script>
    const bidplace  = document.getElementById('bidplace');
    const bid       = document.getElementById('bid');
    const openBid   = document.getElementById('openingBid');
    const bids      = {{sizeof($bids)}};
bidplace.addEventListener('click',()=>{
    const nextMinimumBid = document.getElementById('nextMinimumBid');
    $('#bid-error').removeClass('d-none');
    $('#bid-error').addClass('d-none');
    if(bids != 0 && bid.value.trim() < Number(nextMinimumBid.textContent)){
        $('#bid-error').removeClass('d-none');
        $('#bidErrorText').empty();
        $('#bidErrorText').html('Bid Should be greater than or equal to '+nextMinimumBid.innerHTML +'£');
        return false;
    }

    if(bids == 0 && Number(bid.value.trim()) < Number(openBid.textContent)){
        $('#bid-error').removeClass('d-none');
        $('#bidErrorText').empty();
        $('#bidErrorText').html('Bid Should be greater than or equal to '+openBid.innerHTML +'£');
        return false;
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        },
        url : "{{ url('bp') }}",
        data : {'bid' : bid.value,'lot':{{$lot->id}} },
        type : 'post',
        success : function(result){
            console.log("===== " + result + " =====");
            bid.value=0;
            location.href= location.href;
        }
    });
});
    </script>
    @endif
@endpush
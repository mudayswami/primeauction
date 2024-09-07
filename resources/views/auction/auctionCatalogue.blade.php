@extends('auction.layout.masterLayout')

@push('meta')
    <title>Prime Auction</title>
    <?xml version="1.0" encoding="utf-8"?>
@endpush

@push('styles')
    .auction-item-img{
    width:-webkit-fill-available;
    }
    .category-header {
    font-weight: 700;
    margin-top: .5rem;
    font-size:20px;
    }

    .primary-category {
    height: 100px;
    overflow: hidden;
    }

    .category {
    position: relative;
    margin-bottom: 2.5rem;
    }

    .auction-item-img {
    border-radius: 8px;
    }
    .catalogue-category {
    padding: 12px 0px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center
    }
    .cata-btn {
    padding: .6rem 2rem;
    background: var(--redc);
    text-decoration: none;
    color: white;
    font-weight: 600;
    border-radius: 8px;
    text-align:center;
    margin:1rem 0;

    }
    .item-description {
    font-weight: 700;
    font-size:1.7rem;
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


    .show-more {
    position: absolute;
    top: 100%;
    }

    .showmore {
    display: none;
    }

    .showmore-label {}

    .showmore:checked+.showmore-label:after {
    color: var(--bluec);
    content: "Show Less ";
    }

    .showmore-label:after {
    color: var(--bluec);
    content: 'Show More ';
    }

    .showmore:checked {
    .primary-category {
    height: 100%;
    }
    }

    .extra{
    display:flex;
    flex-direction:row;
    align-items:center;
    justify-content:space-between;
    }

    .auction-items{
    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
    border-radius:12px;
    padding:1rem 1rem;
    margin-bottom:1rem;
    }

    .light-header{
    color: #ababab;
    padding-bottom: 5px;
    font-weight: 400;
    }
    .filter-btn {
    color: var(--redc);
    background: white;
    display: inline-block;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    min-width: 100%;
    padding: .5rem 2rem;
    border-radius: 10px;
    font-weight: 500;
    font-size: 20px;
    margin-bottom:1rem;
    }
    .btn-filter{
    font-weight:700;
    }

    .subsearch{
    display:flex;
    flex-direction:column;
    align-items:center;
    margin:2rem 0;
    }

    @media(max-width:768px) {
    .featured-lot{
    display:flex;
    flex-direction:column;
    align-items:center;
    }
    .auction-item-img{
    width:fit-content;

    }
    .item-description {
    font-weight: 700;
    font-size:1.2rem;
    }
    .payment-info, .regulations, .venue-address{
    display:none;
    }
    .desktop-filter {
    display: none;
    }
    }
@endpush

@push('content')
    @include('auction.include.auctionSearch')
    <section>
        <div class="container">
            <div class="row">
                @if((date($auction['start'])) > (date('Y-m-d H:i:s')) )
                <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                        <use xlink:href="#info-fill" />
                        </svg><div class="px-1"><strong class="fs-5">Bidding on this auction has not started</strong><br><span> Please register now so you are approved to bid when auction starts.</span></div>
                </div>
                @elseif((date($auction['end'])) < (date('Y-m-d H:i:s')) )
                <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                        <use xlink:href="#info-fill" />
                        </svg><div class="px-1"><strong class="fs-5">The auction is closed!</strong><br><span> It is no longer possible to bid at this auction</span></div>
                </div>
                @endif
                @if(isset($registered) && $registered->approved == 0)
                    <div class="alert alert-warning alert-dismissible fade show d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                            </svg><div class="px-1"><strong class="fs-5">Your auction registration is now pending</strong><br><span> You have successfully registered for this auction, pending approval to bid. Please check your email for further information.</span></div>
                    </div>
                @elseif(isset($registered) && $registered->approved == 1)
                <div class="alert alert-info alert-dismissible fade show d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#info-fill" />
                            </svg><div class="px-1"><strong class="fs-5">You are registered for this auction</strong><br><span> You are now approved to bid at this auction.</span></div>
                    </div>
                @endif
                <div class="col-lg-2 d-flex flex-column align-items-center">
                    <img class="auction-item-img" src="{{url($auction['img'])}}">
                    <div class="type py-1">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                            </g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M12 7V12L14.5 10.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                    stroke="#102343" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg> <span class="fw-bold">{{$auction['type']}}</span>
                    </div>
                    <div class="venue-address d-flex flex-column">
                        <span>@if(isset($value['location'])) {{$value['location']}} @else Multiple Sites @endif</span>
                        <!-- <span> Ashton Under </span> -->
                        <!-- <span>Lyne United</span> -->
                    </div>
                </div>
                <div class="col-lg-8 py-2">
                    <div class="item-description">
                        {{$auction['description']}}
                    </div>
                    <div class="dates-section">
                        <div class="item-dates-header category-header">Auction Dates</div>
                        <div class="item-dates h6">
                            <div class=""><span class="fw-bold">Starts :</span>
                                {{date('d M y H:i:s', strtotime($auction['start']))}} BST</div>
                            <div class=""><span class="fw-bold">Ends :</span>
                                {{date('d M y H:i:s', strtotime($auction['end']))}} BST</div>
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
                                    <td><span class="">{{$auction['buyer_premium']}}%</span></td>
                                </tr>
                                <tr class="width:200px">
                                    <td>
                                        <div class="h5">VAT on hammer</div>
                                    </td>
                                    <td><span class="">{{$auction['vat_rate']}}%</span></td>
                                </tr>
                                <tr class="width:200px">
                                    <td>
                                        <div class="h5">Accepted cards for registeration</div>
                                    </td>
                                    <td><span class=""><img height="65" src="{{url('assets/cardsoptions.png')}}" alt="cards"></span></td>
                                </tr>
                                <tr class="width:200px">
                                    <td>
                                        <div class="h5">Accepted cards for payment</div>
                                    </td>
                                    <td><span class=""><img height="65" src ="{{url('assets/cardsoptions.png')}}" alt="cards"></span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2 buying">
                    @if((date($auction['end'])) > (date('Y-m-d H:i:s')) && !isset($registered))
                    <a href="{{$auction['id']}}/register"><button type="submit" class="btn cata-btn">@if(date($auction['start']) > date('Y-m-d H:i:s')) Coming Soon @else Register to bid @endif</button></a>
                    @endif
                    <div class="regulations d-flex flex-column">
                        <a class=" ">Terms & conditions</a>
                        <a class=" ">Important Information</a>
                        <a class="" href="mailto:primeauction.tech@gmail.com">Ask a question</a>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            @if((date($auction['start'])) < (date('Y-m-d H:i:s')) )
            <div class=" category-header py-2">Featured Lots</div>
            <div class="featured-lot">
                @foreach($lots as $key => $value)
                <div class="card my-2 mx-1" style="width: 18rem;">
                    <a href="{{url('bid').'/'.$value['id']}}">
                        <img src="{{url($value['img'])}}"
                            class="card-img-top"
                            alt="{{url($value['img'])}}">
                        <div class="card-body">
                            <p class="card-text">{{$value['title']}}</p>
                        </div>
                    </a>
                </div>
                <?php if($key == 4) break;?>
                @endforeach
            </div>
            @endif
            <div class="row ">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-12">
                    <div class="subsearch ">
                        <div class="fw-bold py-1">There are {{$auction['lots']}} within this auction</div>
                        <form class="d-flex mx-auto justify-content">
                            <input class="form-control inp-search fs-5" type="search" placeholder="Search"
                                aria-label="Search">
                            <a class=" suggestion-search" type="submit"><svg viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                            stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                </svg></a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="subsearch">
                        <form class="d-flex mx-auto justify-content-space">
                            <input class="form-control inp-search fs-5" type="search" placeholder="Search By Lot"
                                aria-label="Search">
                            <a class="suggestion-search" type="submit">-></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="filter-btn d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"><svg viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4 5C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H4ZM3 12C3 11.4477 3.44772 11 4 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H4C3.44772 13 3 12.5523 3 12ZM3 18C3 17.4477 3.44772 17 4 17H20C20.5523 17 21 17.4477 21 18C21 18.5523 20.5523 19 20 19H4C3.44772 19 3 18.5523 3 18Z"
                                    fill="#102343"></path>
                            </g>
                        </svg>
                        <span class="btn-filter">Filter</span>
                    </div>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu"
                        aria-labelledby="offcanvasMenuLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <section>
                                <div class="mobile"></div>
                                <div class="my-3  h4">Filter By</div>
                                <div class="list-group category-header">Primary Category</div>
                                <div class="category">
                                    <div class="primary-category">
                                        <div class="category-item">
                                            <div class="form-check checkbox" data-href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Consumer Goods</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" data-href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">IT & Electricals</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" data-href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Automotive & Vehicle</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Industrial</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Other Industries</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Food & Beverage</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Plant & machinery</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show-more">
                                        <input type="checkbox" class="showmore" name="primary-show" id="primary-show">
                                        <label class="showmore-label" for="primary-show"></label>
                                    </div>
                                </div>
                                <div class="list-group category-header">Category</div>
                                <div class="category">
                                    <div class="secondary-category">
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Homewares</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Toys</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Children & Baby Products</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Garden & Outdoor</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">It Accessories</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Perfumes & Cosmetics</label>
                                            </div>
                                        </div>
                                        <div class="category-item">
                                            <div class="form-check checkbox" href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label">Audio & Musical Equipment</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show-more">
                                        <input type="checkbox" class="showmore" name="secondary-show" id="secondary-show">
                                        <label class="showmore-label" for="secondary-show"></label>
                                    </div>
                                </div>
                                <div class="list-group category-header">Auction Type</div>
                                <div class="category">
                                    <div class="type-category">
                                        <div class="category-item">
                                            <div class="form-check checkbox" data-href="auction?">
                                                <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                                <label class="form-check-label"><svg viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M12 7V12L14.5 10.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                                                stroke="#102343" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg> Timed </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group category-header">Country</div>
                                    <div class="category">
                                        <div class="country-category">
                                            <div class="category-item">
                                                <div class="form-check checkbox" data-href="auction?">
                                                    <input class="form-check-input" type="checkbox" href="auction/"
                                                        name="cg">
                                                    <label class="form-check-label">United Kingdom</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </section>
                        </div>

                    </div>
                    <section class="desktop-filter">
                        <div class="mobile"></div>
                        <div class="my-3  h4">Filter By</div>
                        <div class="list-group category-header">Primary Category</div>
                        <div class="category">
                            <div class="primary-category">
                                <div class="category-item">
                                    <div class="form-check checkbox" data-href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Consumer Goods</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" data-href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">IT & Electricals</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" data-href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Automotive & Vehicle</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Industrial</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Other Industries</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Food & Beverage</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Plant & machinery</label>
                                    </div>
                                </div>
                            </div>
                            <div class="show-more">
                                <input type="checkbox" class="showmore" name="primary-show" id="primary-show">
                                <label class="showmore-label" for="primary-show"></label>
                            </div>
                        </div>
                        <div class="list-group category-header">Category</div>
                        <div class="category">
                            <div class="secondary-category">
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Homewares</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Toys</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Children & Baby Products</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Garden & Outdoor</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">It Accessories</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Perfumes & Cosmetics</label>
                                    </div>
                                </div>
                                <div class="category-item">
                                    <div class="form-check checkbox" href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label">Audio & Musical Equipment</label>
                                    </div>
                                </div>
                            </div>
                            <div class="show-more">
                                <input type="checkbox" class="showmore" name="secondary-show" id="secondary-show">
                                <label class="showmore-label" for="secondary-show"></label>
                            </div>
                        </div>
                        <div class="list-group category-header">Auction Type</div>
                        <div class="category">
                            <div class="type-category">
                                <div class="category-item">
                                    <div class="form-check checkbox" data-href="auction?">
                                        <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                        <label class="form-check-label"><svg viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M12 7V12L14.5 10.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                                        stroke="#102343" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg> Timed </label>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group category-header">Country</div>
                            <div class="category">
                                <div class="country-category">
                                    <div class="category-item">
                                        <div class="form-check checkbox" data-href="auction?">
                                            <input class="form-check-input" type="checkbox" href="auction/" name="cg">
                                            <label class="form-check-label">United Kingdom</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
                <div class="col-12 col-lg-9">
                    @foreach ($lots as $key => $value)
                        <div class="auction-items">
                            <div class="row">
                                <div class="col-lg-2 ">
                                    <img class="auction-item-img "
                                    src="{{ url($value["img"])}}">
                                </div>
                                <div class="col-lg-7 px-4">
                                    <div class="lot-number light-header py-1">{{$value['lot_num']}}</div>
                                    <div class="lot-title category-header"><a href="{{url('bid').'/'.$value['id']}}">{{$value['title']}}</a></div>
                                    <div class="lot-description  py-2">
                                        <p>{{$value['description']}}</p>
                                    </div>
                                    <div class="d-flex ">
                                        @foreach (json_decode($value['category'], true) as $category)
                                        <div class="tags px-1"><span class="badge rounded-pill bg-web">{{$category}}</span></div>
                                        @endforeach
                                    </div>
                                    <div class="extra">
                                        <div class="watchlist">
                                            <div class="add"><img width="30" src="{{url('assets/svg/outline-heart.svg')}}" > Add to WatchList</div>
                                            <div class="loading d-none"></div>
                                            <div class="remove" style="display:none;"><img width="30" src="{{url('assets/svg/filled-heart.svg')}}" > Remove from WatchList</div>
                                        </div>
                                        <div class="type">
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
                                            </svg> <span class="fw-bold">Timed</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 px-2 text-lg-center text-start  d-flex flex-column justify-content-evenly">
                                    <div>
                                        <div class="opening-bid d-none"><span class="light-header">Opening
                                                Bid:</span>{{$value['start_bid']}} GBP</div>
                                        <div class="opening-bid"><a href="#">(?) Additional Fees</a></div>
                                    </div>
                                    <a href="{{url('bid').'/'.$value['id']}}">
                                        <a href="{{url('bid').'/'.$value['id']}}">
                                            <div class="cata-btn">@if((date($auction['end'])) < (date('Y-m-d H:i:s')) ) Bidding Closed @else View & Bid @endif</div>
                                        </a>
                                    </a>
                                    <div>
                                        <div class="bidding-ends light-header">Bidding Ends: {{date($auction['end'])}}</div>
                                        <div class="lot-location"><span class="light-header">Lot
                                                Location:</span>@if(isset($value['location'])) {{$value['location']}} @else
                                                Multiple Sites @endif</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var watchlists = document.querySelectorAll('.watchlist');

            watchlists.forEach(function (watchlist) {
                var addButton = watchlist.querySelector('.add');
                var loadingDiv = watchlist.querySelector('.loading');
                var removeButton = watchlist.querySelector('.remove');

                addButton.addEventListener('click', function () {
                    addButton.style.display = 'none';
                    removeButton.style.display = 'block';
                    // setTimeout(function () {
                    //     loadingDiv.style.display = 'none';
                    //     removeButton.style.display = 'block';
                    // }, 1000);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': '{{csrf_token()}}'
                        },
                        url : "{{ url('wl') }}",
                        data : {'status' : 1 ,'lot':'s'},
                        type : 'post',
                        success : function(result){
                            console.log("===== " + result + " =====");
                           
                        }
                    });
                });

                removeButton.addEventListener('click', function () {
                    removeButton.style.display = 'none';
                    addButton.style.display = 'block';
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': '{{csrf_token()}}'
                        },
                        url : "{{ url('wl') }}",
                        data : {'status' : 0 ,'lot':'s' },
                        type : 'post',
                        success : function(result){
                            console.log("===== " + result + " =====");
                            
                        }
                    });
                });
            });
        });
    </script>

@endpush
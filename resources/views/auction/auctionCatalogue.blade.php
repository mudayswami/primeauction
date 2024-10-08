@extends('auction.layout.masterLayout')

@push('meta')
    <title>Prime Auction</title>
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
    border-radius: 12px;
    }
    .catalogue-category {
    padding: 12px 0px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center
    }
    .cata-btn {
    padding: 1rem 2rem;
    background: var(--redc);
    text-decoration: none;
    color: white;
    font-weight: 600;
    border-radius: 12px;
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
    border-radius: 12px;
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
                <div class="col-lg-2 d-flex flex-column align-items-center">
                    <img class="auction-item-img"
                        src="{{'/primeshop/public/'.$auction['img']}}">
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
                        <span>Prime Auction</span>
                        <span> Ashton Under </span>
                        <span>Lyne United</span>
                    </div>
                </div>
                <div class="col-lg-8 py-2">
                    <div class="item-description">
                        {{$auction['description']}}
                    </div>
                    <div class="dates-section">
                        <div class="item-dates-header category-header">Auction Dates</div>
                        <div class="item-dates h6">
                            <div class=""><span class="fw-bold">Starts :</span> {{date('Y-M-d H:i:s',strtotime($auction['start']))}} BST</div>
                            <div class=""><span class="fw-bold">Ends :</span> {{date('Y-M-d H:i:s', strtotime($auction['end']))}} BST</div>
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
                <div class="col-lg-2 buying">
                    <a href="#">
                        <div class="cata-btn">Register to bid</div>
                    </a>
                    <div class="regulations">
                        <a class=" ">Terms & conditions</a>
                        <a class=" ">Important Information</a>
                        <a class=" ">Ask a question</a>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class=" category-header py-2">Featured Lots</div>
            <div class="featured-lot">
                <div class="card my-2 mx-1" style="width: 18rem;">
                    <a href="/">
                        <img src="https://portal-images.azureedge.net/auctions-2024/wi415932/images/efc76ed6-93ed-4385-aac2-35d066663c21.png?w=250"
                            class="card-img-top"
                            alt="https://portal-images.azureedge.net/auctions-2024/wi415932/images/efc76ed6-93ed-4385-aac2-35d066663c21.png?w=250">
                        <div class="card-body">
                            <p class="card-text">VR Virtual Reality VR3D Glasses Helmet VR Google Lens Adjustable For
                                Iphone, Android</p>
                        </div>
                    </a>
                </div>
                <div class="card my-2 mx-1" style="width: 18rem;">
                    <a href="/">
                        <img src="https://portal-images.azureedge.net/auctions-2024/wi415927/images/7cb50f34-e8cb-479c-b7bc-9a1cf44e61d2.png?w=250"
                            class="card-img-top"
                            alt="https://portal-images.azureedge.net/auctions-2024/wi415932/images/efc76ed6-93ed-4385-aac2-35d066663c21.png?w=250">
                        <div class="card-body">
                            <p class="card-text">VR Virtual Reality VR3D Glasses Helmet VR Google Lens Adjustable For
                                Iphone, Android</p>
                        </div>
                    </a>
                </div>
                <div class="card my-2 mx-1" style="width: 18rem;">
                    <a href="/">
                        <img src="https://portal-images.azureedge.net/auctions-2024/wi415968/images/079e823a-4dcd-4403-82ef-b369695e4d44.jpeg?w=250"
                            class="card-img-top"
                            alt="https://portal-images.azureedge.net/auctions-2024/wi415932/images/efc76ed6-93ed-4385-aac2-35d066663c21.png?w=250">
                        <div class="card-body">
                            <p class="card-text">VR Virtual Reality VR3D Glasses Helmet VR Google Lens Adjustable For
                                Iphone, Android</p>
                        </div>
                    </a>
                </div>
                <div class="card my-2 mx-1" style="width: 18rem;">
                    <a href="/">
                        <img src="https://portal-images.azureedge.net/auctions-2024/wi415932/images/efc76ed6-93ed-4385-aac2-35d066663c21.png?w=250"
                            class="card-img-top"
                            alt="https://portal-images.azureedge.net/auctions-2024/wi415932/images/efc76ed6-93ed-4385-aac2-35d066663c21.png?w=250">
                        <div class="card-body">
                            <p class="card-text">VR Virtual Reality VR3D Glasses Helmet VR Google Lens Adjustable For
                                Iphone, Android</p>
                        </div>
                    </a>
                </div>
                <div class="card my-2 mx-1" style="width: 18rem;">
                    <a href="/">
                        <img src="https://portal-images.azureedge.net/auctions-2024/wi415987/images/fdb53228-4b60-4f77-a2c6-1833350a1a30.png?w=250"
                            class="card-img-top"
                            alt="https://portal-images.azureedge.net/auctions-2024/wi415932/images/efc76ed6-93ed-4385-aac2-35d066663c21.png?w=250">
                        <div class="card-body">
                            <p class="card-text">VR Virtual Reality VR3D Glasses Helmet VR Google Lens Adjustable For
                                Iphone, Android</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-12">
                    <div class="subsearch ">
                        <div class="fw-bold py-1">There are 198 within this auction</div>
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
                                                    <label class="form-check-label">United Kindom</label>
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
                                            <label class="form-check-label">United Kindom</label>
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
                                    src="https://portal-images.azureedge.net/auctions-2024/wi415942/images/6b3d0e7e-6a89-4d4e-b7ed-602bf14fd18c.jpeg?w=250">
                            </div>
                            <div class="col-lg-7 px-4">
                                <div class="lot-number light-header py-1">{{$value['lot_num']}}</div>
                                <div class="lot-title category-header"><a href="catalogue">{{$value['title']}}</a></div>
                                <div class="lot-description  py-2">
                                    <p>{{$value['description']}}</p>
                                </div>
                                @foreach (json_decode($value['category'],true) as $category)
                                    <div class="tags "><span class="badge rounded-pill bg-web">{{$category}}</span></div>
                                @endforeach
                                <div class="extra">
                                    <div class="watchlist">
                                        <div class="add"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.62436 4.4241C3.96537 5.18243 2.75 6.98614 2.75 9.13701C2.75 11.3344 3.64922 13.0281 4.93829 14.4797C6.00072 15.676 7.28684 16.6675 8.54113 17.6345C8.83904 17.8642 9.13515 18.0925 9.42605 18.3218C9.95208 18.7365 10.4213 19.1004 10.8736 19.3647C11.3261 19.6292 11.6904 19.7499 12 19.7499C12.3096 19.7499 12.6739 19.6292 13.1264 19.3647C13.5787 19.1004 14.0479 18.7365 14.574 18.3218C14.8649 18.0925 15.161 17.8642 15.4589 17.6345C16.7132 16.6675 17.9993 15.676 19.0617 14.4797C20.3508 13.0281 21.25 11.3344 21.25 9.13701C21.25 6.98614 20.0346 5.18243 18.3756 4.4241C16.7639 3.68739 14.5983 3.88249 12.5404 6.02065C12.399 6.16754 12.2039 6.25054 12 6.25054C11.7961 6.25054 11.601 6.16754 11.4596 6.02065C9.40166 3.88249 7.23607 3.68739 5.62436 4.4241ZM12 4.45873C9.68795 2.39015 7.09896 2.10078 5.00076 3.05987C2.78471 4.07283 1.25 6.42494 1.25 9.13701C1.25 11.8025 2.3605 13.836 3.81672 15.4757C4.98287 16.7888 6.41022 17.8879 7.67083 18.8585C7.95659 19.0785 8.23378 19.292 8.49742 19.4998C9.00965 19.9036 9.55954 20.3342 10.1168 20.6598C10.6739 20.9853 11.3096 21.2499 12 21.2499C12.6904 21.2499 13.3261 20.9853 13.8832 20.6598C14.4405 20.3342 14.9903 19.9036 15.5026 19.4998C15.7662 19.292 16.0434 19.0785 16.3292 18.8585C17.5898 17.8879 19.0171 16.7888 20.1833 15.4757C21.6395 13.836 22.75 11.8025 22.75 9.13701C22.75 6.42494 21.2153 4.07283 18.9992 3.05987C16.901 2.10078 14.3121 2.39015 12 4.45873Z"
                                                        fill="#1C274C"></path>
                                                </g>
                                            </svg> Add to WatchList</div>
                                        <div class="loading d-none"></div>
                                        <div class="remove" style="display:none;"><svg width="64px" height="64px" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                                                        fill="#1C274C"></path>
                                                </g>
                                            </svg> Remove from WatchList</div>
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
                                    <div class="opening-bid"><span class="light-header">Opening Bid:</span>{{$value['start_bid']}} GBP</div>
                                    <div class="opening-bid"><a href="#">(?) Additional Fees</a></div>
                                </div>
                                <a href="catalogue">
                                    <a href="{{url('bid')}}"><div class="cata-btn">View & Bid</div></a>
                                </a>
                                <div>
                                    <div class="bidding-ends light-header">Bidding Ends: 1d 3h</div>
                                    <div class="lot-location"><span class="light-header">Lot Location:</span>Rochdale</div>
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    var watchlists = document.querySelectorAll('.watchlist');
    
    watchlists.forEach(function(watchlist) {
        var addButton = watchlist.querySelector('.add');
        var loadingDiv = watchlist.querySelector('.loading');
        var removeButton = watchlist.querySelector('.remove');
        
        addButton.addEventListener('click', function() {
            addButton.style.display = 'none';
            removeButton.style.display = 'block'; 
            setTimeout(function() {
                loadingDiv.style.display = 'none';
                removeButton.style.display = 'block'; 
            }, 1000);  
        });
        
        removeButton.addEventListener('click', function() {
            removeButton.style.display = 'none';
            addButton.style.display = 'block'; 
        });
    });
});
</script>

@endpush
@extends('auction.layout.masterLayout')

@push('meta')
    <title>Auctions</title>
@endpush


@push('styles')
    </style>
    <style>
        .category-header {
            font-weight: 700;
            margin-top: .5rem;
        }

        .primary-category {
            height: 100px;
            overflow: hidden;
        }

        .category {
            position: relative margin-bottom: 2.5rem;
        }

        .cateogory-item {}

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

        .auction-items {
            margin-top: 12px;
        }

        .auction-list-item {
            padding: 14px 14px 14px 0px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            margin-bottom: 2rem;
            border-radius: 4px;
        }

        .auction-list-item:hover {
            box-shadow: rgba(14, 30, 37, 0.12) 0px 0px 4px 0px, rgba(14, 30, 37, 0.32) 0px 0px 6px 0px;
        }

        .auction-item-img {
            border-radius: 4px;
            overflow: auto;
            max-width: 150px;
            /* width: 100%;
                            height: 100%;
                            object-fit: cover;
                            position: absolute; */
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
            border-radius: 4px;
        }

        .cata-btn:hover {
            background: white;
            color: var(--bluec) !important;
            border: solid 1px var(--redc);
        }

        .item-tags {
            padding: .5rem 0rem;
        }

        .filter-btn {
            color: var(--bluec);
            background: white;
            display: inline-block;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            min-width: 100%;
            padding: .5rem 2rem;
            border-radius: px;
            font-weight: 500;
            font-size: 20px;
        }

        .item-description {
            font-weight: 700;
        }


        .btn-filter {}

        @media(max-width:768px) {
            .auction-item-img {
                border-radius: 4px;
                overflow: auto;
            }

            .desktop-filter {
                display: none;
            }

            .item-description {
                padding: 1rem 0rem;
                font-weight: 700;
            }

        }
    </style>
@endpush

@push('content')
    @include('auction.include.auctionSearch')
    <main class="container" styles="min-height:50vh;">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="filter-btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
                    aria-controls="offcanvasMenu"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="form-check checkbox" data-href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Consumer Goods</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" data-href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">IT & Electricals</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" data-href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Automotive & Vehicle</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Industrial</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Other Industries</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Food & Beverage</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
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
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Homewares</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Toys</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Children & Baby Products</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Garden & Outdoor</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">It Accessories</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
                                            <label class="form-check-label">Perfumes & Cosmetics</label>
                                        </div>
                                    </div>
                                    <div class="category-item">
                                        <div class="form-check checkbox" href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
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
                                        <div class="form-check checkbox" data-href="auction?anushka">
                                            <input class="form-check-input" type="checkbox" href="auction/anushka"
                                                name="cg">
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
                                            <div class="form-check checkbox" data-href="auction?anushka">
                                                <input class="form-check-input" type="checkbox" href="auction/anushka"
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
                                <div class="form-check checkbox" data-href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Consumer Goods</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" data-href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">IT & Electricals</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" data-href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Automotive & Vehicle</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Industrial</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Other Industries</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Food & Beverage</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
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
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Homewares</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Toys</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Children & Baby Products</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Garden & Outdoor</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">It Accessories</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Perfumes & Cosmetics</label>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
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
                                <div class="form-check checkbox" data-href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label"><svg viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
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
                                    <div class="form-check checkbox" data-href="auction?anushka">
                                        <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                        <label class="form-check-label">United Kindom</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
            <div class="col-12 col-lg-9">
                <div class="auction-items">
                    @foreach ($auction as $key => $value)                    
                        <div class="auction-list-item">
                            <div class="row">
                                <div class="col-lg-3 col-12 d-flex justify-content-evenly align-items-center flex-column">
                                    <img class="auction-item-img" src="{{url($value['img'])}}">
                                    <div>
                                        <p>
                                            <svg viewBox="0 0 24 24" fill="none" width='42' height="42"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M12 7V12L14.5 10.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                                        stroke="#102343" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>{{$value['type']}}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="small">
                                            @if($value['location'])
                                                {{$value['location']}}
                                            @else
                                                Multiple Sites
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-12 d-flex flex-column  justify-content-center">
                                    <div class="item-description fs-5">
                                        {{$value['description']}}
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="dates-section">
                                            <div class="item-dates-header category-header">Auction Dates</div>
                                            <div class="item-dates">
                                                <div class="">Starts : {{date('d M y H:i:s', strtotime($value['start']))}} BST
                                                </div>
                                                <div class="">Ends : {{date('d M y H:i:s', strtotime($value['end']))}} BST</div>
                                            </div>
                                        </div>
                                        <div class="catalogue-btn">
                                            <a class="cata-btn" href="catalogue/{{$value['id']}}">view catalogue</a>
                                        </div>
                                    </div>
                                    <div class="item-tags">
                                        @foreach (json_decode($value['category'], true) as $category)
                                            <span class="badge rounded-pill bg-light text-dark">{{$category}}(134)</span>
                                        @endforeach
                                    </div>
                                    <!-- <div class="catalogue-category">
                                        <div class="auction-type fw-bold">
                                        </div>
                                        
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
        </div>
    </main>

@endpush


@push('scripts')
@endpush
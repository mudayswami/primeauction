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
            /* content: 'Show More '; */
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
            margin-bottom: 1.3rem;
            border-radius: 4px;
        }

        .auction-list-item:hover {
            box-shadow: rgba(14, 30, 37, 0.12) 0px 0px 4px 0px, rgba(14, 30, 37, 0.32) 0px 0px 6px 0px;
        }

        .auction-item-img {
            border-radius: 4px;
            overflow: auto;
            max-width: 120px;
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

        .read-more-btn {
    color: blue;
    border: none;
    cursor: pointer;
    }

    .preview {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2; 
    -webkit-box-orient: vertical;
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
                    <div class="list-group category-header d-none">Primary Category</div>
                    <div class="category ">
                        <div class="primary-category d-none">
                            <div class="category-item">
                                <div class="form-check checkbox" data-href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Consumer Goods</label>
                                </div>
                            </div>
                        <div class="show-more d-none">
                            <input type="checkbox" class="showmore" name="primary-show" id="primary-show">
                            <label class="showmore-label" for="primary-show"></label>
                        </div>
                    </div>
                    <div class="list-group category-header">Category</div>
                    <div class="category">
                        <div class="secondary-category">
                            @foreach($categories as $key => $value)
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?">
                                    <input class="form-check-input" type="checkbox" value="{{$value['category']}}" href="" id="cg_+{{$key}}" name="cg">
                                    <label for="cg_+{{$key}}" class="form-check-label">{{$value['category']}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="show-more">
                            <input type="checkbox" class="showmore" name="secondary-show" id="secondary-show">
                            <label class="showmore-label" for="secondary-show"></label>
                        </div>
                    </div>
                    <div class="list-group category-header d-none">Auction Type</div>
                    <div class="category d-none">
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
                        <div class="list-group category-header d-none">Country</div>
                        <div class="category d-none">
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

                </div>
                <section class="desktop-filter">
                    <div class="mobile"></div>
                    <div class="my-3  h4">Filter By</div>
                    <div class="list-group category-header d-none">Primary Category</div>
                    <div class="category ">
                        <div class="primary-category d-none">
                            <div class="category-item">
                                <div class="form-check checkbox" data-href="auction?anushka">
                                    <input class="form-check-input" type="checkbox" href="auction/anushka" name="cg">
                                    <label class="form-check-label">Consumer Goods</label>
                                </div>
                            </div>
                        <div class="show-more d-none">
                            <input type="checkbox" class="showmore" name="primary-show" id="primary-show">
                            <label class="showmore-label" for="primary-show"></label>
                        </div>
                    </div>
                    <div class="list-group category-header">Category</div>
                    <div class="category">
                        <div class="secondary-category">
                            @foreach($categories as $key => $value)
                            <div class="category-item">
                                <div class="form-check checkbox" href="auction?">
                                    <input class="form-check-input" type="checkbox" value="{{$value['category']}}" href="" id="cg_+{{$key}}" name="cg">
                                    <label for="cg_+{{$key}}" class="form-check-label">{{$value['category']}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="show-more">
                            <input type="checkbox" class="showmore" name="secondary-show" id="secondary-show">
                            <label class="showmore-label" for="secondary-show"></label>
                        </div>
                    </div>
                    <div class="list-group category-header d-none">Auction Type</div>
                    <div class="category d-none">
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
                        <div class="list-group category-header d-none">Country</div>
                        <div class="category d-none">
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
                    @foreach ($lots as $key => $value)                    
                    <div class=" auction-list-item" data-category="{{json_decode($value['category'], true)[0]}}" data-category-1="{{isset(json_decode($value['category'], true)[1]) ? json_decode($value['category'], true)[1] : ''}}">
                            <div class="row">
                                <div class="col-lg-2 ">
                                    <img class="auction-item-img "
                                    src="{{ url($value["img"])}}">
                                </div>
                                <div class="col-lg-7 px-4">
                                    <div class="lot-number light-header py-1">{{$value['lot_num']}}</div>
                                    <div class="lot-title category-header"><a href="{{url('bid').'/'.$value['id']}}">{{$value['title']}}</a></div>
                                    <div class="lot-description  py-2">
                                    <p id="text_{{$value['id']}}" class="preview" style="display: -webkit-box;">{{$value['description']}}</p>
                                        <button onclick="toggleReadMore({{$value['id']}})" class="read-more-btn" id="readMoreBtn">Read More</button>

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
                                <div class="col-lg-3 px-2 text-lg-center text-start  d-flex flex-column px-4 justify-content-evenly">
                                    <div>
                                        <div class="opening-bid d-none"><span class="light-header">Opening
                                                Bid:</span>{{$value['start_bid']}} GBP</div>
                                        <div class="opening-bid"><a href="#">(?) Additional Fees</a></div>
                                    </div>
                                    <a href="{{url('bid').'/'.$value['id']}}" class="">
                                            <div class="cata-btn">@if((date($value->auction['end'])) < (date('Y-m-d H:i:s')) ) Bidding Closed @else View & Bid @endif</div>
                                    </a>
                                    <div>
                                        <div class="bidding-ends light-header">Bidding Ends: {{date('d M y H:i:s', strtotime($value->auction['end']))}}</div>
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
    </main>

@endpush


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('input[name="cg"]');
    const allItems = document.querySelectorAll('.auction-list-item');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {

            const selectedCategories = Array.from(checkboxes)
                .filter(cb => cb.checked)   
                .map(cb => cb.value);       
            
            filterItems(selectedCategories);
        });
    });

    function filterItems(categories) {
        allItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');  
            const itemCategory1 = item.getAttribute('data-category-1'); 
            if (categories.length === 0 || categories.includes(itemCategory) || categories.includes(itemCategory1)) {
                item.style.display = ''; 
            } else {
                item.style.display = 'none';
            }
        });
    }
});
</script>
<script>
        function toggleReadMore(e) {
            var moreContent = document.getElementById("text_"+e);
            var btnText = document.getElementById("readMoreBtn");
            
            if (moreContent.style.display === "-webkit-box") {
                moreContent.style.display = "";  
                moreContent.classList.remove("preview");  
                btnText.innerHTML = "Read Less";      
            } else {
                moreContent.style.display = "-webkit-box";   
                moreContent.classList.add("preview");  
                btnText.innerHTML = "Read More";       
            }
        }
    </script>
@endpush
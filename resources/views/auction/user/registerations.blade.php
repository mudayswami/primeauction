@extends('auction.layout.masterLayout')

@push('meta')

@endpush


@push('styles')
    <style>
        .left-nav {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px !important;
        }

        .profile-details {
            box-shadow: rgba(9, 30, 66, 0.25) 0px 0px 10px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
            border-radius: 8px;
        }

        .submit-btn {
            text-align: center;
            padding: .6rem 2rem;
            background: var(--bluec);
            text-decoration: none;
            color: white;
            font-weight: 600;
            border-radius: 8px;
        }

        .form-label {
            font-weight: 600;
            font-size: large;
        }

        .form-control:focus {
            border-color: none;
            border: none;
            box-shadow: 0 0 0 .25rem rgba(255, 1, 60, .15);
        }

        .form-control {
            font-size: large;
            padding: 10px 10px;
            border-radius: 8px;
        }

        .text-red {
            color: red;
        }
        .auction-items {
            margin-top: 12px;
        }

        .auction-list-item {
            padding: 14px 14px 14px 0px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            margin-bottom: 1rem;
            border-radius: 4px;
        }

        .auction-list-item:hover {
            box-shadow: rgba(14, 30, 37, 0.12) 0px 0px 4px 0px, rgba(14, 30, 37, 0.32) 0px 0px 6px 0px;
        }

        .auction-item-img {
            border-radius: 4px;
            overflow: auto;
            max-width: 100px;
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
    <div class="container my-3">
        <div class="row">

            <h4 class="text-center fw-bold py-3" id="page-heading"></h4>

            <div class="col-sm-12 col-md-12 col-lg-3">
                <div>
                    <ul class="list-group my-2 left-nav">
                        <li class="list-group-item"><b>Profile</b></li>
                        <li class="list-group-item"><a href="{{url('account/profile')}}">Details</a></li>
                        <li class="list-group-item"><a href="{{url('account/cards')}}">Payment Cards</a></li>
                        <li class="list-group-item"><a href="{{url('account/address')}}">Address</a></li>
                    </ul>
                    <ul class="list-group my-2 left-nav">
                        <li class="list-group-item"><b>Activity</b></li>
                        <li class="list-group-item"><a href="{{url('account/registeration')}}">Registerations</a></li>
                        <li class="list-group-item"><a href="{{url('account/placed-bids')}}">Placed Bids</a></li>
                        <li class="list-group-item"><a href="{{url('account/won-lots')}}">Won Lots</a></li>
                        <li class="list-group-item"><a href="{{url('account/lost-lots')}}">Lost Lots</a></li>
                        <li class="list-group-item"><a href="{{url('account/watchlist')}}">Watchlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-9" id="main-content">
                <div class="container-fluid ">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="mb-3 auction-items">
                                @foreach ($auction as $key => $value)                    
                        <div class="auction-list-item">
                            <div class="row">
                                <div class="col-lg-3 col-12 d-flex justify-content-evenly align-items-center flex-column">
                                    <img class="auction-item-img" src="{{'/primeshop/public/' . $value['img']}}">
                                    
                                    <div>
                                        <div>
                                            <span>
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
                                            </span>
                                        </div>
                                        <div>
                                            <span class="small">
                                                @if($value['location'])
                                                    {{$value['location']}}
                                                @else
                                                    Multiple Sites
                                                @endif
                                            </span>
                                    </div>
                                    </div>
                                <div>
                                @if($value['approved']== 0)
                                <span class="badge btn-outline bg-warning">Pending</span>
                                @elseif($value['approved']== 1)
                                <span class="badge btn-outline bg-success ">Approved</span>
                                @elseif($value['approved']== 2)
                                <span class="badge btn-outline bd-danger">Not approved</span>
                                @endif
                                </div>
                                </div>
                                <div class="col-lg-9 col-12 d-flex flex-column  justify-content-center">
                                    <div class="item-description fs-6">
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
                                            <a class="cata-btn" href="{{url("catalogue/".$value['id'])}}">view catalogue</a>
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

            </div>
        </div>
    </div>
    </div>
@endpush


@push('scripts')
@endpush
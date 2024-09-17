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
            box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
            border-radius:6px;
            padding:1rem 1rem;
            margin-bottom:1rem;
            position:relative;
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

        .bidstatus{
            font-size: 12px;
            transform: rotate(45deg);
            position: absolute;
            left: -16px;
            color: white;
            overflow: hidden;
            bottom: 6px;
            width: 64px;
            border-radius: 0px 0px 47px 58px;
            text-align: center;

        }

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
                        <li class="list-group-item {{url()->full() == url('account/profile') ? 'active' : '' }}"><a href="{{url('account/profile')}}">Details</a></li>
                        <li class="list-group-item d-none"><a href="#">Payment Cards</a></li>
                        <li class="list-group-item {{url()->full() == url('account/address') ? 'active' : '' }}"><a href="{{url('account/address')}}">Address</a></li>
                    </ul>
                    <ul class="list-group my-2 left-nav">
                        <li class="list-group-item"><b>Activity</b></li>
                        <li class="list-group-item {{url()->full() == url('account/registeration') ? 'active' : '' }}"><a href="{{url('account/registeration')}}">Registerations</a></li>
                        <li class="list-group-item {{url()->full() == url('account/placed-bids') ? 'active' : '' }}"><a href="{{url('account/placed-bids')}}">Placed Bids</a></li>
                        <li class="list-group-item {{url()->full() == url('account/won-lots') ? 'active' : '' }}"><a href="{{url('account/won-lots')}}">Won Lots</a></li>
                        <li class="list-group-item {{url()->full() == url('account/lost-lots') ? 'active' : '' }}"><a href="{{url('account/lost-lots')}}">Lost Lots</a></li>
                        <li class="list-group-item {{url()->full() == url('account/watchlist') ? 'active' : '' }}"><a href="{{url('account/watchlist')}}">Watchlist</a></li>
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
                    <h3 class="text-left fw-bolder py-3" id="page-heading">Placed Bids</h3>

                        <div class="col-sm-12 col-md-12 col-lg-12">
                            @foreach ($lots as $key => $value)
                        <div class="auction-items">
                            <span class="bidstatus 
                            @if($value['bid_status'] == 'leading')
                            bg-success">Leading
                            @elseif($value['bid_status'] == 'outbid')
                            bg-warning">Outbid
                            @endif
                        </span>
                            <div class="row">
                                <div class="col-lg-2 ">
                                    <img class="auction-item-img "
                                    src="{{url('/') . '/' . $value['img']}}">
                                </div>
                                <div class="col-lg-7 px-4">
                                    <div class="lot-title category-header"><a href="{{url('bid/'.$value['id'])}}">{{$value['title']}}</a></div>
                                    <div class="lot-description  py-2">
                                        <p>{{$value['description']}}</p>
                                    </div>
                                    @if(isset($value['category']))
                                    <div class="d-flex">
                                    @foreach (json_decode($value['category'], true) as $category)
                                        <div class="tags mx-1"><span class="badge rounded-pill bg-web">{{$category}}</span></div>
                                    @endforeach
                                    </div>
                                    @endif
                                   
                                </div>
                                <div class="col-lg-3 px-2 text-lg-center text-start  d-flex flex-column justify-content-evenly">
                                    
                                    <a href="catalogue">
                                        
                                    </a>
                                    <div class="d-none">
                                        <div class="bidding-ends light-header">Bidding Ends: </div>
                                        <div class="lot-location"><span class="light-header">Lot
                                                Location:</span></div>
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
    </div>
    </div>
@endpush


@push('scripts')
@endpush
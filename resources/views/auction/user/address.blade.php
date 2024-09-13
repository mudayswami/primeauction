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

        .plus {
            background: #333;
            height: 50px;
            position: relative;
            width: 8px;
        }

        .plus:after {
            background: #333;
            content: "";
            height: 8px;
            left: -21px;
            position: absolute;
            top: 21px;
            width: 50px;
        }

        .add-address{
            border: dotted 3px #0000004f;
            max-width: 100%;
            border-radius: 8px;
            text-align: center;
            font-size: 1.5rem;
            height:100%;
        }

        .addresses{
            border: solid 3px #0000004f;
            max-width: 100%;
            border-radius: 8px;
            text-align: center;
            
        }
    </style>

@endpush


@push('content')
    <div class="container my-3">
        <div class="row">

            <h4 class="text-center fw-bold py-3" id="page-heading">Address</h4>
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
                <div class="container-fluid p-5 profile-details my-2">
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
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="add-address m-2 p-3">
                                <a href="{{url('account/add-address')}}"><b class="fs-1">+</b> <p class="fw-bold ">Click here to add a new address</p></a>
                            </div>
                        </div>
                        
                        @foreach($address as $key => $value)
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="addresses">
                            <div class=" m-2 p-3">
                                <span class="fs-3 fw-bold">{{$value->address1}}</span>
                                <span class="fs-4">{{$value->address2}}</span>
                                <span class="fs-4">{{$value->address3}}</span>
                                <span class="fs-4">{{$value->town}}, </span>
                                <span class="fs-4">{{$value->country}}</span>
                                <span class="fs-4">{{$value->post_code}}</span>
                                </div>
                                <div>
                                    <a class="py-3 bg-secondary fw-bold d-block text-white" href="{{url('remove-address/'.$value->id)}}">Remove Address</a>
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
@endpush


@push('scripts')
@endpush
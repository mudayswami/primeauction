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
    </style>

@endpush


@push('content')
    <div class="container my-3">
        <div class="row">

            <h4 class="text-center fw-bold py-3" id="page-heading">Profile Details</h4>

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
                        <li class="list-group-item"><a href="#">Registerations</a></li>
                        <li class="list-group-item"><a href="#">Placed Bids</a></li>
                        <li class="list-group-item"><a href="#">Won Lots</a></li>
                        <li class="list-group-item"><a href="#">Lost Lots</a></li>
                        <li class="list-group-item"><a href="#">Watchlist</a></li>
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
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="mb-3 mt-3">
                                <label class="form-label" for="email">Email</label>
                                <p class="p-2" id="email" disabled>anubhavmalik12@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <form action="{{url('update-profile')}}" method="post" class="mt-3">
                        <div class="mb-3">
                            @csrf
                            <label class="form-label" for="first_name">First Name <span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="first_name" id="first_name"
                                value="{{$data->first_name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="last_name">Last Name <span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="last_name" id="last_name"
                                value="{{$data->last_name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="company">Company Name</label>
                            <input type="text" class="form-control" name="company" id="company" value="{{$data->company}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone_number">Phone Number</label>
                            <input type="number" class="form-control" name="phone_number" id="phone_number"
                                value="{{$data->phone_number}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="vat_number">Vat number</label>
                            <input type="number" class="form-control" name="vat_number" id="vat_number"
                                value="{{$data->vat_number}}">
                        </div>
                        <button class="submit-btn " type="submit">Update Profile</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endpush


@push('scripts')
@endpush
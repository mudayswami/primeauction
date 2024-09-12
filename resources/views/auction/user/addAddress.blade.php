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
            background: var(--redc);
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
            <h4 class="text-center fw-bold py-3" id="page-heading">Add Address</h4>
            <div class="col-sm-12 col-md-12 col-lg-9 mx-auto" id="main-content">
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
                    
                    <form action="{{url('add-address')}}" method="post" class="mt-3">
                        <div class="mb-3">
                            @csrf
                            <label class="form-label" for="address1">Address 1<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="address1" id="address1" value="{{old('address1')}}"
                                >
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address2">Address 2</label>
                            <input type="text" class="form-control" name="address2" id="address2" value="{{old('address2')}}"
                                >
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address3">Address 3</label>
                            <input type="text" class="form-control" name="address3" id="address3" value="{{old('address3')}}" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="town">Town / City <span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="town" id="town" value="{{old('town')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="post_code">Post Code<span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="post_code" id="post_code" value="{{old('post_code')}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="country">Country <span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="country" id="country" value="{{old('country')}}">
                        </div>
                        <a href="{{url()->previous()}}"><button class="btn btn-secondary fs-large fw-bold px-3 py-2 rounded mx-2" type="button">Cancel</button></a><button class=" mx-2 btn submit-btn " type="submit">Save and Continue</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endpush


@push('scripts')
@endpush
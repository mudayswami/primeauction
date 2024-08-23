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
    font-size:16px;
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

    }
    .item-description {
    font-weight: 700;
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

    .text-red{
        color:red;
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
    <section>
        <div class="container">
            <div class="row">
                <div class="pt-5">
                    <p class="fs-5 fw-bold text-center">Register for the auction</p>
                    <hr>
                </div>
                <div class="col-lg-2 d-flex flex-column align-items-center">
                    <img class="auction-item-img" src="{{'/primeshop/public/' . $auction['img']}}">
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
            <hr>
        </div>
        <form action="{{url('')}}/catalogue/{{$auction['id']}}/register" method="post" id="myform">
            @csrf
            <div class="container pt-4 mx-auto">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center mx-auto">
                        <div class="text-center">
                            <p>Registration Details</p>
                            <hr>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label class="  fw-light" for="payment-card">Payment Card <span class="text-red">*</span></label>
                            </div>
                            <div class="col-9">
                                <input class=" form-control" type="text" name="payment-card" id="payment-card">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label class=" fw-light" for="address">Address <span class="text-red">*</span></label>
                            </div>
                            <div class="col-8 ">
                                <select class="form-select" name="address" id="address">
                                    @foreach ($address as $value)
                                        <option value="{{$value['address1']}} {{$value['address2']}} {{$value['address3']}},{{$value['town']}},{{$value['country']}}-{{$value['post_code']}}"> <p>{{$value['address1']}}</p><br> <p>{{$value['address2']}}</p><br> <p>{{$value['address3']}}</p><br> <p>{{$value['town']}}</p><br> <p>{{$value['Country']}}</p> <p>-{{$value['post_code']}}</p></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-1">
                                <a class="btn btn-outline-primary fs-5 fw-bold" href="{{url('account/add-address')}}"
                                    id="add-number">+</a>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label class="form-check-label fw-light" for="phone_number">Phone Number <span class="text-red">*</span></label>
                            </div>
                            <div class="col-8 ">
                                <input class="form-select" value="{{$phone_number}}" name="phone_number" id="phone_number">
                                    <!-- <option></option> -->
                                </input>
                            </div>
                            <div class="col-1">
                                <a class="btn btn-outline-primary fs-5 fw-bold" href="{{url('account/add-phone')}}"
                                    id="add-number">+</a>
                            </div>
                        </div>
                        <div class="col-10 form-group">
                            <input type="checkbox" class="p-2" name="is_vat" id="is_vat">
                            <label for="is_vat" class="form-label">Exempt from VAT</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label class="form-check-label fw-light" for="vat_number">Vat Number</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control" type="text" name="vat_number" id="vat_number" disabled>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-3">
                                <label class="form-check-label fw-light" for="company">Company</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control" type="text" name="company" id="company">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-4">
                            <p>In order to complete the auction registration, please confirm the following:</p>
                            <div class="form-group">
                                
                                <label for="terms&conditions"><input type="checkbox" name="terms&conditions" id="terms&conditions"> I confirm that I have read and accept the auction's <a
                                        href="#"><u>terms & conditions</u></a></label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-auto">
                                <a href="{{url()->previous()}}"><button
                                        class="btn btn-secondary fs-large fw-bold px-3 py-2 rounded mx-auto"
                                        type="button">Cancel</button></a>
                            </div>
                            <div class="col-auto">
                                <button class="mx-auto btn cata-btn" id="submit-btn" type="submit" disabled>Complete Registeration</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endpush

@push('scripts')
<script>
    'use strict';
    const is_vat = document.getElementById('is_vat');
    const vat = document.getElementById('vat_number');
    is_vat.addEventListener('change',()=>{
        if(is_vat.checked){
            vat.disabled =false;
        }else{
            vat.disabled =true;
        }
    });

    const form = document.getElementById('myform');
    const termsconditons = document.getElementById('terms&conditions');
    const submit = document.getElementById('submit-btn');
    form.addEventListener('submit',(e)=>{
        if(!termsconditons.checked){
            e.preventDefault();
        }
    });

    termsconditons.addEventListener('change',()=>{
        if(termsconditons.checked){
            submit.disabled = false;
        }else{
            submit.disabled = true;
        }
    });
</script>
@endpush
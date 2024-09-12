@extends('store.storeLayout')

@push('meta')
@endpush

@push('styles')
    body{
    }
    .responsive-font{
    font-weight:700;
    font-size:.95rem;
    }
    .btn-d {
    background: #fff;
    backface-visibility: hidden;
    border-radius: .375rem;
    border-style: solid;
    border-width: .125rem;
    box-sizing: border-box;
    color: var(--redc);
    cursor: pointer;
    display: inline-block;
    font-family: Circular,Helvetica,sans-serif;
    font-size: 1.125rem;
    font-weight: 700;
    letter-spacing: -.01em;
    line-height: 1.3;
    padding: .875rem 1.125rem;
    position: relative;
    text-decoration: none;
    transform: translateZ(0) scale(1);
    transition: transform .2s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width:100%;
    text-align:center;
    }

    .btn-d:not(:disabled):hover {
    transform: scale(1.05);
    }

    .btn-d:not(:disabled):hover:active {
    transform: scale(1.05) translateY(.125rem);
    }

    .btn-d:focus {
    outline: 0 solid transparent;
    }

    .btn-d:focus:before {
    content: "";
    left: calc(-1*.375rem);
    pointer-events: none;
    position: absolute;
    top: calc(-1*.375rem);
    transition: border-radius;
    user-select: none;
    }

    .btn-d:focus:not(:focus-visible) {
    outline: 0 solid transparent;
    }

    .btn-d:focus:not(:focus-visible):before {
    border-width: 0;
    }

    .btn-d:not(:disabled):active {
    transform: translateY(.125rem);
    }
    .discount-price{
    margin-right:1rem;
    }
    .og-price{
    margin-right:1rem;
    }
    .discount{
    color:green;
    }
    .card-img-top {
    aspect-ratio:3 /2;
    }

    .filters{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    }

    .card{
    border:none;
    }

    .card-img-top {
    width: 100%;
    height: 400px;
    object-fit: cover;
    }
    .card {
    height: 100%;
    display: flex;
    flex-direction: column;
    }
    .card-body {
    flex: 1 1 auto; /* Ensure the card body grows to fill the space */
    }
    @media(max-width:768px){
    .responsive-font{
    font-size:0.75rem;
    }
    .btn-d {
    background: #fff;
    backface-visibility: hidden;
    border-radius: .375rem;
    border-style: solid;
    border-width: .125rem;
    box-sizing: border-box;
    color: var(--redc);
    cursor: pointer;
    display: inline-block;
    font-family: Circular,Helvetica,sans-serif;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: -.01em;
    line-height: 1.3;
    padding: .4rem .4rem;
    position: relative;
    text-decoration: none;
    transform: translateZ(0) scale(1);
    transition: transform .2s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width:100%;
    text-align:center;
    }
    .card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    }
    }
    a{
    text-decoration:none;
    color:black;
    }
    a:hover{
    color:black;
    }
    a:after {
    background: none repeat scroll 0 0 transparent;
    bottom: 0;
    content: "";
    display: block;
    height: 2px;
    left: 50%;
    position: absolute;
    background: #fff;
    transition: width 0.3s ease 0s, left 0.3s ease 0s;
    width: 0;
    }
@endpush

@push('content')
    <main>
        <section>
            <div class="container py-5">
                <div class="row g-1">
                    <h1>Depratments</h1>
                </div>
                <div class="row g-1 mt-4 mb-3">
                    <div class="col-lg-4 col-6 ">
                        <a href="{{url('store/products')}}">
                            <div class="card ">
                                <img src="{{url('assets/department/appliances.jpg')}}"
                                    class="card-img-top zoom-eff" alt="...">
                                <div class="card-body ">
                                <a href="{{url('store/products?department=small-domestic-appliances')}}"><h4 class="card-text underline-anim">Small Domestic Appliances <svg
                                            xmlns="http://www.w3.org/2000/svg" width="84" height="34" fill="currentColor"
                                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                        </svg></h4>
                                        </a> 
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-6 ">
                        <div class="card ">
                            <img src="{{url('assets/department/homeware.jpeg')}}" class="card-img-top zoom-eff"
                                alt="...">
                            <div class="card-body ">
                            <a href="{{url('store/products?department=homeware')}}">
                                <h4 class="card-text underline-anim">Homeware <svg xmlns="http://www.w3.org/2000/svg"
                                        width="84" height="34" fill="currentColor" class="bi bi-arrow-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg></h4>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-4 col-6 ">
                        <div class="card ">
                            <img src="{{url('assets/department/jewellery.jpeg')}}" class="card-img-top zoom-eff"
                                alt="...">
                            <div class="card-body ">
                                <a href="{{'store/products?department=jewellery'}}"><h4 class="card-text underline-anim">Jewellery <svg xmlns="http://www.w3.org/2000/svg"
                                        width="84" height="34" fill="currentColor" class="bi bi-arrow-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg></h4></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-6 ">
                        <div class="card ">
                            <img src="{{url('assets/department/healthbeauty.jpeg')}}"
                                class="card-img-top zoom-eff" alt="...">
                            <div class="card-body ">
                            <a href="{{'store/products?department=health-beauty'}}">
                                <h4 class="card-text underline-anim">Health & Beauty <svg xmlns="http://www.w3.org/2000/svg"
                                        width="84" height="34" fill="currentColor" class="bi bi-arrow-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg></h4></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-6 ">
                        <div class="card ">
                            <img src="{{url('assets/department/cloth.jpeg')}}" class="card-img-top zoom-eff"
                                alt="...">
                            <div class="card-body ">
                            <a href="{{'store/products?department=clothing'}}">
                                <h4 class="card-text underline-anim">Clothing <svg xmlns="http://www.w3.org/2000/svg"
                                        width="84" height="34" fill="currentColor" class="bi bi-arrow-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg></h4></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-6 ">
                        <div class="card ">
                            <img src="{{url('assets/department/baby.jpeg')}}" class="card-img-top zoom-eff"
                                alt="...">
                            <div class="card-body ">
                            <a href="{{'store/products?department=baby-toddler'}}">
                                <h4 class="card-text underline-anim">Baby and Toddler <svg
                                        xmlns="http://www.w3.org/2000/svg" width="84" height="34" fill="currentColor"
                                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg></h4>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-6 ">
                        <div class="card ">
                            <img src="{{url('assets/department/haircare.jpeg')}}" class="card-img-top zoom-eff"
                                alt="...">
                            <div class="card-body ">
                            <a href="{{'store/products?department=hair-care'}}">
                                <h4 class="card-text underline-anim">Hair Care <svg xmlns="http://www.w3.org/2000/svg"
                                        width="84" height="34" fill="currentColor" class="bi bi-arrow-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg></h4>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-6 ">
                        <div class="card ">
                            <img src="{{url('assets/department/furniture.jpeg')}}" class="card-img-top zoom-eff"
                                alt="...">
                            <div class="card-body ">
                            <a href="{{'store/products?department=furniture'}}">
                                <h4 class="card-text underline-anim">Furniture <svg xmlns="http://www.w3.org/2000/svg"
                                        width="84" height="34" fill="currentColor" class="bi bi-arrow-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endpush

@push('scripts')
@endpush
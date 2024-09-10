@extends('store.storeLayout')

@push('meta')
@endpush

@push('styles')
    body{
    }
    .responsive-font{
    font-weight:300;
    font-size:1rem;
    text-align:center;
    min-height:3rem;
    }
    .btn-d {
    border-radius: .375rem;
    border-style: solid;
    border-width: .125rem;
    box-sizing: border-box;
    background:var(--redc);
    color: white;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: -.01em;
    line-height: 1.3;
    padding: .6rem .4rem;
    text-decoration: none;
    transform: translateZ(0) scale(1);
    transition: transform .2s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width:50%;
    display:inline-block;
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
    object-fit:contain;
    aspect-ratio:3 /2;
    }

    .filters{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    }

    .card{
    border:none !important;
    box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    margin: 8px 5px;
    }
    @media(max-width:768px){
    .responsive-font{
    font-size:0.75rem;
    text-align:center;
    }
    .btn-d {
    border-radius: .375rem;
    border-style: solid;
    border-width: .125rem;
    box-sizing: border-box;
    background:var(--redc);
    color: white;
    box-sizing: border-box;
    cursor: pointer;
    display: inline-block;
    font-family: Circular,Helvetica,sans-serif;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: -.01em;
    line-height: 1.3;
    padding: .775rem 1rem;
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
    }
@endpush

@push('content')
    <main>
        <section>
            <div class="container py-5">
                <div class="row g-1">
                    <h1>Products</h1>
                </div>
                <div class=" mt-5 mb-3">
                    <div class="filters">
                        <div class="col-6">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Filter: Price <i class="bi bi-caret-down"></i>
                            </button>
                            <div class="dropdown-menu p-4" aria-labelledby="dropdownMenuButton1">
                                <form id="price-filter d-flex flex-row">
                                    <div class="form-group">
                                        <label id="fname-label" for="minimum">Minimum:</label>
                                        <input type="text" name="minimum" id="minimum" placeholder="£" class="form-control"
                                            required="">
                                    </div>
                                    <div class="form-group">
                                        <label id="fname-label" for="maximum">Maximum:</label>
                                        <input type="text" name="maximum" id="maximum" placeholder="£" class="form-control"
                                            required="">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div>
                            <div class="col-6">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort: <i class="bi bi-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item " href="#">Featured</a></li>
                                    <li><a class="dropdown-item " href="#">Best Selling</a></li>
                                    <li><a class="dropdown-item " href="#">Alphabetically, A-Z</a></li>
                                    <li><a class="dropdown-item " href="#">Alphabetically, Z-A</a></li>
                                    <li><a class="dropdown-item " href="#">Price: Low to High</a></li>
                                    <li><a class="dropdown-item " href="#">Price: High to Low</a></li>
                                    <li><a class="dropdown-item " href="#">Date: New to Old</a></li>
                                    <li><a class="dropdown-item " href="#">Date: Old to New</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-1">
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-6 ">
                        <div class="card">
                            <a href="{{url('store/item').'/'.$product->id}}"><img src="{{url('').'/'.$product->img}}"
                                    class="card-img-top zoom-eff" alt="..."></a>
                            <div class="card-body">
                                <p class="card-text responsive-font">{{$product->title}}</p>
                                <div class="card-title d-flex flex-row justify-content-around text-align">
                                    <h5 class="responsive-font discount-price"><strong>£{{$product->discount_price}}</strong></h5>
                                    <h5 class="responsive-font og-price"><del>£{{$product->original_price}}</del></h5>
                                    <h5 class="responsive-font discount"><em>{{$product->discount_percentage}}% Off</em></h5>
                                </div>
                                <div class="card-text text-center"><span class=" btn-d responsive-font">Add to cart</span></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endpush

@push('scripts')
@endpush
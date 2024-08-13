<nav class="navbar navbar-expand-lg navbar-light bg-white fw-normal fs-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/store')}}"><img style="width:105px;" src="{{url('assets/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex mx-auto">
                <input class="form-control inp fs-5" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-search" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if(session('user_data'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, {{session('user_data')['first_name']}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="d-flex fw-bold ">
                                <div>

                                    <li><a class="dropdown-item" href="">{{session('user_data')['email']}}</a></li>
                                    <li><a class="dropdown-item" href="">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>

                                </div>
                            </div>

                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{url('login')}}">Login</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('auction')}}">Auction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('store')}}">Buy Now</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Auction Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="d-flex fw-bold ">
                            <div>

                                <li><a class="dropdown-item" href="{{url('category')}}">Retail Returns</a></li>
                                <li><a class="dropdown-item" href="{{url('category')}}">Liquidations</a></li>
                                <li><a class="dropdown-item" href="{{url('category')}}">High Street Goods</a></li>
                                <li><a class="dropdown-item" href="{{url('category')}}">Children & Baby</a></li>
                                <li><a class="dropdown-item" href="{{url('category')}}">Electronic</a></li>
                                <li><a class="dropdown-item" href="{{url('category')}}">Home Improvement</a></li>
                                <li><a class="dropdown-item" href="{{url('category')}}">Bathroomz</a></li>
                                <li><a class="dropdown-item" href="{{url('category')}}">Antiques & Collectible</a></li>
                            </div>
                            <div>
                                <li><a class="dropdown-item" href="{{url('catorgory')}}">Art</a></li>
                                <li><a class="dropdown-item" href="{{url('catorgory')}}">Jewellary</a></li>
                                <li><a class="dropdown-item" href="{{url('catorgory')}}">Watches</a></li>
                                <li><a class="dropdown-item" href="{{url('catorgory')}}">Fashion</a></li>
                                <li><a class="dropdown-item" href="{{url('catorgory')}}">Handbags</a></li>
                                <li><a class="dropdown-item" href="{{url('catorgory')}}">Cars & Automotive</a></li>
                                <li><a class="dropdown-item" href="{{url('catorgory')}}">Plant & Machinery</a></li>
                            </div>
                        </div>
                        <!-- <li><hr class="dropdown-divider"></li> -->
                        <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('aboutus')}}">About Us</a>
                </li>


            </ul>

        </div>
    </div>
</nav>
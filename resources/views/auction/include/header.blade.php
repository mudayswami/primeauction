<nav class="navbar navbar-expand-lg navbar-light bg-white fw-normal ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}"><img style="width:105px;" src="{{url('assets/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- <form class="d-flex mx-auto ">
                <input class="form-control inp" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-search" type="submit">Search</button>
            </form> -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if(session('user_data'))
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-light dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, {{session('user_data')['first_name']}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="d-flex fw-light ">
                                <div>

                                    <li class="category-item"><a class="dropdown-item" href="">{{session('user_data')['email']}}</a></li>
                                    <li class="category-item"><a class="dropdown-item" href="{{url('account/profile')}}">Profile</a></li>
                                    <li class="category-item"><a class="dropdown-item" href="{{url('dashboard')}}">Dashboard</a></li>
                                    <li class="category-item"><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>

                                </div>
                            </div>

                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active fw-light" aria-current="page" href="{{url('login')}}">Login</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link active fw-light" aria-current="page" href="{{url('auction')}}">Auctions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-light" href="{{url('store')}}">Buy Now</a>
                </li>
                <li class="nav-item fw-light">
                    <a class="nav-link active" aria-current="page" href="{{url('sell-us')}}">Sell</a>
                </li>
                <li class="nav-item fw-light dropdown ">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Auction Category
                    </a>
                    <ul class="dropdown-menu px-4 dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
                        <div class="d-flex fw-light ">
                            <div class="row ">
                                <?php $category = category();
                                $size = sizeof($category) ?>
                                @foreach($category as $key => $value)
                                <li class="category-item col-lg-6 col-6 my-2"><a class="" href="{{url('category')}}">{{$value->category}}</a></li>
                                <?php  
                                if(8 === $key){
                                    //echo '</div><div>';
                                }
                                ?> 
                                @endforeach
                            </div>
                        </div>
                        <!-- <li><hr class="dropdown-divider"></li> -->
                        <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                </li>
                <li class="nav-item fw-light">
                    <a class="nav-link active" aria-current="page" href="{{url('aboutus')}}">About Us</a>
                </li>
                


            </ul>

        </div>
    </div>
</nav>
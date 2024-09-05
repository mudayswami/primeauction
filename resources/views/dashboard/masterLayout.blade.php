<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="{{url('assets/logo-bg.png')}}">
    @stack('meta')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bluec: rgb(16 35 67);
            --redc: linear-gradient(45deg, transparent 5%, #ff013c 5%);
        }

        .bg-web {
            background-color: var(--bluec);
        }

        body {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings:
                "slnt" 0;
        }

        nav {
            background: white;
            padding: 16px 0;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }

        .navbar ul li {
            padding: 1.5rem 1rem;
        }

        .divider {
            height: 0.1px;
            width: 100%;
            background: black;
            margin: 1rem 0;
        }

        .inp {
            border-top-left-radius: 1rem;
            border-bottom-left-radius: 1rem;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .btn-search {
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            background: var(--bluec);
            color: white;
        }

        .btn-search:hover {
            color: white;
        }

        .footer {
            margin: 0 auto;
            background: var(--bluec);
            padding: 60px 0 40px 0;
        }

        .footer-col {
            display: flex;
            align-items: flex-start;
            flex-direction: column;
        }

        svg {
            width: 30px;
        }

        .user-btns {
            display: flex;
            flex-direction: row;
        }

        .header-menu {}

        </style>
        @stack('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fw-normal fs-5 d-flex d-flex flex-column">
        <div class="container-fluid g-4">
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <a class="navbar-brand" href="{{url('/')}}"><img style="width:105px;"
                    src="{{url('assets/logo-bg.png')}}"></a>

            <div class="header-menu">
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-0 mb-1 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Buy Now
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item" >Buyer Dashboard</li>
                            <li class="dropdown-item" >Browse current auctions</li>
                            <li class="dropdown-item" >Won Lots</li>
                            <li class="dropdown-item" >Inovices</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><svg viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="0.5"
                                        d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z"
                                        fill="#1C274C"></path>
                                    <path
                                        d="M12 18C13.1046 18 14 17.1046 14 16C14 14.8954 13.1046 14 12 14C10.8954 14 10 14.8954 10 16C10 17.1046 10.8954 18 12 18Z"
                                        fill="#1C274C"></path>
                                    <path
                                        d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C17.8174 10.0089 18.3135 10.022 18.75 10.0546V8C18.75 4.27208 15.7279 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z"
                                        fill="#1C274C"></path>
                                </g>
                            </svg>Sell</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo session('user_data')['email']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('account/profile')}}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{url('logout')}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <main>
        @stack('content')
    </main>
        @stack('scripts')
</body>

</html>
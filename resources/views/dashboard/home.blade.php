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

        a.cata-btn:hover {
            color: white;
        }

        .item-container {
            border-radius: 12px;
            margin: 1rem;
            background-color: white;
            padding:1rem;
            text-align: left;
            min-height:13rem;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            border-bottom: solid 1rem var(--bluec);

        }

        .contain {
            margin: 4rem auto;
            background-color: #e9f4ff;
            border-radius: 12px;
            padding: 0rem 1rem;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
        .item-container:hover{
            /* background-color: var(--bluec); */
            /* color:white; */
            transition: all .5s;
        }
        .section-svg{
            align-self:center;
        }
        @media(max-width:768px) {}

        .zoom-eff {
            --f: 1.15;
            clip-path: inset(0);
            transition: .4s;
        }

        .zoom-eff:hover {
            clip-path: inset(calc((1 - 1/var(--f)) * 50%));
            scale: var(--f)
        }

        a{
            text-decoration: none;
            color:black;
        }

        p{
            margin:4px 0 ;
        }

        @stack('styles')
    </style>
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
                            <li><a class="dropdown-item" href="#">Buyer Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">Browse current auctions</a></li>
                            <li><a class="dropdown-item" href="#">Won Lots</a></li>
                            <li><a class="dropdown-item" href="#">Inovices</a></li>
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
                            anubhavmalik@gmail.com
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <main>
        <section class="container contain">
            <div class="row px-auto py-3">
                <h2 class="fw-bold">Welcome, Anubhav Kumar</h2>
                <p>Where would you like to go today?</p>
            </div>
            <div class="row px-auto py-2 text-center">
                <div class="col-md-4 col-12">
                    <a href="/auction">
                    <div class="row item-container">
                        <div class="col-2 section-svg"><svg fill="#000000" viewBox="0 0 24 24" id="browse" data-name="Line Color"    xmlns="http://www.w3.org/2000/svg" class="icon line-color">    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>    <g id="SVGRepo_iconCarrier">        <path id="secondary"            d="M21,12H3m13,0c0-5-1.79-9-4-9S8,7,8,12s1.79,9,4,9S16,17,16,12Z"            style="fill: none; stroke: #102342; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">        </path>        <circle id="primary" cx="12" cy="12" r="9"            style="fill: none; stroke: #102342; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">        </circle>    </g></svg></div>
                        <div class="col-10">
                            <h2 class="fw-bold">Browse & Bid</h2>
                            <p>Serch Upcoming Auctions</p>
                            <p>Add lots to your wishlist</p>
                            <p>Bid for a chance to win</p>
                        </div>
                    </div>
                </a>
                </div>
            <div class="col-md-4 col-12">
                    <a href="/paynow">
                    <div class="row item-container">
                        <div class="col-2 section-svg"><svg version="1.1" id="designs" xmlns="http://www.w3.org/2000/svg"    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve"    fill="#000000" stroke="#000000" stroke-width="0.064">    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>    <g id="SVGRepo_iconCarrier">        <style type="text/css">            .sketchy_een {                fill: #102342;            }        </style>        <path class="sketchy_een"            d="M28.918,15.952c-0.051-0.378-0.272-0.697-0.592-0.902c-0.212-0.136-0.475-0.137-0.697-0.042 c-0.003-0.816,0-1.632-0.021-2.447c-0.021-0.915,0.029-1.829,0.063-2.742c0.012-0.301-0.181-0.561-0.44-0.689 c-0.023-0.344-0.047-0.688-0.077-1.031c-0.019-0.205-0.036-0.41-0.065-0.613c-0.006-0.04-0.011-0.08-0.017-0.12 c-0.015-0.106-0.063-0.289-0.123-0.37c-0.087-0.114-0.161-0.241-0.296-0.306c-0.099-0.047-0.194-0.093-0.302-0.108 c-0.105-0.016-0.213-0.016-0.319-0.028c-0.023-0.337-0.041-0.674-0.056-1.011c0.038-0.087,0.059-0.181,0.059-0.279 c0-0.395-0.329-0.718-0.72-0.722c-0.805-0.006-1.61,0.006-2.415-0.028c-0.724-0.03-1.447-0.072-2.174-0.087 c-1.527-0.028-3.057-0.017-4.586-0.028c-1.5-0.01-2.998-0.04-4.501-0.044c-0.733-0.001-1.466-0.015-2.198-0.015 c-0.706,0-1.413,0.013-2.118,0.062C6.545,4.457,5.757,4.635,5.041,4.947C4.342,5.249,3.714,5.851,3.497,6.593 c-0.059,0.203-0.089,0.41-0.116,0.621C3.358,7.385,3.338,7.56,3.358,7.732c0.025,0.215,0.06,0.423,0.117,0.629 C3.24,8.48,3.075,8.72,3.072,8.997c-0.01,0.798-0.006,1.595-0.021,2.391c-0.013,0.724-0.03,1.447-0.038,2.169 c-0.013,1.462-0.021,2.922,0,4.385c0.015,1.016,0.038,2.032,0.042,3.048c0.006,1.02,0.019,2.041-0.004,3.063 c-0.003,0.127,0.042,0.241,0.104,0.345c0.151,0.39,0.309,0.782,0.514,1.146c0.084,0.148,0.19,0.285,0.292,0.422 c0.095,0.125,0.192,0.249,0.289,0.372c0.148,0.188,0.37,0.336,0.568,0.463c0.442,0.289,0.957,0.473,1.476,0.564 c0.45,0.078,0.904,0.154,1.36,0.182c0.828,0.049,1.66,0.055,2.491,0.07c0.79,0.013,1.58,0.028,2.368,0.027 c0.805,0,1.608-0.009,2.412-0.004c0.807,0.008,1.612,0.032,2.419,0.015c0.832-0.015,1.662-0.049,2.493-0.061 c0.799-0.013,1.603-0.009,2.402-0.009c0.763,0,1.527,0,2.288-0.01c0.357-0.004,0.714,0,1.073,0.004 c0.376,0.004,0.752,0.008,1.13,0.002c0.257-0.003,0.481-0.131,0.633-0.319c0.193-0.138,0.33-0.351,0.325-0.6 c-0.017-0.86-0.008-1.72-0.017-2.581c-0.013-0.988,0.002-1.974,0.019-2.961c0.237-0.036,0.449-0.105,0.646-0.27 c0.439-0.368,0.543-0.999,0.589-1.538c0.029-0.334,0.029-0.67,0.042-1.006c0.021-0.513,0.046-1.031,0.028-1.546 C28.985,16.49,28.954,16.22,28.918,15.952z M7.703,8.835C7.706,8.762,7.71,8.688,7.694,8.613C7.69,8.594,7.687,8.574,7.683,8.555 c-0.02-0.306-0.01-0.614-0.007-0.922c1.463,0.042,2.927,0.043,4.392,0.05c0.754,0.004,1.508,0.023,2.262,0.042 c0.699,0.019,1.396,0.07,2.095,0.093c0.727,0.025,1.456,0.036,2.186,0.051c0.729,0.015,1.46,0.03,2.189,0.036 c0.742,0.006,1.485,0.013,2.226,0.015c0.653,0.002,1.307,0.03,1.96,0.034c0.242,0.001,0.483,0.01,0.723,0.028 c0.04,0.353,0.066,0.707,0.077,1.063c-0.389,0.008-0.779,0.004-1.166,0c-0.727-0.01-1.455-0.032-2.182-0.036 c-1.46-0.008-2.917-0.057-4.377-0.068c-1.553-0.011-3.105,0.002-4.658-0.053c-0.999-0.034-2-0.032-2.998-0.03 c-0.534,0-1.067,0.002-1.599-0.004C8.438,8.849,8.07,8.844,7.703,8.835z M27.418,19.574L27.418,19.574 c0.001-0.001,0.003-0.003,0.005-0.005C27.422,19.571,27.42,19.573,27.418,19.574z M27.224,16.425 c0.052,0.004,0.103,0.001,0.152-0.007c0.03,0.439,0.025,0.879,0.017,1.32c-0.004,0.279-0.009,0.558-0.015,0.839 c-0.003,0.273,0.001,0.546-0.024,0.817c-0.012,0.063-0.026,0.125-0.043,0.187c-0.277,0.014-0.557,0.005-0.833-0.002 c-0.336-0.008-0.672-0.011-1.008-0.011c-0.745,0-1.493,0.002-2.232-0.082c-0.225-0.04-0.443-0.097-0.657-0.176 c-0.215-0.102-0.412-0.22-0.603-0.358c-0.072-0.063-0.141-0.128-0.207-0.197c-0.04-0.062-0.075-0.125-0.109-0.19 c-0.035-0.094-0.067-0.189-0.093-0.288c-0.016-0.223-0.009-0.441,0.015-0.663c0.04-0.238,0.089-0.474,0.171-0.702 c0.027-0.053,0.056-0.103,0.087-0.152c0.038-0.038,0.076-0.075,0.116-0.109c0.076-0.047,0.154-0.09,0.235-0.13 c0.197-0.071,0.397-0.125,0.605-0.162c0.325-0.033,0.649-0.04,0.976-0.048c0.349-0.01,0.699-0.023,1.048-0.023 C25.624,16.284,26.427,16.364,27.224,16.425z M4.895,7.3c0.023-0.124,0.051-0.245,0.091-0.364C5.014,6.88,5.045,6.827,5.078,6.775 c0.087-0.098,0.18-0.19,0.279-0.276c0.127-0.087,0.259-0.159,0.399-0.226C6.231,6.092,6.73,5.979,7.23,5.903 C7.913,5.83,8.593,5.797,9.279,5.792c0.725-0.004,1.451-0.011,2.176-0.013c0.676,0,1.352,0.004,2.03,0.008 c0.811,0.004,1.624,0.009,2.436,0.004c1.523-0.009,3.046-0.013,4.569,0.017c0.729,0.015,1.456,0.03,2.186,0.078 c0.601,0.042,1.203,0.056,1.805,0.072c0.014,0.177,0.026,0.355,0.046,0.533c-0.067,0-0.134-0.002-0.201-0.001 c-1.424,0.009-2.848,0.03-4.273,0.009c-0.754-0.009-1.508-0.025-2.26-0.049c-0.712-0.021-1.422-0.027-2.133-0.055 c-0.727-0.029-1.453-0.059-2.18-0.068c-0.727-0.011-1.455-0.01-2.182-0.019c-1.356-0.021-2.712-0.07-4.066-0.127 c-0.009,0-0.018-0.001-0.027-0.001c-0.35,0-0.631,0.296-0.678,0.631c-0.211,0.135-0.361,0.359-0.36,0.623 c0.002,0.44,0.01,0.883,0.066,1.321C6.203,8.749,6.171,8.75,6.139,8.746C5.907,8.71,5.677,8.671,5.454,8.597 C5.382,8.56,5.314,8.519,5.246,8.473C5.21,8.441,5.177,8.408,5.145,8.372C5.091,8.285,5.046,8.196,5.004,8.104 C4.954,7.972,4.915,7.84,4.886,7.702C4.877,7.567,4.882,7.435,4.895,7.3z M24.46,25.97c-0.777,0.019-1.555,0.017-2.332,0.034 c-1.662,0.032-3.323,0.089-4.987,0.101c-0.771,0.004-1.544,0.021-2.315,0.015c-0.82-0.004-1.639-0.015-2.457-0.017 c-0.773-0.002-1.546,0.008-2.319,0.011c-0.832,0.002-1.669,0.006-2.497-0.076c-0.066-0.007-0.132-0.013-0.198-0.02 c-0.451-0.064-0.905-0.144-1.331-0.302c-0.17-0.084-0.334-0.177-0.49-0.284c-0.108-0.095-0.203-0.198-0.294-0.308 c-0.08-0.106-0.158-0.215-0.231-0.328c-0.079-0.126-0.141-0.265-0.201-0.402c-0.069-0.17-0.135-0.342-0.2-0.515 c-0.039-0.103-0.087-0.194-0.148-0.275c-0.01-1.288-0.01-2.575-0.027-3.861c-0.011-0.714-0.025-1.43-0.034-2.144 c-0.011-0.733-0.002-1.468-0.004-2.201C4.395,14.349,4.393,13.3,4.42,12.25c0.02-0.816,0.045-1.631,0.067-2.447 c0.048,0.03,0.095,0.063,0.143,0.09c0.399,0.22,0.845,0.275,1.289,0.329c0.372,0.046,0.746,0.066,1.122,0.08 c0.746,0.027,1.495,0.017,2.243,0.017c0.788,0,1.574-0.009,2.362-0.013c0.775-0.006,1.546,0.03,2.32,0.055 c0.746,0.023,1.493,0.023,2.241,0.023c0.775-0.002,1.551-0.008,2.326-0.006c0.76,0.002,1.519,0.047,2.277,0.093 c1.424,0.084,2.854,0.089,4.28,0.106c0.337,0.004,0.679,0,1.02-0.014c-0.021,1.427-0.002,2.855,0.004,4.282 c-0.467-0.022-0.934-0.055-1.402-0.06c-0.359-0.004-0.718-0.015-1.075-0.021c-0.036-0.001-0.071-0.001-0.107-0.001 c-0.398,0-0.791,0.038-1.186,0.09c-0.429,0.059-0.866,0.234-1.234,0.46c-0.275,0.169-0.469,0.395-0.663,0.648 c-0.122,0.159-0.194,0.384-0.262,0.566c-0.074,0.196-0.114,0.406-0.154,0.612c-0.103,0.528-0.152,1.063-0.042,1.595 c0.027,0.133,0.08,0.262,0.129,0.389c0.122,0.317,0.287,0.579,0.515,0.832c0.18,0.201,0.422,0.357,0.642,0.511 c0.142,0.099,0.298,0.18,0.456,0.253c0.224,0.101,0.456,0.207,0.697,0.266c0.427,0.106,0.873,0.141,1.312,0.165 c0.492,0.027,0.987,0.023,1.483,0.019c0.209-0.002,0.42-0.004,0.63-0.004c0.088,0,0.175,0.001,0.263,0.002 c-0.011,1.592,0.04,3.183,0.053,4.774C25.6,25.947,25.03,25.957,24.46,25.97z M24.132,17.865c0,0.431-0.359,0.791-0.791,0.791 c-0.431,0-0.791-0.359-0.791-0.791c0-0.431,0.359-0.791,0.791-0.791C23.772,17.074,24.132,17.434,24.132,17.865z">        </path>    </g></svg></div>
                        <div class="col-10">
                        <h2 class="fw-bold">Pay</h2>
                        <p>Review won lots</p>
                            <p>Pay invoice</p>
                            <p>Connect with seller</p>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-md-4 col-12">
                    <a href="/sell">
                    <div class="row item-container">
                        <div class="col-2 section-svg"><svg version="1.1" id="Uploaded to svgrepo.com"    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"    viewBox="0 0 32 32" xml:space="preserve" fill="#000000" transform="rotate(90)">    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>    <g id="SVGRepo_iconCarrier">        <style type="text/css">            .linesandangles_een {                fill: #102342;            }        </style>        <path class="linesandangles_een"            d="M30,13V7H2v6c1.657,0,3,1.343,3,3s-1.343,3-3,3v6h28v-6c-1.657,0-3-1.343-3-3S28.343,13,30,13z M28,20.582V23h-7v-2h-2v2H4v-2.418C5.764,19.81,7,18.046,7,16s-1.236-3.81-3-4.583V9h15v2h2V9h7v2.417 c-1.764,0.773-3,2.536-3,4.583S26.236,19.81,28,20.582z M19,12h2v2h-2V12z M19,15h2v2h-2V15z M19,18h2v2h-2V18z">        </path>    </g></svg></div>
                        <div class="col-10">
                        <h2 class="fw-bold">Sell</h2>
                        <p class="">Upgrade to a vendor account to start selling your own lots</p>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </section>
    </main>
    @stack('content')
    @stack('scripts')
</body>

</html>
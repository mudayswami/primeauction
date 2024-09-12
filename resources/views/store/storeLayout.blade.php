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
    <link href="{{ asset('css/store.css') }}" rel="stylesheet" type="text/css" >
    <style>
        :root {
            --bluec: rgb(16 35 67);
            --redc: #f30001bd;
        }

        .bg-web {
            background: var(--redc) ;
        }
        .bg-web:hover{
            background: var(--redc) ;
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

        .footer-btn {
            text-decoration: none;
            display: inline-block;
            max-width: 100%;
            color: #fff;
            margin-bottom: 10px;
        }

        .footer-heading {
            color: #fff;
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.5;
            text-decoration: none;
            display: flex;
            font-weight: bold;
        }

        .auction-search {
            background: var(--bluec);
            padding: 1rem 2rem;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-left: .5rem;
        }

        .auc-search-form {
            margin: 1.5rem 0;
            padding: 0 4rem 1rem 4rem;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
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
        .cart-count {
            position: absolute;
            top: 0px;
            right:0px;
            background: red;
            border-radius: 100px;
            width: 28px;
            height: 28px;
            padding: 0px 8px;
            color: white;

        }
        @stack('styles')
    </style>
</head>

<body>
    @include('store.include.header')
    @stack('content')
    @stack('scripts')
    @include('store.include.footer')
</body>

</html>
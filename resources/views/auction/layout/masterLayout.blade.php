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
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bluec: rgb(16 35 67);
            --redc: #ff013c;
        }

        .bg-web {
            background-color: var(--bluec);
        }

        body {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        nav {
            background: white;
            padding: 16px 0;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }

        .nav-item {
            line-height: 1.2rem;
            font-size: large;
        }

        .nav-item:hover {
            text-decoration: underline;
            line-height: 1.2rem;
            text-underline-offset: 6px;
            transition: left 0.5s ease-out;
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
            padding: .6rem 2rem;
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

        a {
            text-decoration: none;
            cursor: pointer;
            color: var(--bluec);
        }

        a.cata-btn:hover {
            color: white;
        }

        .category-item {
            padding: 0 !important;
            width: 100%;
        }

        

        @stack('styles')
    </style>
</head>

<body>
    @include('auction.include.header')
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    @stack('content')
    @stack('scripts')
    @include('auction.include.footer')
</body>

</html>
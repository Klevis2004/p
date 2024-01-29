<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <title>My Book</title>
    <link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' />
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .main {
            background-color: #f0f0f0;
            padding: 20px;
            margin-top: 300px;
            margin-bottom: 300px;
            padding-top: 300px;
            padding-bottom: 300px;
        }

        .bg-black {
            background-color: #000 !important;
        }

        .navbar-brand img {
            width: 100px;
        }

        .navbar-brand {
            height: 80px;
        }

        .carousel-innerr {
            margin-top: 300px;
        }

        .carousel-inner img {
            filter: brightness(50%);
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .carousel-inner h5,
        p {
            color: rgb(255, 255, 255);
        }

        .carousel-inner h5 {
            font-size: 90px;
        }

        .carousel-inner p {
            font-size: 30px;
        }

        .carousel-inner button {
            width: 200px;
            height: 50px;
        }

        .card {
            border: none;
            margin-bottom: 30px;
        }

        .card-img-top {
            width: 100%;
            height: auto;
        }

        .card-title {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
        }

        .shop-link {
            font-size: 1rem;
            color: #000;
            text-decoration: none;
        }

        .shop-link:hover {
            text-decoration: underline;
        }

        .card-body p {
            color: #000;
        }

        .carousel-innerr h5 {
            font-size: 50px;
            color: #000;
        }

        .carousel-innerr p {
            font-size: 20px;
        }

        #scrollToTop {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: opacity 0.3s ease-in-out;
        }

        #scrollToTop:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item text-center">
                            <a class="nav-link active" aria-current="page" href="#">SHOP</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">TEAM</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">EVENTS</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">EXPERIENCE</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">COMPANY</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <title>{{ config('app.name') }}</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container">
            <div class="row m-auto flex justify-content-around align-items-center">
                @yield('content')
            </div>
        </div>
    </main>
    <footer class="auth-footer text-center pt-5 pb-2">
        <div class="container-fluid d-flex justify-content-around align-items-center mt-1">
            <div class="little_desc col-md-3">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('dist/img/smt-logo.png') }}" alt="smarttouch_logo">
                    <div class="ml-2">
                        <span class="h4 font-weight-bold text-smt-tertiary">Smart Touch Group</span>
                    </div>
                </div>
                <p class="text-muted text-justify mt-2 font-size-14 d-sm-block">Smart Touch Group est une une entreprise de droit burkinabé de technologie avancée proposant des services innovants, futuristes, intelligents à ses client.</p>
                <div class="text-left">
                    <a href="#" class="h2 mr-4"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="h2 text-smt-primary"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <ul class="nav flex-column  col-md-3">
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">À propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">Nous contacter</a>
                </li>
            </ul>
            <ul class="nav flex-column col-md-3">
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">Se connecter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">Créer un compte</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">L'entreprise</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">Politique de confidentialité</a>
                </li>
            </ul>
        </div>
        <div class="mt-5">
            <p class="font-weight-bold">&copy;Copyright - SMARTTOUCHGROUP - 2021</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

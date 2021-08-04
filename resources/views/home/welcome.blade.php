<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>StudyUp | Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="home_container d-flex flex-column">
        <header class="navbar navbar-light d-flex bg-smt-primary py-2 m-0">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{asset('dist/img/logo.png')}}" width="50" height="50" class="d-inline-block align-top bg-light rounded-circle mr-2" alt="">
                <span class="h3 text-white font-weight-bold">StudyUp</span>
            </a>
            <ul class="nav justify-content-end header-nav">
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">Contacter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#">À propos</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link font-weight-bold" href="#">Se connecter</a>
                </li>
            </ul>
        </header>
        <main class="mt-0 py-4 p-0">
            <div class="container-fluid my-5">
                <div class="row justify-content-around">
                    <div class="text col-md-5 mt-5 text-white">
                        <h1 class="display-4 font-weight-bold">Cultivez-vous de n'importe où que vous vous trouvez!</h1>
                        <p class="h4 font-weight-bold my-5">Roman, œuvres pédagogiques,  etc. Retrouvez tout ce
                            dont vous avez besoin de lire sur notre plateforme.
                            Téléchargez notre application mobile ou créer un
                            compte en ligne :</p>
                        <div class="fit-content d-flex flex-column justify-content-between">
                            <div class="downloadBtns fit-content">
                                <a href="#" class="android bg-smt-tertiary text-smt-primary rounded-left text-decoration-none">
                                    <i class="fab fa-android"></i>
                                    <span class="font-weight-bold">android</span>
                                </a>
                                <a href="#" class="ios bg-smt-tertiary text-smt-primary rounded-right text-decoration-none">
                                    <i class="fab fa-apple"></i>
                                    <span class="font-weight-bold">iOS</span>
                                </a>
                            </div>
                            <div class="fit-content my-5">
                                <a href="#" class="home_registerBtn font-weight-bold">Créer un compte</a>
                            </div>
                        </div>
                    </div>
                    <div class="img  col-md-5 text-center">
                        <img src="{{asset('dist/img/student.png')}}" alt="Black student">
                    </div>
                </div>
                <div class="text-center my-5">
                    <button class="bg-transparent border-0 outline-0 display-4 text-white-50">
                        <i class="fal fa-angle-down"></i>
                    </button>
                </div>
            </div>
        </main>
    </div>
    <div class="container mt-5 text-center">
        <div class="row justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="764.864" height="153.241" viewBox="0 0 764.864 153.241">
                <g id="Groupe_18" data-name="Groupe 18" transform="translate(-577.568 -1157.759)">
                  <rect id="up" data-name="Rectangle 4" width="761" height="124" transform="translate(577.568 1184.317) rotate(-2)" fill="rgba(244,147,29,0.25)"/>
                  <rect id="down" data-name="Rectangle 5" width="761" height="124" transform="translate(581.896 1160.517) rotate(2)" fill="rgba(244,147,29,0.75)"/>
                  <text id="text" data-name="svg_text" class="h1 font-weight-bold" transform="translate(613 1250)" fill="#262160" font-weight="700"><tspan x="0" y="0">Des œuvres de toutes catégories ..</tspan></text>
                </g>
            </svg>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" type="module" defer></script>
</body>
</html>
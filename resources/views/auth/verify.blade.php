<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name') }} | Confirmation</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center mt-6 border-0 shadow-sm">
                    <div class="card-header border-0 bg-smt-tranparent-primary">
                        <p class="display-2 text-white"><i class="fas fa-envelope-square"></i></p>
                    </div>
    
                    <div class="card-body py-5">
                        <h3 class="mb-3">{{Session::get('title')}}</h3>    
                        <p class="font-weight-bold">
                            <span>{{ Session::get('body')[0] }}</span><br>
                            <span>{{ Session::get('body')[1] }}</span>
                        </p>
                    </div>
                </div>
                <div class="mt-5">
                    <a href="#" class="h2 mr-4 text-smt-fourth hover-text-smt-fifth"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="h2 text-smt-fourth hover-text-smt-primary"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="fit-content mt-3 text-left">
                    <h3 class="font-weight-bold text-smt-fourth">StudyUp</h3>
                    <p class="font-weight-bold text-smt-fourth">by SMARTTOUCHGROUP</p>
                </div>
            </div>
            
        </div>
    </div>
    <footer class="fit-content position-absolute emailVerification">
        <p class="font-weight-bold text-smt-fourth">&copy;Copyright - SMARTTOUCHGROUP - 2021</p>
    </footer>
</body>
</html>
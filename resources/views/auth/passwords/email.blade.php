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
    <title>{{ config('app.name') }} | Renitialisation mot de passe</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center mt-6 border-0 shadow-sm">
                    <div class="card-header border-0 bg-smt-tranparent-secondary">
                        <p class="display-2 text-white"><i class="fas fa-lock"></i></p>
                        <p class="h3 font-weight-bold text-white">Renitialisation</p>
                    </div>
    
                    <div class="card-body py-5">
                        <form method="POST" action="{{ route('password.mail') }}" class="register">
                            @csrf
                            
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right font-weight-bold">Veuillez entrez votre e-mail :</label>
                        
                                <div class="col-md-6">
                                    <div class="border rounded text-center">
                                        <input id="email" type="email" class="text-indent-3" name="email" required autocomplete="email" placeholder="Ex: exemple@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="fit-content mx-auto py-3">
                                <button type="submit" class="border-0 p-1 font-weight-bold word-space-1">Envoyer</button>
                            </div>
                        </form>
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
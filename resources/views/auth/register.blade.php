@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header mt-2 bg-transparent border-0 text-center">
                    <div class="text-center">
                        <img src="{{ asset('dist/img/logo.png') }}" alt="StudyUp" class="w-25">
                    </div>
                    <h1 class="font-weight-bold">Inscription</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register.auth') }}" class="register">
                        @csrf
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right font-weight-bold">Nom :</label>
                            <div class="col-md-6">
                                <div class="border rounded text-center">
                                    <input id="lastname" type="text" class="text-indent-3 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" placeholder="Ex: Da, Guira ...">
                                </div>
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right font-weight-bold">Prenom :</label>
                            <div class="col-md-6">
                                <div class="border rounded text-center">
                                    <input id="firstname" type="text" class="text-indent-3 @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="name" placeholder="Ex: Aziz, ALbert ...">
                                </div>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right font-weight-bold">E-mail :</label>

                            <div class="col-md-6">
                                <div class="border rounded text-center">
                                    <input id="email" type="email" class="text-indent-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ex: exemple@gmail.com">
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email-confirm" class="col-md-4 col-form-label text-md-right font-weight-bold">Confirmation E-mail :</label>

                            <div class="col-md-6">
                                <div class="border rounded text-center">
                                    <input id="email-confirm" type="email" class="text-indent-3" name="email-confirm" required autocomplete="email" placeholder="exemple@gmail.com">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-md-right font-weight-bold">Mot de passe :</label>

                            <div class="col-md-6">
                                <div class="border rounded text-center @error('password') is-invalid @enderror">
                                    <input id="password" type="password" class="text-indent-3" name="password" required autocomplete="new-password" placeholder="Votre mot de passe">
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right font-weight-bold">Confirmation mot de passe :</label>

                            <div class="col-md-6">
                                <div class="border rounded text-center">
                                    <input id="password-confirm" type="password" class="text-indent-3" name="password-confirm" required autocomplete="new-password" placeholder="Votre mot de passe">
                                </div>
                            </div>
                        </div>

                        <div class="fit-content mx-auto py-3">
                            <button type="submit" class="border-0 p-1 font-weight-bold word-space-1">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

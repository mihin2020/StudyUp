@extends('layouts.auth')

@section('content')

    <div class="fit-content">
        <div class="flex flex-column text-center">
            <img src="{{ asset('dist/img/logo.png') }}" alt="smarttouch_logo" class="w-75">
            <p class="display-4 font-weight-bold">StudyUp</p>
            <p class="line-height-10"><span class="lead">by</span><span class="font-weight-bold"> SMARTTOUCHGROUP</span></p>
        </div>
    </div>
    <div class="fit-content">
        <div class="fit-content p-5 bg-white rounded border shadow-sm">
            @error('error')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login.create') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @enderror
        <form action="{{ route('login.auth') }}" method="post" class="fit-content login text-center">
            @csrf
            <div class="fit-content mb-4 border rounded">
                <input type="email" name="email" placeholder="Addresse e-mail" required class="border-0 text-indent-3">
            </div>
            <div class="d-flex justify-content-between align-items-center my-4 border rounded">
                <input type="password" name="password" placeholder="Mot de passe" required class="login_password border-0 text-indent-3">
                <a href="/eye" class="input-group-text text-decoration-none border-0"><i class="far fa-eye-slash"></i></a>
            </div>
            <button type="submit" class="border-0 p-1 font-weight-bold word-space-1">Se connecter</button>
            <div class="my-4">
                <a href="{{ route('password.email4reset') }}">Mot de passe oublié?</a>
            </div>
        </form>
        <div class="text-center mt-4">
            <a href="/register" class="link-btn font-weight-bold word-space-1">Créer un compte</a>
        </div>
    </div>
</div>
@endsection

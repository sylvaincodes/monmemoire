@extends('front.layouts.app')

@section('title', 'Connexion')

@section('breadcrumb')
    @component('front.layouts.components.breadcrumb')
        @slot('titre')
        ------------ CONNEXION -------------
        @endslot
        @slot('description')
        Connecter vous à votre compte pour continuer.
        @endslot
        @slot('soustitre')
        @endslot
    @endcomponent
@endsection

@section('content')

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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
        </div>
    </div> --}}
    <div class="form-container col-md-10 col-lg-5">
        {{-- col-xs-12 col-sm-10 col-md-12 col-lg-10   --}}
            <form method="post" action="{{ url('login') }}">
                @csrf
                <label class="input-group">
                    <input id="name" type="text" class="field" placeholder="login" required name="login" autocomplete="off">
                    <span class="label">nom d'utilisateur</span>
                    <i  class="icon-sm ri-user-line"></i>
                </label>

                <label class="input-group">
                    <input id="password" value="" class="field" placeholder="mot de passe" required name="password" type="password"  />
                    <span class="label">mot de passe</span>
                    <i class="icon-sm ri-lock-line"></i>
                </label>
                
                {{-- <div id="remember-container">
                    <input type="checkbox" name="remember" id="remember" value="1" class="checkbox" checked="checked" aria-invalid="false">
                    <label class="remember" for="remember">Se rappeler de moi</label>
                </div> --}}
              
                <div class="input-group m-auto">
                    <button class="fs-5 btn" type="submit">
                        se connecter
                    </button>	
                </div>
                
            </form>
            
            <div class="bottom d-flex">

                <p>
                    <a class="info" href="#">Mot de passe oublié ?</a>
                </p>
                
                <hr>
                
                <p>
                    Nouveau  ? s'inscrire <a class="info" href="{{ route('register') }}">ICI</a>
                </p>
                
            </div>

    </div>


@endsection

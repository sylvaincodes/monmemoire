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

<div class="form-container col-md-10 col-lg-5">
    <form method="post" action="{{ url('login') }}">
        @csrf
        <label class="input-group">
            <input id="email" type="email" class="field  @error('email') is-invalid @enderror" placeholder="email" required name="email" autocomplete="off">
            <span class="label">nom d'utilisateur</span>
            <i  class="icon-sm ri-user-line"></i>
            @error('email')
            <div class="help-block">
                <ul role="alert">
                    @if ($errors->has('email'))
                    <li>{{ $errors->first('email') }}.</li>
                    @endif
                </ul>
            </div>
            @enderror
        </label>
        
        <label class="input-group">
            <input id="password" value="" class="field  @error('password') is-invalid @enderror" placeholder="mot de passe" required name="password" type="password"  />
            <span class="label">mot de passe</span>
            <i class="icon-sm ri-lock-line"></i>
            @error('password')
            <div class="help-block">
                <ul role="alert">
                    @if ($errors->has('password'))
                    <li>{{ $errors->first('password') }}.</li>
                    @endif
                </ul>
            </div>
            @enderror
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

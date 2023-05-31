@extends('front.layouts.app')

@section('title', 'Connexion')

@section('breadcrumb')
@component('front.layouts.components.breadcrumb')
@slot('titre')
------------ CREATION DE COMPTE -------------
@endslot
@slot('description')
Entrer vos informations pour continuer.
@endslot
@slot('soustitre')
@endslot
@endcomponent
@endsection

@section('content')
   
<div class="form-container col-md-10 col-lg-5">
    <form method="post" action="{{ url('register') }}">
        @csrf

        <input type="hidden" value="internaute" name="internaute"/>
        <input type="hidden" value="0 " name="created_by"/>
        
        <label class="input-group">
            <input id="email" type="text" class="field @error('email') is-invalid @enderror" placeholder="email" required name="email" autocomplete="off" aria-invalid="@error('email') true @enderror">
            <span class="label">Email</span>
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
            <input id="password" class="field @error('password') is-invalid @enderror" placeholder="mot de passe" required name="password" type="password"  />
            <span class="label">mot de passe</span>
            <i class="icon-sm ri-lock-line"></i>
            @error('name')
            <div class="help-block">
                <ul role="alert">
                    @if ($errors->has('password'))
                    <li>{{ $errors->first('password') }}.</li>
                    @endif
                </ul>
            </div>
            @enderror
        </label>
        
        <label class="input-group @error('password_confirmation') is-invalid @enderror">
            <input id="password_confirmation" value="" class="field" placeholder="confirmer mot de passe" required name="password_confirmation" type="password"  />
            <span class="label">confirmer mot de passe</span>
            <i class="icon-sm ri-lock-line"></i>
            @error('name')
            <div class="help-block">
                <ul role="alert">
                    @if ($errors->has('password'))
                    <li>{{ $errors->first('password') }}.</li>
                    @endif
                </ul>
            </div>
            @enderror
        </label>
        
        <div class="input-group m-auto">
            <button class="fs-5 btn" type="submit">
                Créer mon compte
            </button>	
        </div>
        
    </form>
    
    <div class="bottom d-flex">
        
        <p>
            Déja un compte  ? se connecter  <a class="info" href="{{ route('login') }}">ICI</a>
        </p>
        
    </div>
    
</div>


@endsection

{{-- <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Register') }}</div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            
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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

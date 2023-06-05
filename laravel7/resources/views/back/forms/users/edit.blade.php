@extends('back.layouts.app')

@section('title', 'Acceuil')

@section('style')
@endsection

@section('breadcrumb')
@component('back.layouts.components.breadcrumb')

@slot('page')
Les utilisateurs
@endslot
@slot('menu')
Mon profil
@endslot
@slot('action')
Modification
@endslot

@endcomponent
@endsection

@section('content')
@include('back.forms.users.create')

<div class="row">
  <div class="col-12">
    <div class="card">
      
    
      <div class="card-header">
        
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
          <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            <li><a data-action="close"><i class="ft-x"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="card-content collapse show">
        <div class="card-body">
          
          <form class="d-flex flex-wrap gap-3 needs-validation" novalidate method="post" action="{{ route('back.users.update',$user) }}">
            @csrf
            @method('PATCH')
            
            <input type="hidden" name="created_by" value="{{ Auth::user()->id}}">
            
            <div class="type col-xl-6 col-lg-6 col-md-12">
              <fieldset class="form-group  @error('nom') is-invalid @enderror">
                <select @admin disabled @endadmin id="type"  name="type" class="form-select w-100" aria-label="Default      select example">
                  <option disabled value="">Selectionner</option>
                  <option {{ $user->type=="internaute" ? "selected" : "" }} value="internaute">Internaute</option>
                  <option {{ $user->type=="admin" ? "selected" : "" }} value="admin">Administrateur</option>
                  <option {{ $user->type=="superadmin" ? "selected" : "" }} value="superadmin">Super administrateur</option>
                </select>
                @error('type')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('type'))
                  {{ $errors->first('type') }}.
                  @endif
                </div>
                @enderror
              </fieldset>
            </div>
            
            <div class="filiere_id col-xl-6 col-lg-6 col-md-12">
              <fieldset class="form-group  @error('nom') is-invalid @enderror">
                <select  name="filiere_id" class="form-select w-100" aria-label="Default select example">
                  <option disabled>Selectionner</option>
                  
                  @foreach ($filieres as $filiere)
                  
                  <option {{ $filiere->id==$user->filiere_id ? "selected" : "" }} value="{{$filiere->id}}">{{ $filiere->libelle }}</option>
                  @endforeach
                </select>
                @error('filiere_id')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('filiere_id'))
                  {{ $errors->first('filiere_id') }}.
                  @endif
                </div>
                @enderror
              </fieldset>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="form-group">
                <input disabled type="text" class="form-control" value="{{ old('email') ? old('email') :  $user->email}}" name="email" placeholder="email">
                @error('email')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('email'))
                  {{ $errors->first('email') }}.
                  @endif
                </div>
                @enderror
              </div>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12">
              <fieldset class="form-group">
                <input type="text" class="form-control" value="{{ old('nom') ? old('nom') :  $user->nom}}"  name="nom" placeholder="nom">
                <span class="p-0 m-0 alert danger">
                  @if ($errors->has('nom'))
                  {{ $errors->first('nom') }}.
                  @endif
                </span>
              </fieldset>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12">
              <fieldset class="form-group">
                <input type="text" class="form-control" value="{{ old('prenom') ? old('prenom') :  $user->prenom}}" name="prenom" placeholder="prenom">
                @error('prenom')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('prenom'))
                  {{ $errors->first('prenom') }}.
                  @endif
                </div>
                @enderror
              </fieldset>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12">
              <fieldset class="form-group">
                <input type="text" class="form-control" value="{{ old('adresse') ? old('adresse') :  $user->adresse}}" name="adresse" placeholder="adresse">
                @error('adresse')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('adresse'))
                  {{ $errors->first('adresse') }}.
                  @endif
                </div>
                @enderror
              </fieldset>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12">
              <fieldset class="form-group">
                <input value="00000000" type="text" class="form-control"  required name="password" placeholder="mot de passe">
                @error('password')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('password'))
                  {{ $errors->first('password') }}.
                  @endif
                </div>
                @enderror
              </fieldset>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12">
              <fieldset class="form-group">
                <input value="00000000" type="text" class="form-control" required name="password_confirmation" placeholder="confirmer le mot de passe">
                @error('password_confirmation')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('password_confirmation'))
                  {{ $errors->first('password_confirmation') }}.
                  @endif
                </div>
                @enderror
              </fieldset>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="input-group">
                <span class="input-group-text" id="">+229</span>
                <input type="text" class="form-control" value="{{ old('telephone') ? old('telephone') :  $user->telephone}}" name="telephone" placeholder="telephone">
                @error('telephone')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('telephone'))
                  {{ $errors->first('telephone') }}.
                  @endif
                </div>
                @enderror
              </div>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="input-group">
                <span class="input-group-text" id="">+229</span>
                <input type="text" class="form-control" value="{{ old('whatsapp') ? old('whatsapp') :  $user->whatsapp}}" name="whatsapp" placeholder="whatsapp">
                @error('whatsapp')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('whatsapp'))
                  {{ $errors->first('whatsapp') }}
                  @endif
                </div>
                @enderror
              </div>
            </div>
            
            <div  class="col-xl-6 col-lg-6 col-md-12">
              <fieldset class="form-group">
                <input type="text" class="form-control" value="{{ old('matricule') ? old('matricule') :  $user->matricule}}" name="matricule" placeholder="matricule">
                @error('matricule')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('matricule'))
                  {{ $errors->first('matricule') }}.
                  @endif
                </div>
                @enderror
              </fieldset>
            </div>
            
            <div class=" col-xl-12 col-lg-12 col-md-12">
              <button class="d-flex align-items-center btn btn-primary" type="submit" >
                Mettre à jour
              </button>
            </div>
            
          </form>
          
        </div>
      </div>
      {{-- @else
      <p class="p-2"> <i class="ft-lock"></i> Vous n'aviez pas l'autorisation pour accéder à cette page.</p>
      @endadmin
      @endsuperadmin --}}
    </div>
    
  </div>
</div>

@endsection

@section('script')

@endsection
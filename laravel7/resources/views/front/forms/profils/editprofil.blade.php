@extends('front.layouts.app')

@section('title', 'Mon profil')

@section('breadcrumb')
@component('front.layouts.components.breadcrumb')
@slot('titre')
Mon profil.
@endslot
@slot('description')
Mettez à jour les informations de votre compte.
@endslot
@slot('soustitre')

@endslot
@endcomponent
@endsection

@section('content')
<div class="container">        
    <div class="wrapper d-flex">
        
        @include('front.forms.profils.editprofilmodal')
        <ul class="w-100 fs-6">
                <form action="" method="post">
                <li class="d-flex flex-row py-1">
                    <div class="d-flex flex-column w-100">
                        <strong>Nom</strong>
                        <div class="row">
                            <span>{{ Auth::user()->nom}}</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <strong>Prénom</strong>
                        <div class="row">
                            <span>{{ Auth::user()->prenom}}</span>
                        </div>
                    </div>
                </li>
                <li class="d-flex flex-row py-1">
                    <div class="d-flex flex-column w-100">
                        <strong>Adresse</strong>
                        <div class="row">
                            <span>{{ Auth::user()->adresse}}</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <strong>Téléphone</strong>
                        <div class="row">
                            <span>{{ Auth::user()->telephone}}</span>
                        </div>
                    </div>
                </li>
                <li class="d-flex flex-row py-1">
                    <div class="d-flex flex-column w-100">
                        <strong>Filière</strong>
                        <div class="row">
                            <span>{{ Auth::user()->filiere}}</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column w-100">
                        <strong>Matricule</strong>
                        <div class="row">
                            <span>{{ Auth::user()->matricule}}</span>
                        </div>
                    </div>
                </li>
                <li class="d-flex flex-row py-1">
                    <div class="d-flex flex-column w-100">
                        <strong>Whatsapp</strong>
                        <div class="row">
                            <span>{{ Auth::user()->whatsapp}}</span>
                        </div>
                    </div>
                    
                </li>
            </form>
        </ul>
        
        <div class="row">
            <button class="btn btn-outline modal-btn" type="submit">
                Modifier
            </button>
        </div>

    </div>
</div>
<br>

@endsection
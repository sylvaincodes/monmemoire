@extends('front.layouts.app')

@section('title', 'Acceuil')

@section('breadcrumb')
    @component('front.layouts.components.breadcrumb')
        @slot('titre')
        Découvrez. Partagez. Apprenez.
        @endslot
        @slot('description')
        Partagez ce que vous connaissez et aimez par le biais de présentations, d’infographies, de documents et bien plus.
        @endslot
        @slot('soustitre')
        Sélection du jour
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="wrapper d-flex">
        <div class="card">
            <div class="card-header">
                <img src="https://cdn.slidesharecdn.com/ss_thumbnails/copyoflistudentsguidetolinkedin11-3-16-170222222757-thumbnail.jpg?width=600&height=600&fit=bounds" alt="image document">
            </div>
            <div class="card-content">
                <h1 class="card-title">Mémoire de licence : Conception et réalisation bibliothéque numérique</h1>
                <p class="card-desc">Ce mémoire a pour objectif de réaliser une bibliothèque numérique en ligne pour la gestion des documents...</p>
            </div>
            <hr>
            <div class="card-footer d-flex">
                <p>il y a <span>1mois</span>, <span>1522 vues</span></p>
                <div class="card-actions d-flex">
                    <i title="télécharger le document" class="icon-sm ri-download-2-line"></i>
                </div>
            </div>
        </div> 
        <div class="card">
            <div class="card-header">
                <img src="https://cdn.slidesharecdn.com/ss_thumbnails/doing-nothing-img-160531134301-thumbnail.jpg?width=600&height=600&fit=bounds" alt="image document">
            </div>
            <div class="card-content">
                <h1 class="card-title">Mémoire de licence : Conception et réalisation bibliothéque numérique</h1>
                <p class="card-desc">Ce mémoire a pour objectif de réaliser une bibliothèque numérique en ligne pour la gestion des documents...</p>
            </div>
            <hr>
            <div class="card-footer d-flex">
                <p>il y a <span>1mois</span>, <span>1522 vues</span></p>
                <div class="card-actions d-flex">
                    <i title="télécharger le document" class="icon-sm ri-download-2-line"></i>
                </div>
            </div>
        </div>               
        {{ $documents->links('front.layouts.components.pagination') }}
    </div>
@endsection
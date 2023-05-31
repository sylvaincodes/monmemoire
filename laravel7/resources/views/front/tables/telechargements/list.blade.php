@extends('front.layouts.app')

@section('title', 'Catalogue')

@section('breadcrumb')
    @component('front.layouts.components.breadcrumb')
        @slot('titre')
        ------------ Vos téléchargements -------------
        @endslot
        @slot('description')
        Liste de vos documents téléchargés.
        @endslot
        @slot('soustitre')
        
        @endslot
    @endcomponent
@endsection


@section('content')
    <div class="container">        
        <div class="wrapper d-flex">
            <a href="{{ url('documentSingle',1) }}" class="card col-sm-6 col-lg-4">
                <div class="card-header">
                    <img src="https://image.slidesharecdn.com/prsentationpfe-141103161434-conversion-gate02/75/prsentation-pfe-systme-de-gestion-des-rclamations-et-interventions-clients-1-2048.jpg?cb=1665706389">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Conception et réalisation d'une application de gestion des réclamations et interventions clients</h1>
                    <p class="card-desc">Présentation PFE: Système de gestion des réclamations et interventions clients...</p>
                </div>
                <hr>
                <div class="card-footer d-flex">
                    <p>il y a <span>1mois</span>, <span>1522 vues</span></p>
                    <div class="card-actions d-flex m-l-auto">
                        <i title="télécharger le document" class="icon-sm ri-download-2-line"></i>
                    </div>
                </div>
            </a>   
            <a  class="card col-sm-6 col-lg-4">
                <div class="card-header">
                    <img src="https://image.slidesharecdn.com/memoirelecon4litteraturev2-111206093412-phpapp01/75/memoire-lecon-4-litterature-revue-1-2048.jpg?cb=1668446582" alt="image document">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Mémoire de licence : Conception et réalisation bibliothéque numérique</h1>
                    <p class="card-desc">Ce mémoire a pour objectif de réaliser une bibliothèque numérique en ligne pour la gestion des documents...</p>
                </div>
                <hr>
                <div class="card-footer d-flex">
                    <p>il y a <span>1mois</span>, <span>1522 vues</span></p>
                    <div class="card-actions d-flex m-l-auto">
                        <i title="télécharger le document" class="icon-sm ri-download-2-line"></i>
                    </div>
                </div>
            </a> 
            <a class="card col-sm-6 col-lg-4">
                <div class="card-header">
                    <img src="https://image.slidesharecdn.com/protocolederecherche-210901131717/75/protocole-de-recherche-1-2048.jpg?cb=1666731262">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Mémoire de médecine :  Elaboration protocolde  recherche</h1>
                    <p class="card-desc">Ce mémoire a pour objectif de réaliser des recherches scientifiques sur les protocoles médicales dans le secteur...</p>
                </div>
                <hr>
                <div class="card-footer d-flex">
                    <p>il y a <span>1mois</span>, <span>1522 vues</span></p>
                    <div class="card-actions d-flex m-l-auto">
                        <i title="télécharger le document" class="icon-sm ri-download-2-line"></i>
                    </div>
                </div>
            </a>      
            <a class="card col-sm-6 col-lg-4">
                <div class="card-header">
                    <img src="https://image.slidesharecdn.com/slidefaranyl3-150513172421-lva1-app6892/75/slide-farany-l3-1-2048.jpg?cb=1667607933">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Conception et réalisation d'une application de gestion d'échange de devise</h1>
                    <p class="card-desc">Ce mémoire a pour objectif de réaliser une  application de gestion d'échange...</p>
                </div>
                <hr>
                <div class="card-footer d-flex">
                    <p>il y a <span>1mois</span>, <span>1522 vues</span></p>
                    <div class="card-actions d-flex m-l-auto">
                        <i title="télécharger le document" class="icon-sm ri-download-2-line"></i>
                    </div>
                </div>
            </a> 
                        
            {{ $telechargements->links('front.layouts.components.pagination') }}
        </div>
    </div>
@endsection
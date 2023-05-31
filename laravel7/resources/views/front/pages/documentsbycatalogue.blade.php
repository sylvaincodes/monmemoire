@extends('front.layouts.app')

@section('title', 'Acceuil')

@section('breadcrumb')
    @component('front.layouts.components.breadcrumb')
        @slot('titre')
        ------------ Explorez -------------
        @endslot
        @slot('description')
        Découvrer les documents en fonction de vos travaux de recherche.
        @endslot
        @slot('soustitre')
        
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">        
        <div class="wrapper d-flex">
            
            <a href="#" class="card col-xs-5 ">
                <div class="card-header">
                    <img src="https://public.slidesharecdn.com/v2/images/categories/1x/career.png" alt="image document">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Informatique de gestion</h1>
                </div>
                <hr>
            </a>  
            
            <a class="card col-xs-5">
                <div class="card-header">
                    <img src="https://public.slidesharecdn.com/v2/images/categories/1x/featured.png" alt="image document">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Transport / Logistic</h1>
                </div>
                <hr>
            </a>
               
            <a class="card col-xs-5">
                <div class="card-header">
                    <img src="https://public.slidesharecdn.com/v2/images/categories/1x/latest.png" alt="image document">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Transport / Logistic</h1>
                </div>
                <hr>
            </a>

            <a class="card col-xs-5">
                <div class="card-header">
                    <img src="https://public.slidesharecdn.com/v2/images/categories/1x/popular.png" alt="image document">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Commerce international</h1>
                </div>
                <hr>
            </a>               
            {{ $documents->links('front.layouts.components.pagination') }}
        </div>
    </div>
@endsection
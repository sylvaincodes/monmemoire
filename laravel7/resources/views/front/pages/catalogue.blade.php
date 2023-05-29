@extends('front.layouts.app')

@section('title', 'Catalogue')

@section('breadcrumb')
    @component('front.layouts.components.breadcrumb')
        @slot('titre')
        ------------ Explorer -------------
        @endslot
        @slot('description')
        Découvrer les documents en fonction de vos centres d'intérêt.
        @endslot
        @slot('soustitre')
        
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">        
        <div class="wrapper d-flex">
            
            <a href="{{ url('documentsCatalogue') }}" class="card col-xs-5 col-lg-4">
                <div class="card-header">
                    <img src="https://public.slidesharecdn.com/v2/images/categories/1x/career.png" alt="image document">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Informatique de gestion</h1>
                </div>
                <hr>
            </a>  
            
            <a href="{{ url('documentsCatalogue') }}" class="card col-xs-5 col-lg-4">
                <div class="card-header">
                    <img src="https://public.slidesharecdn.com/v2/images/categories/1x/featured.png" alt="image document">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Markéting action commercial</h1>
                </div>
                <hr>
            </a>
               
            <a href="{{ url('documentsCatalogue') }}" class="card col-xs-5 col-lg-4">
                <div class="card-header">
                    <img src="https://public.slidesharecdn.com/v2/images/categories/1x/latest.png" alt="image document">
                </div>
                <div class="card-content">
                    <h1 class="card-title">Resources humaines</h1>
                </div>
                <hr>
            </a>

            <a href="{{ url('documentsCatalogue') }}" class="card col-xs-5 col-lg-4">
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
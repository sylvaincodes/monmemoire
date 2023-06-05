@extends('front.layouts.app')

@section('title', 'Catalogue')

@section('breadcrumb')
    @component('front.layouts.components.breadcrumb')
        @slot('titre')
        ------------ Explorez -------------
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
            
            @foreach ($filieres as $item)
                
                <a href="{{ url('documentsCatalogue', $item->id) }}" class="card col-xs-5 col-lg-4">
                    <div class="card-header">
                        <img src="https://public.slidesharecdn.com/v2/images/categories/1x/career.png" alt="image document">
                    </div>
                    <div class="card-content">
                        <h1 class="card-title">{{ trim($item->libelle)}}</h1>
                    </div>
                    <hr>
                </a>  
            
            @endforeach
           
        </div>

        <div class="d-flex justify-content-center py-3">
                {{ $filieres->links('front.layouts.components.pagination') }}
        </div>

    </div>
@endsection
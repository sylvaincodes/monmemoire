@extends('front.layouts.app')

@section('title', 'Vos documents publiés')

@section('breadcrumb')
    @component('front.layouts.components.breadcrumb')
        @slot('titre')
        Vos documents téléchargés.
        @endslot
        @slot('description')
        Liste des téléchargements.
        @endslot
        @slot('soustitre')
        
        @endslot
    @endcomponent
@endsection


@section('content')
<div class="container">        
    <div class="wrapper d-flex">

        @foreach ($documents as $item)

        <a href="{{ url('documentSingle',$item->id) }}" class="card col-sm-6 col-lg-4">
            <div class="card-header">
                <img src="<?php echo asset('storage/uploads/'.$item->id.'_thumball.png'); ?>">
            </div>
            <div class="card-content">
                <h1 class="card-title">{{ trim(substr($item->titre,0,100))}}</h1>
                <p class="card-desc">{{ trim(substr($item->titre,0,250))}}</p>
            </div>
            <hr>
            <div class="card-footer d-flex justify-content-between">
                <p class="d-flex align-items-center">
                    <span>
                    Publié le : {{date('d-m-Y', strtotime($item->created_at))}}
                    </span>, 
                    
                    
                </p>
                <div class="card-actions d-flex m-l-auto">
                    <p class="mx-1"> 
                        <i class="m-x-2 ri-download-fill"></i>
                        <span class="">
                            {{$item->telechargements}}   
                        </span> 
                    </p>
                </div>
            </div>
        </a>   
        @endforeach

    </div>

    <div class="d-flex justify-content-center py-3">
        {{ $documents->links('front.layouts.components.pagination') }}
    </div>
</div>
@endsection

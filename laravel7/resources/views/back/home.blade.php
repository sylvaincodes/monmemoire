@extends('back.layouts.app')

@section('title', 'Acceuil')

@section('style')
@endsection

@section('breadcrumb')
@component('back.layouts.components.breadcrumb')

@slot('page')
Tableau de bord 
@endslot
@slot('menu')
Stats
@endslot
@slot('action')
Semaine
@endslot

@endcomponent
@endsection


@section('style')
@endsection

@section('script')
@endsection

@section('content')

<!-- eCommerce statistic -->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="d-flex flex-column card-content ecom-card2 height-180">
                <div>
                    <h5 class="text-muted danger position-absolute p-1">Publications </h5>
                    <i class="ft-file danger font-large-1 float-right p-1"></i>
                </div>
                {{-- <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="progress-stats-bar-chart"></div>
                    <div id="progress-stats-line-chart" class="progress-stats-shadow"></div>
                </div> --}}
                <div class="d-flex flex-row justify-content-center">
                    <p class="text-dashboard">{{$publications}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="d-flex flex-column card-content ecom-card2 height-180">
                <div>
                    <h5 class="text-muted info position-absolute p-1">Téléchargements</h5>
                    <i class="ft-download info font-large-1 float-right p-1"></i>
                </div>
                {{-- <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <div id="progress-stats-bar-chart1"></div>
                    <div id="progress-stats-line-chart1" class="progress-stats-shadow"></div>
                </div> --}}
                <div class="d-flex flex-row justify-content-center">
                    <p class="text-dashboard">{{$telechargements}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="d-flex flex-column card-content ecom-card2 height-180">
                <div>
                    <h5 class="text-muted warning position-absolute p-1">Consultations</h5>
                    <i class="ft-eye warning font-large-1 float-right p-1"></i>
                </div>
                {{-- <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <div id="progress-stats-bar-chart2"></div>
                    <div id="progress-stats-line-chart2" class="progress-stats-shadow"></div>
                </div> --}}
                <div class="d-flex flex-row justify-content-center">
                    <p class="text-dashboard">{{$consultations}}</p>
                </div>
            </div>
        </div>
    </div>
</div><!--/ eCommerce statistic -->

<!-- Statistics -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">Documents publiés récents</h4>
                    <h6 class="card-subtitle text-muted">Consulter les derniers documents publiés</h6>
                </div>
                <div id="carousel-area" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        
                        @foreach ($last_documents as $item)
                        <li data-target="#carousel-area" data-slide-to="{{$item->id-1}}" 
                            class="{{$item->id == 0 ? "active" : "" }}"></li>
                            @endforeach
                            
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            
                            @foreach ($last_documents as $item)
                            <div class="carousel-item">
                                <img src="<?php echo asset('storage/uploads/'.$item->id.'_thumball.png'); ?>" class="d-block w-100" alt="Third slide">
                            </div>
                            @endforeach 
                            
                        </div>
                        <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                            <span class="la la-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                            <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('back.documents.index')}}" class="card-link">Tout Voir</a>
                    </div>
                </div>
                <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                    <span class="float-left"></span>
                    <span class="tags float-right">
                        
                        @foreach ($last_documents as $item)
                        
                        <span class="badge badge-pill badge-primary">{{$item->filiere}}</span>
                        
                        @endforeach 
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Inscrits récents</h4>
                    <a class="heading-elements-toggle">
                        <i class="fa fa-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a data-action="reload">
                                    <i class="ft-rotate-cw"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div id="recent-buyers" class="media-list">
                        
                        @foreach ($last_users as $item)
                        <a href="#" class="media border-0">
                            <div class="media-left pr-1">
                                <span class="avatar avatar-md avatar-online">
                                    @if ($item->avatar)
                                    <img class="media-object rounded-circle" src="<?php echo asset('storage/avatar/'.$onedocument->user_id.'.png'); ?>" alt="avatar">
                                    @else
                                    <img class="media-object rounded-circle" src="{{asset('back/images/portrait/small/avatar-s-2.png')}}" alt="document">
                                    @endif
                                    
                                </span>
                            </div>
                            <div class="media-body w-100">
                                <span class="list-group-item-heading">{{ $item->nom }} {{ $item->prenom }}
                                    
                                </span>
                                <ul class="list-unstyled users-list m-0 float-right">
                                    {{-- @foreach ($last_users as $user ) --}}
                                        @foreach ($documents as $document )
                                            @if ($item->id === $document->user_id)
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="{{$document->titre}}" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="<?php echo asset('storage/uploads/'.$document->id.'_thumball.png'); ?>"
                                                    alt="Avatar">
                                                </li>
                                            @endif
                                        @endforeach
                                    {{-- @endforeach --}}
                                </ul>
                                <p class="list-group-item-text mb-0">
                                    <span class="blue-grey lighten-2 font-small-3"> #{{$item->id}} </span>
                                </p>
                            </div>
                        </a>
                        @endforeach 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Statistics -->
</div>
</div>

@endsection

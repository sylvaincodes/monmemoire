@extends('back.layouts.app')

@section('title', 'Consulter un document')

@section('style')
@endsection

@section('breadcrumb')
@component('back.layouts.components.breadcrumb')

@slot('page')
Les documents
@endslot
@slot('menu')
Formulaire
@endslot
@slot('action')
Consultation
@endslot

@endcomponent
@endsection

@section('content')
@include('back.forms.users.create')

<div class="row">
  
  <div class="col-xl-4 col-lg-12">
    <div class="card">
      
      <div class="card-content">
        <div class="card-body">

          <div id="carousel-area" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-area" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">Page de garde
                  <img src="<?php echo asset('storage/uploads/'.$onedocument->id.'_thumball.png'); ?>" class="d-block w-100" alt="Page de garde">
                </div>
                <div class="carousel-item">Preuve
                  <img src="<?php echo asset('storage/uploads/'.$onedocument->id.'_preuve.png'); ?>" class="d-block w-100" alt="Preuve">
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                    <span class="icon-md la la-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Précé.</span>
                </a>
            <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                    <span class="icon-md la la-angle-right icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Proch.</span>
                </a>
        </div>

          <h4 class="card-title">{{ trim(substr($onedocument->titre,0,250))}}</h4>
          <p class="card-text">{{ trim(substr($onedocument->resume,0,550)) }}</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-xl-8 col-lg-12">
    <div class="card">
      
      <div class="card-header">
        
        <div class="row">
          <h4 class="card-title" id="heading-multiple-thumbnails">Créé par : {{ $onedocument->nom_auteur .' '. $onedocument->prenom_auteur }}</h4>
          <h3 class="mx-1 badge bg-{{ $onedocument->status=='valide' ? 'success' : 'warning'}} ">  {{ $onedocument->status }} </h3>
          <a class="heading-elements-toggle">
            <i class="la la-ellipsis-v font-medium-3"></i>
          </a>
          <div class="heading-elements">
            <span class="avatar">
              @if ($onedocument->avatar)
              <img src="<?php echo asset('storage/avatar/'.$onedocument->user_id.'.png'); ?>" alt="avatar">
              @else
              <img src="{{asset('back/images/portrait/small/avatar-s-2.png')}}" alt="document">
              @endif
            </span>
          </div>
        </div>
        <div class="row p-2">
          <h4 class="card-title">Filiere : {{$onedocument->filiere}}</h4>
          <h4 class="card-title text-muted ml-2">Ajouté le : {{date('d-m-Y h:i', strtotime($onedocument->created_at))}}</h4>
        </div>
        
      </div>
      
      <div class="card-content">
        
        <iframe width="100%" height="100%" src="http://docs.google.com/gview?url=<?php echo asset('storage/uploads/'.$onedocument->id.'_pdf.pdf'); ?>" frameborder="0"></iframe>
        
        <div class="card-body d-flex flex-row">
          
          @if ($onedocument->status=="enattente")
          
          <a class="card-link d-flex flex-row align-items-center" href="#" onclick="confirmalert({{$onedocument->id}},'valide')">
            <i title="valider" class="icon-md success ft-check"></i> <span>
              Valider
            </span> 
          </a>
          <a class="card-link d-flex flex-row align-items-center" href="#" onclick="confirmalert({{$onedocument->id}},'rejete')">
            <i title="rejeter" class="icon-md danger ft-slash"></i><span>
              Rejeter
            </span> 
          </a>
          <form class="destroy-form-valide-{{$onedocument->id}}" action="{{ route('back.documents.destroy', $onedocument->id) }}" 	method="POST"
            class="d-none">
            @csrf
            @method('DELETE')
            <input type="hidden" name="status" value="valide">
          </form>
          
          <form class="destroy-form-rejete-{{$onedocument->id}}" action="{{ route('back.documents.destroy', $onedocument->id) }}" 	method="POST"
            class="d-none">
            @csrf
            @method('DELETE')
            <input type="hidden" name="status" value="rejete">
          </form>.
          
          @else
          <a class="px-3" href="#" onclick="confirmalert({{$onedocument->id}},'suspendu')">
            <i title="suspendre" class="icon-md danger ft-slash"></i>
          </a>
          <form class="destroy-form-suspendu-{{$onedocument->id}}" action="{{ route('back.documents.destroy', $onedocument->id) }}" 	method="POST"
            class="d-none">
            @csrf
            @method('DELETE')
            <input type="hidden" name="status" value="suspendu">
          </form>.
          @endif
          
          
        </div>
      </div>
      {{-- <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
        <span class="float-left">2 days ago</span>
        <span class="tags float-right">
          <span class="badge badge-pill badge-primary">Branding</span>
          <span class="badge badge-pill badge-danger">Design</span>
        </span>
      </div> --}}
    </div>
  </div>
  
  
</div>

@endsection

@section('script')

@endsection
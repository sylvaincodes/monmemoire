@extends('back.layouts.app')

@section('title', 'Les filieres')

@section('style')
@endsection

@section('breadcrumb')
@component('back.layouts.components.breadcrumb')

@slot('page')
Les filieres
@endslot
@slot('menu')
Formulaire
@endslot
@slot('action')
Modification
@endslot

@endcomponent
@endsection

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">

      @superadmin
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
          
          <form class="d-flex flex-wrap gap-3 needs-validation" novalidate method="post" action="{{ route('back.filieres.update',$filiere) }}">
            @csrf
            @method('PATCH')

            <input type="hidden" name="created_by" value="{{ Auth::user()->id}}">
            
            <div class="col-xl-6 col-lg-6 col-md-12">
                <fieldset class="form-group">
                  <input type="text" value="{{ old('libelle') ? old('libelle') :  $filiere->libelle}}" class="form-control" required name="libelle" placeholder="libelle">
                  @error('libelle')
                  <div class="p-0 m-0 alert danger">
                    @if ($errors->has('libelle'))
                    {{ $errors->first('libelle') }}.
                    @endif
                  </div>
                  @enderror
                </fieldset>
              </div>
              
              <div class="col-xl-6 col-lg-6 col-md-12">
                <fieldset class="form-group">
                  <input type="text" value="{{ old('description') ? old('description') :  $filiere->description}}" class="form-control"  name="description" placeholder="description">
                  @error('description')
                  <div class="p-0 m-0 alert danger">
                    @if ($errors->has('description'))
                    {{ $errors->first('description') }}.
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
      @else
      <p class="p-2"> <i class="ft-lock"></i> Vous n'aviez pas l'autorisation pour accéder à cette page.</p>
      @endsuperadmin
    </div>
    
  </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
	@if ($errors->any())
    $(window).on('load', function() {
		$(".modal").css("transform", "scale(1)");
    	$(".modal").css("transition", "0.2s");
    });
	@endif
</script>
@endsection
<div class="modal">
  
    <div class="modal-content  col-xs-4 col-sm-8">
      <div class="d-flex align-items-center row header justify-content-between">
        <div class="d-flex align-items-end gap-1">
          <i class="icon-md text-primary ft-edit"></i>
          <h4 class="pl-2">Nouveau</h4>
        </div>
        <i class="icon-md ft-x m-l-auto close-btn m-l-auto"></i>
      </div>
      <div class="body">
        <form class="d-flex flex-wrap gap-3 needs-validation" novalidate method="post" action="{{ route('back.filieres.store') }}">
          @csrf
          
          <input type="hidden" name="created_by" value="{{ Auth::user()->id}}">

          <div class="col-xl-6 col-lg-6 col-md-12">
            <fieldset class="form-group">
              <input type="text" class="form-control" value="{{ old('libelle') ? old('libelle') : "" }}" required name="libelle" placeholder="libelle">
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
              <input type="text" class="form-control" value="{{ old('description') ? old('description') :  ""}}" name="description" placeholder="description">
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
              Enregistrer
            </button>
          </div>
          
        </form>
      </div>
      <div class="footer">
        
      </div>
    </div>
  </div>
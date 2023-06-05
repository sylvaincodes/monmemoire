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
      <form class="d-flex flex-wrap gap-3 needs-validation" novalidate method="post" action="{{ route('back.users.store') }}">
        @csrf
        
        <input type="hidden" name="created_by" value="{{ Auth::user()->id}}">
        
        <div class="type col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group  @error('type') is-invalid @enderror">
            <select id="type"  name="type" class="form-select w-100" aria-label="Default select example">
              <option selected value="">Selectionner le type utilisateur</option>
              <option value="internaute">Internaute</option>
              <option value="admin">Administrateur</option>
              <option value="superadmin">Super administrateur</option>
            </select>
            @error('type')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('type'))
              {{ $errors->first('type') }}.
              @endif
            </div>
            @enderror
          </fieldset>
        </div>
        
        <div class="filiere_id col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group  @error('filiere_id') is-invalid @enderror">
            <select   name="filiere_id" class="form-select w-100" aria-label="Default select example">
              <option selected value="">Selectionner la filière</option>
              
              @foreach ($filieres as $filiere)
              
              <option value="{{$filiere->id}}">{{ ucfirst($filiere->libelle) }}</option>
              @endforeach
            </select>
            @error('filiere_id')
                <div class="p-0 m-0 alert danger">
                  @if ($errors->has('filiere_id'))
                  {{ $errors->first('filiere_id') }}.
                  @endif
                </div>
                @enderror
          </fieldset>
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group">
            <input type="text" class="form-control" required name="email" placeholder="email">
            @error('email')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('email'))
              {{ $errors->first('email') }}.
              @endif
            </div>
            @enderror
          </fieldset>
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group">
            <input type="text" class="form-control"  name="nom" placeholder="nom">
            @error('nom')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('nom'))
              {{ $errors->first('nom') }}.
              @endif
            </div>
            @enderror
          </fieldset>
        </div>
        
        
        <div class="col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group">
            <input type="text" class="form-control" name="prenom" placeholder="prenom">
            @error('prenom')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('prenom'))
              {{ $errors->first('prenom') }}.
              @endif
            </div>
            @enderror
          </fieldset>
          
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group">
            <input type="text" class="form-control" name="adresse" placeholder="adresse">
            @error('adresse')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('adresse'))
              {{ $errors->first('adresse') }}.
              @endif
            </div>
            @enderror
          </fieldset>
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group">
            <input type="text" class="form-control" required name="password" placeholder="mot de passe">
            @error('password')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('password'))
              {{ $errors->first('password') }}.
              @endif
            </div>
            @enderror
          </fieldset>
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group">
            <input type="text" class="form-control" required name="password_confirmation" placeholder="confirmer le mot de passe">
            @error('password_confirmation')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('password_confirmation'))
              {{ $errors->first('password_confirmation') }}.
              @endif
            </div>
            @enderror
          </fieldset>
        </div>
        
        
        <div class="col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group">
            <input type="text" class="form-control" name="telephone" placeholder="telephone">
            @error('telephone')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('telephone'))
              {{ $errors->first('telephone') }}.
              @endif
            </div>
            @enderror
          </fieldset>
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group">
            <input type="text" class="form-control" name="whatsapp" placeholder="whatsapp">
            @error('whatsapp')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('whatsapp'))
              {{ $errors->first('whatsapp') }}.
              @endif
            </div>
            @enderror
          </fieldset>
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12">
          <fieldset class="form-group">
            <input type="text" class="form-control" name="matricule" placeholder="matricule">
            @error('matricule')
            <div class="p-0 m-0 alert danger">
              @if ($errors->has('matricule'))
              {{ $errors->first('matricule') }}.
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
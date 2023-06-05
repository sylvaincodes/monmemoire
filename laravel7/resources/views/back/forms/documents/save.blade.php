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
          
          <div class="col-xl-12 col-lg-12 col-md-12">
            <fieldset class="form-group">
              <input type="text" class="form-control" required name="titre" placeholder="titre du document">
              @error('titre')
              <div class="p-0 m-0 alert danger">
                @if ($errors->has('titre'))
                {{ $errors->first('titre') }}.
                @endif
              </div>
              @enderror
            </fieldset>
          </div>
          
          <div class="col-xl-6 col-lg-6 col-md-12">
            <fieldset class="form-group">
              <input type="text" class="form-control" required  name="user_id" placeholder="l'auteur du document">
              @error('user_id')
              <div class="p-0 m-0 alert danger">
                @if ($errors->has('user_id'))
                {{ $errors->first('user_id') }}.
                @endif
              </div>
              @enderror
            </fieldset>
          </div>
          
          <div class="col-xl-6 col-lg-6 col-md-12">
            <fieldset class="form-group">
              <input type="text" class="form-control"  required name="filiere_id" placeholder="la filiere du document">
              @error('filiere_id')
              <div class="p-0 m-0 alert danger">
                @if ($errors->has('filiere_id'))
                {{ $errors->first('filiere_id') }}.
                @endif
              </div>
              @enderror
            </fieldset>
          </div>
  
          {{-- <div class="filiere_id col-xl-6 col-lg-6 col-md-12">
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
          </div> --}}
          
          
          <div class="col-xl-12 col-lg-12 col-md-12">
            <fieldset class="form-group">
              <input type="text" class="form-control" required name="description_courte" placeholder="une description courte du document">
              @error('description_courte')
              <div class="p-0 m-0 alert danger">
                @if ($errors->has('description_courte'))
                {{ $errors->first('description_courte') }}.
                @endif
              </div>
              @enderror
            </fieldset>
            
          </div>
          
          <div class="col-xl-12 col-lg-12 col-md-12">
            <fieldset class="form-group">
              <textarea  id="" cols="30" rows="40" type="text" class="form-control" name="resume" required >Ecrivez ici un long résumé du document.
              </textarea>
              @error('resume')
              <div class="p-0 m-0 alert danger">
                @if ($errors->has('resume'))
                {{ $errors->first('resume') }}.
                @endif
              </div>
              @enderror
            </fieldset>
          </div>
          
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="form-group">
              <label for="thumball" class="form-label">Page de garde (.png, .jpg) </label>
              <input  type="file" class="form-control" required name="thumball" id="thumball" >
              @error('thumball')
              <div class="p-0 m-0 alert danger">
                @if ($errors->has('thumball'))
                {{ $errors->first('thumball') }}.
                @endif
              </div>
              @enderror
            </div>
          </div>
          
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="form-group">
              <label for="pdf" class="form-label">Pdf du document (.pdf)</label>
              <input type="file" class="form-control" required name="pdf" id="pdf" >
              @error('pdf')
              <div class="p-0 m-0 alert danger">
                @if ($errors->has('pdf'))
                {{ $errors->first('pdf') }}.
                @endif
              </div>
              @enderror
            </div>
          </div>
          
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="form-group">
              <label for="word" class="form-label">Word du document  (.doc) </label>
              <input type="file" class="form-control" required name="word" id="word">
              @error('word')
              <div class="p-0 m-0 alert danger">
                @if ($errors->has('word'))
                {{ $errors->first('word') }}.
                @endif
              </div>
              @enderror
            </div>
          </div>
          
          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="form-group">
              <label for="preuve" class="form-label">Preuve de soutenance  (.jpg,.png.pdf) </label>
              <input type="file" class="form-control" required name="preuve" id="preuve" >
              @error('preuve')
              <div class="p-0 m-0 alert danger">
                @if ($errors->has('preuve'))
                {{ $errors->first('preuve') }}.
                @endif
              </div>
              @enderror
            </div>
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
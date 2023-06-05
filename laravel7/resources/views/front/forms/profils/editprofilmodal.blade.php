<div class="modal">
    
    <div class="modal-content  col-xs-4 col-sm-8">
        <div class="row header">
            <i class="icon-md text-primary ri-edit-line"></i>
            <h4>Nouveau</h4>
            <i class="icon-md ri-close-line m-l-auto close-btn"></i>
        </div>
        <div class="body">
            <form class="d-flex flex-wrap gap-3" method="post" action="{{ route('front.profilUpdate') }}">
                @csrf
                @method('PUT')

                <input type="text" name="filiere_id" class="d-block filiere_id" id="filiere_id" placeholder="filiere_id"/>
                <input type="hidden" name="id" id="user" value="{{Auth::user()->id}}">

                <label class="input-group col-xs-12 col-md-6">
                    <input name="nom" id="nom" type="nom" class="field  @error('nom') is-invalid @enderror" placeholder="nom"  name="email" autocomplete="off" value="{{$user->nom}}">
                    <span class="label">Nom</span>
                    <i class="icon-sm ri-user-6-line"></i>
                    @error('nom')
                    <div class="help-block">
                        <ul role="alert">
                            @if ($errors->has('nom'))
                            <li>{{ $errors->first('nom') }}.</li>
                            @endif
                        </ul>
                    </div>
                    @enderror
                </label>
                
                <label class="input-group col-xs-12 col-md-6">
                    <input name="prenom" id="prenom" class="field  @error('prenom') is-invalid @enderror" placeholder="prenom"  name="prenom" type="text" value="{{$user->prenom}}" />
                    <span class="label">Prénom</span>
                    <i class="icon-sm ri-user-6-line"></i>
                    @error('prenom')
                    <div class="help-block">
                        <ul role="alert">
                            @if ($errors->has('prenom'))
                            <li>{{ $errors->first('prenom') }}.</li>
                            @endif
                        </ul>
                    </div>
                    @enderror
                </label>
                
                <label class="input-group col-xs-12 col-md-6">
                    <input id="telephone"  class="field  @error('telephone') is-invalid @enderror" placeholder="telephone"  name="telephone" type="text" value="{{$user->telephone}}" />
                    <span class="label">telephone</span>
                    <i class="icon-sm ri-phone-line"></i>
                    @error('telephone')
                    <div class="help-block">
                        <ul role="alert">
                            @if ($errors->has('telephone'))
                            <li>{{ $errors->first('telephone') }}.</li>
                            @endif
                        </ul>
                    </div>
                    @enderror
                </label> 
                
                
                <label class="input-group col-xs-12 col-md-6">
                    <input id="filiere" class="field  @error('filiere') is-invalid @enderror" placeholder="filiere"  name="filiere" type="text" value="{{$user->filiere}}" />
                    <span class="label">filiere</span>
                    <i class="icon-sm ri-anticlockwise-line"></i>
                    @error('filiere')
                    <div class="help-block">
                        <ul role="alert">
                            @if ($errors->has('filiere'))
                            <li>{{ $errors->first('filiere') }}.</li>
                            @endif
                        </ul>
                    </div>
                    @enderror
                </label>
                
                
                <label class="input-group col-xs-12 col-md-6">
                    <input id="matricule" value="{{$user->matricule}}" class="field  @error('matricule') is-invalid @enderror" placeholder="matricule"  name="matricule" type="text"  />
                    <span class="label">matricule</span>
                    <i class="icon-sm ri-hashtag"></i>
                    @error('matricule')
                    <div class="help-block">
                        <ul role="alert">
                            @if ($errors->has('matricule'))
                            <li>{{ $errors->first('matricule') }}.</li>
                            @endif
                        </ul>
                    </div>
                    @enderror
                </label>
                
                <label class="input-group col-xs-12 col-md-6">
                    <input id="whatsapp" value="{{$user->whatsapp}}" class="field  @error('whatsapp') is-invalid @enderror" placeholder="whatsapp"  name="whatsapp" type="text"  />
                    <span class="label">whatsapp</span>
                    <i class="icon-sm ri-whatsapp-line"></i>
                    @error('whatsapp')
                    <div class="help-block">
                        <ul role="alert">
                            @if ($errors->has('whatsapp'))
                            <li>{{ $errors->first('whatsapp') }}.</li>
                            @endif
                        </ul>
                    </div>
                    @enderror
                </label>

                <label class="input-group col-xs-12 col-md-6">
                    <input id="adresse"  class="field  @error('adresse') is-invalid @enderror"  value="{{$user->adresse}}"placeholder="Adresse"  name="adresse" type="text"  />
                    <span class="label">Adresse</span>
                    <i class="icon-sm ri-mail-unread-line"></i>
                    @error('adresse')
                    <div class="help-block">
                        <ul role="alert">
                            @if ($errors->has('adresse'))
                            <li>{{ $errors->first('adresse') }}.</li>
                            @endif
                        </ul>
                    </div>
                    @enderror
                </label>
                
                <div class="row w-100">

                    <button class="row btn btn-primary" type="submit">
                        
                        <i class="icon-sm text-white ri-save-line"></i>
                        <span>
                            Enregistrer
                        </span>
                        
                    </button>	
                </div>
              
                
            </form>
        </div>
        <div class="footer">
            
        </div>
    </div>
</div>
@extends('front.layouts.app')

@section('title', 'Lire un document')

@section('breadcrumb')
@component('front.layouts.components.breadcrumb')
@slot('titre')
------------ Mettre en ligne -------------
@endslot
@slot('description')
Téléchargez vos documents sur le site.
@endslot
@slot('soustitre')

@endslot
@endcomponent
@endsection

@section('content')
<div class="container">        
    <div class="form-container">
        
        <div class="col-md-12 row flex-wrap gap-3">
            
            <fieldset class="w-100">
                <legend class="fs-4">Informations sur le document</legend>
                
                <form class="d-flex flex-wrap gap-1 needs-validation" method="post" 
                action="{{ route('back.documents.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" class="user_id" id="user_id" placeholder="user_id"/>
                    <input type="hidden" name="filiere_id" class="d-block filiere_id" id="filiere_id" placeholder="filiere_id"/>
                    <input type="hidden" value="enattente" name="status" class="d-block status" id="status" placeholder="status"/>
                    
                    <label class="col-xs-12 col-md-12 input-group ">
                        <input value="{{ old('filiere') ? old('filiere') : ""}}" id="filiere" type="text" class="field" 
                        placeholder="entrer la filiere" required name="filiere" autocomplete="off">
                        <span class="label">Filiere </span>
                        @error('filiere_id')
                        <div class="p-0 m-0 alert danger">
                            @if ($errors->has('filiere_id'))
                            {{ $errors->first('filiere_id') }}.
                            @endif
                        </div>
                        @enderror
                    </label>
                    
                    <label class="col-xs-12 col-md-12 input-group ">
                        <input value="{{ old('titre') ? old('titre') : ""}}" id="titre" type="text" class="field" 
                        placeholder="entrer le titre" required name="titre" autocomplete="off">
                        <span class="label">Titre </span>
                        @error('titre')
                        <div class="p-0 m-0 alert danger">
                            @if ($errors->has('titre'))
                            {{ $errors->first('titre') }}.
                            @endif
                        </div>
                        @enderror
                    </label>
                    
                    <label class="col-xs-12 col-md-12 input-group ">
                        <input value="{{ old('description_courte') ? old('description_courte') : ""}}" id="description_courte" type="text" class="field" placeholder="description_courte" required name="description_courte" autocomplete="off">
                        <span class="label">Description courte </span>
                        @error('description_courte')
                        <div class="p-0 m-0 alert danger">
                            @if ($errors->has('description_courte'))
                            {{ $errors->first('description_courte') }}.
                            @endif
                        </div>
                        @enderror
                    </label>
                    
                    <label class="col-xs-12 col-md-12 input-group">
                        <textarea rows="10" id="resume" type="text" class="field" placeholder="resume" required name="resume" autocomplete="off">
                            {{ old('resume') ? old('resume') : ""}}
                        </textarea>
                        <span class="label">Résumé </span>
                        @error('resume')
                        <div class="p-0 m-0 alert danger">
                            @if ($errors->has('resume'))
                            {{ $errors->first('resume') }}.
                            @endif
                        </div>
                        @enderror
                    </label>
                    
                    <label class="col-xs-12 col-md-12 input-group file">
                        <span class="label-file">Page de garde ( jpg, png)</span>
                        <input accept=".jpg,.png" class="file-field" aria-label="Fichier" type="file" name="thumball" >
                        <span class="label"></span>
                    </label> 
                    
                    <label class="col-xs-12 col-md-12 input-group file">
                        <span class="label-file">Pdf du document</span>
                        <input  accept=".pdf"  class="file-field" aria-label="Fichier" type="file" name="pdf" >
                        <span class="label"></span>
                    </label>
                    
                    <label class="col-xs-12 col-md-12 input-group file">
                        <span class="label-file">word du document (docx) </span>
                        <input  accept=".doc,.docx"  class="file-field" aria-label="Fichier" type="file" name="doc" >
                        <span class="label"></span>
                    </label>
                    
                    <label class="col-xs-12 col-md-12 input-group file">
                        <span class="label-file">Preuve de validation (jpg,png)</span>
                        <input accept=".jpg,.png" class="file-field" aria-label="Fichier" type="file" name="preuve" >
                        <span class="label"></span>
                    </label>                        
                    
                    <div class="row input-group m-auto">
                        <button class="fs-5 btn" type="submit">
                            Valider
                        </button>	
                    </div>
                    
                </form>
                
            </fieldset>
            
        </div>
    
    
</div>

</div>
@endsection
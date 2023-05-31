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
        
        <form method="post" action="{{ url('uploaddocument') }}">
            @csrf
            
            <div class="col-md-12 row flex-wrap gap-3">
                
                {{-- @auth
                @else
                <fieldset class="w-100">
                    <legend>Informations sur l'étudiant</legend>
                    
                    <label class="input-group">
                        <input id="nom" type="text" class="field" placeholder="nom" required name="nome" autocomplete="off">
                        <span class="label">Nom</span>
                        
                    </label>
                    
                    <label class="input-group">
                        <input id="prenom" type="text" class="field" placeholder="prenom" required name="prenom" autocomplete="off">
                        <span class="label">Prénom </span>
                        
                    </label>
                    
                    <label class="input-group">
                        <input id="contact" type="text" class="field" placeholder="contact" required name="contact" autocomplete="off">
                        <span class="label">Contact </span>
                        
                    </label>
                    
                    
                    <label class="input-group">
                        <input id="whatsapp" type="text" class="field" placeholder="whatsapp" required name="whatsapp" autocomplete="off">
                        <span class="label">Whatsapp </span>
                        
                    </label>
                    
                    <label class="input-group">
                        <input id="email" type="text" class="field" placeholder="email" required name="email" autocomplete="off">
                        <span class="label">Adresse email </span>
                        
                    </label>
                    
                </fieldset>
                @endauth
                
                 --}}
                <fieldset class="w-100">
                    <legend>Informations sur le document</legend>
                    
                    <form class="d-flex flex-wrap gap-1" method="post" action="{{ route('front.profilUpdate') }}">
                        @csrf
                        @method('PUT')
                           
                        <label class="col-xs-12 col-md-12 input-group ">
                            <input id="titre" type="text" class="field" placeholder="titre" required name="titre" autocomplete="off">
                            <span class="label">Catalogue </span>
                        </label>
                        
                        <label class="col-xs-12 col-md-12 input-group ">
                            <input id="titre" type="text" class="field" placeholder="titre" required name="titre" autocomplete="off">
                            <span class="label">Titre </span>
                        </label>
                        
                        <label class="col-xs-12 col-md-12 input-group ">
                            <input id="description_courte" type="text" class="field" placeholder="description_courte" required name="description_courte" autocomplete="off">
                            <span class="label">Description courte </span>
                        </label>

                        <label class="col-xs-12 col-md-12 input-group">
                            <textarea rows="10" id="resume" type="text" class="field" placeholder="resume" required name="resume" autocomplete="off">
                            </textarea>
                            <span class="label">Résumé </span>
                            
                        </label>
                        
                        <label class="col-xs-12 col-md-12 input-group file">
                            <span class="label-file">Page de garde ( jpg, png)</span>
                            <input class="file-field" aria-label="Fichier" type="file" name="preuve" >
                            <span class="label"></span>
                        </label> 

                        <label class="col-xs-12 col-md-12 input-group file">
                            <span class="label-file">Pdf du document</span>
                            <input class="file-field" aria-label="Fichier" type="file" name="pdf" >
                            <span class="label"></span>
                        </label>
                        
                        <label class="col-xs-12 col-md-12 input-group file">
                            <span class="label-file">word du document</span>
                            <input class="file-field" aria-label="Fichier" type="file" name="word" >
                            <span class="label"></span>
                        </label>
                        
                        <label class="col-xs-12 col-md-12 input-group file">
                            <span class="label-file">Preuve de validation</span>
                            <input class="file-field" aria-label="Fichier" type="file" name="preuve" >
                            <span class="label"></span>
                        </label>                        

                        
                    </form>
                    
                </fieldset>
                
                <div class="row input-group m-auto">
                    <button class="fs-5 btn" type="submit">
                        Valider
                    </button>	
                </div>
            </div>
            
            
        </form>
        
    </div>
    
</div>
@endsection
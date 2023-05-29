@extends('front.layouts.app')

@section('title', 'Lire un document')

@section('breadcrumb')
    @component('front.layouts.components.breadcrumb')
        @slot('titre')
        ------------ Mettre en ligne -------------
        @endslot
        @slot('description')
        Télécharger vos documents sur le site.
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
                
                <div class="row flex-wrap gap-3 justify-content-center">

                    <fieldset>
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
                    

                <fieldset>
                    <legend>Informations sur le document</legend>
                    <label class="input-group">
                        <input id="titre" type="text" class="field" placeholder="titre" required name="titre" autocomplete="off">
                        <span class="label">Titre </span>
                    </label>
                    
                    <label class="input-group file">
                        <span class="label-file">Pdf</span>
                        <input class="file-field" aria-label="Fichier" type="file" name="pdf" >
                        <span class="label"></span>
                    </label>
                    
                    <label class="input-group file">
                        <span class="label-file">word</span>
                        <input class="file-field" aria-label="Fichier" type="file" name="word" >
                        <span class="label"></span>
                    </label>
                    
                    <label class="input-group file">
                        <span class="label-file">Preuve</span>
                        <input class="file-field" aria-label="Fichier" type="file" name="preuve" >
                        <span class="label"></span>
                    </label>
                    
            
                    <label class="input-group">
                        <input id="mention" type="text" class="field" placeholder="email" required name="email" autocomplete="off">
                        <span class="label">Mention obtenue </span>
                        
                    </label>
                    
                    <label class="input-group">
                        <textarea rows="10" id="resume" type="text" class="field" placeholder="resume" required name="resume" autocomplete="off">
                        </textarea>
                        <span class="label">Résumé </span>
                        
                    </label>

                    </fieldset>
                
                    <div class="input-group m-auto">
                        <button class="fs-5 btn" type="submit">
                            Valider
                        </button>	
                    </div>
                
                </div>

            </form>
            
        </div>
    
    </div>
@endsection
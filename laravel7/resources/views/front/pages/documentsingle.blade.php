@extends('front.layouts.app')

@section('title', 'Lire un document')

@section('breadcrumb')
    @component('front.layouts.components.breadcrumb')
        @slot('titre')
        ------------ Lecture d'un document -------------
        @endslot
        @slot('description')
        Profitez d'une lecture agréable et souple.
        @endslot
        @slot('soustitre')
        Mémoire Licence....
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">        
        <div class="wrapper single-document d-flex">

        <iframe width="100%" height="100%" src="http://docs.google.com/gview?url=simulateur.42web.io/rapportsiefinale.pdf&embedded=true" frameborder="0"></iframe>
        
        {{--         
        <iframe width="100%" height="100%" src="http://docs.google.com/gview?url=<?php echo asset('front/pdfs/example.pdf')?>&embedded=true" frameborder="0"></iframe> --}}
        
            <div class="d-flex flex-column justify-content-center gap-2 p-2 w-100">

                <h5>Conception et réalisation d’un
                    Système d’information des étudiants
                    du département informatique</h5>
                
                <fieldset>
                        <legend class="fs-5">Description</legend>
                        <p class="fs-6"> Conception et réalisation d’un
                        Système d’information des étudiants
                        du département informatique</p>

                </fieldset>
        

                <fieldset>
                    <legend class="fs-5">Informations complémentaires</legend>

                <ul class="list">
                    <li > <span >Auteur :</span>  <span > Adande sylvain</span> </li>                    
                    <li > <span >Publié le :</span>  <span >10 janvier 2023</span> </li>
                    <li ><span > vues :</span> <span >500</span> </li>
                    <li></li>
                </ul>
               

                
            </fieldset>
            
            <a href="#">
                <i title="icon-lg télécharger le document" class="icon-sm ri-download-2-line"></i> 
                <span class="fs-6 text-link">
                    Télécharger le document.
                </span>
            </a>
            </div>
        </div>
    </div>
@endsection
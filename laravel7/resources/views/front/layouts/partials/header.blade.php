<header id="header">
    <div class="header-container d-flex align-items-center">
       
        <div class="left">
            <button class="mobile-nav-toggle">
                    <i class="open-menu-btn icon-md ri-menu-line"></i>
            </button>
            <div class="logo">
                <h5>
                    <a href="{{url('/')}}">
                        Monmemoire
                    </a>
                </h5>
            </div>
            <nav class="mobile-hide desktop-menu">
                <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Acceuil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/catalogue')}}">Explorer</a></li>
                </ul>
            </nav>
        </div>
        

        <form action="" method="post" class="w-100">
            <div class="input-box d-flex">
                <input type="text" class="search-field"  placeholder="Rechercher"/>
                <button type="submit" id="search-submit">
                    <i class="icon-sm ri-search-2-line"></i>
                </button>
            </div>
        </form>


        <div class="right">
        <a class="mobile-hide add-online" href="{{url('uploaddocument')}}" class="add-btn">
            
                <span>Mettre en ligne</span>
        </a>

        @auth
        <ul class="mobile-hide nav-menu profile m-l-auto">
            <li class="dropdown nav-item">
                <a class=" nav-link" href="#">
                       
                    <ul class="dropdown-menu">

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/front/mestelechargements')}}">
                                <i class="ri-user-line"></i>
                                <span>
                                   Mon profil
                                </span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/front/mesdocuments')}}">
                                <i class="ri-file-line"></i>
                                <span>
                                    Mes documents
                                </span>    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/front/mestelechargements')}}">
                                <i class="ri-download-2-line"></i>
                                <span>
                                    Mes téléchargements
                                </span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/front/mestelechargements')}}">
                                <i class="ri-logout-box-line"></i>
                                <span>
                                    Se déconnecter
                                </span> 
                            </a>
                        </li>
                    </ul>
                </a>
            </li>
        </ul>
        @else
        <ul class="mobile-hide nav-menu profile m-l-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">
                    <span>Se connecter</span>
                </a>
            </li>
        </ul>
        @endauth
        
        </div>

    </div>
</header>
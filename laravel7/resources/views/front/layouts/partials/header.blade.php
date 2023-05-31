<header id="header">
    <div class="header-container d-flex align-items-center">
        
        <div class="left d-flex align-items-center">
            <button class="mobile-nav-toggle">
                <i class="open-menu-btn icon-md ri-menu-line"></i>
            </button>
            <a class="logo" href="{{url('/')}}">
                Monmemoire
            </a>
            <nav class="mobile-hide desktop-menu">
                <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Acceuil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/catalogue')}}">Explorer</a></li>
                </ul>
            </nav>
        </div>
        
        <form class="search-container w-100 " action="" method="post" >
            <div class="input-box d-flex">
                <input type="text" class="search-field"  placeholder="Que recherchez vous ?"/>
                <button type="submit" id="search-submit">
                    <i class="icon-sm ri-search-2-line"></i>
                </button>
            </div>
        </form>
        
        <div class="header-right">
            <a class="add-online" href="{{url('uploaddocument')}}" class="add-btn">
                <span>Mettre en ligne</span>
            </a>
            
            @auth
            <ul class="nav-menu profile m-l-auto">
                <li class="dropdown nav-item">
                    
                    <a class="nav-link" href="#">
                        <div class="around-avatar">
                            <span> <?php echo ucfirst(Auth::user()->email[0]) ?> </span>
                        </div>
                        
                    </a>
                    
                    
                    <ul class="dropdown-menu">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/front/profilForm')}}">
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
                            <a class="nav-link" id="logout-btn2">
                                <i class="ri-logout-box-line"></i>
                                <span>
                                    Se déconnecter
                                </span> 
                            </a>
                            <form id="logout-form-back" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                        </li>
                    </ul>
                    
                    
                </li>
            </ul>
            @else
            <ul class="nav-menu profile m-l-auto">
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
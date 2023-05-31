<div class="mobile-menu">
    <div class="header d-flex justify-content-between">
        <div class="logo">
            <h5>
                <a href="{{url('/')}}">
                    Monmemoire
                </a>
            </h5>
        </div>
        <i class="close-menu-btn icon-md ri-close-fill"></i>
    </div>
    
    <div class="content">
        <a href="{{url('uploaddocument')}}" class="btn d-flex add-btn">
            <i class="icon-md ri-download-2-line"></i>
            <span>Mettre en ligne</span>
        </a>
        
        
        <nav>
            
            <ul class="nav-menu">
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}"> <i class="ri-home-line"></i> Acceuil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/catalogue')}}"> <i class="ri-book-line"></i> Explorer</a></li>
            </ul>
            <hr>
            
            @auth
            <ul class="nav-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/front/mesdocuments')}}">
                        <i class="ri-user-line"></i>
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
            </ul>
            <hr>
            <ul class="nav-menu profile">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/front/profilForm')}}">
                        <div class="around-avatar">
                            <span> <?php echo ucfirst(Auth::user()->email[0]) ?> </span>
                        </div>
                        <span>
                            <?php echo ucfirst(Auth::user()->email) ?>
                        </span>    
                        <i class="m-l-auto ri-arrow-right-line"></i>
                    </a>
                </li>
            </ul>
            
            <ul class="nav-menu m-t-auto">
                <li class="nav-item">
                    <a class="nav-link" id="logout-btn">
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
        @else
        <ul class="nav-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/front/mestelechargements')}}">
                    <i class="ri-edit-line"></i>
                    <span>
                        Se connecter
                    </span> 
                </a>
            </li>
        </ul>
        @endauth
        
    </nav>
    
    
    
</div>        
</div>
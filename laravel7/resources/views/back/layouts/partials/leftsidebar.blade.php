<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{asset('back/images/backgrounds/02.jpg')}}">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">       
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
            {{-- <img class="brand-logo" alt="Monmémoire admin logo" src="{{asset('back/images/logo/logo.png')}}"/> --}}
            <h3 class="brand-text">Admin</h3></a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        
        <li class=" nav-item"><a href="{{url('/')}}"><i class="ft-tv"></i><span class="menu-title" data-i18n="">Site web</span></a>
        </li>
        
        <li class=" nav-item"><a href="{{route('back.home')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Tableau de bord</span></a>
        </li>
        
        <li class=" nav-item"><a href="{{route('back.documents.index')}}"><i class="ft-file"></i><span class="menu-title" data-i18n="">Documents</span></a>
        </li>
        
        <li class=" nav-item"><a href="{{route('back.filieres.index')}}"><i class="ft-box"></i><span class="menu-title" data-i18n="">Filieres</span></a>
        </li>
        

        @superadmin
        <li class=" nav-item"><a href="{{route('back.users.index')}}"><i class="ft-user"></i><span class="menu-title" data-i18n="">Utilisateurs</span></a>
        </li>@endsuperadmin
    
      </ul>
    </div><a class="btn btn-info btn-block btn-glow btn-upgrade-pro mx-1" href="#" target="_blank">Documentation</a>
    <div class="navigation-background"></div>
  </div>
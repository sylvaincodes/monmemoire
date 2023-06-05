<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="collapse navbar-collapse show" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
          <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
            <ul class="dropdown-menu">
              <li class="arrow_box">
                <form>
                  <div class="input-group search-box">
                    <div class="position-relative has-icon-right full-width">
                      <input class="form-control" id="search" type="text" placeholder="Search here...">
                      <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav float-right">         
          <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" 
            href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="flag-icon flag-icon-fr"></i><span class="selected-language"></span></a>
            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
              <div class="arrow_box">
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> Anglais</a>
                
              </div>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav float-right">  
          <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online ">
            @if (\Auth::user()->avatar)
                                    <img class="media-object rounded-circle" src="<?php echo asset('storage/avatar/'.$onedocument->user_id.'.png'); ?>" alt="avatar">
                                    @else
                                    <img class="media-object rounded-circle" src="{{asset('back/images/portrait/small/avatar-s-2.png')}}" alt="document">
                                    @endif
                                    
            <i></i></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="arrow_box_right">
                <a class="dropdown-item" href="#">
                  <a class="dropdown-item user-name text-bold-700" href="#"><i class="ft-user"></i>{{Auth::user()->email}} </a>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('back.users.edit', Auth::user()->id) }}"><i class="ft-edit"></i>Mon profil </a>
                
                <div class="dropdown-divider"></div>
                <a class="logout-btn dropdown-item" href="#"><i class="ft-power"></i> Se déconnecter</a>
        
                <form id="logout-form-back" action="{{ route('logout') }}" method="POST"
                class="d-none">
                @csrf
              </form>
              
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
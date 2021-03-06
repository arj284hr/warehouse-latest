<nav class="navbar navbar-default no-margin navbar-fixed-top">    
    <div class="fixed-brand">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
        </button>
        <a class="navbar-brand" style="padding: 8px 30px;" href="#">
               <span class="nav__logo-name"><img src="{{asset('/assets/img/EXE_logistics_Solutions_w_tagline1-(1).png')}}" alt="User" class="main-dashboard-logo" width="130px"></span></a>        
        {{-- fa fa-rocket fa-4 --}}
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active">
                <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2" style = "display: none;"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button>
            </li>
            <li id = "dp">
                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                    {{ Auth::user()->first_name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a id = "dpa" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }} 
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>    
</nav>
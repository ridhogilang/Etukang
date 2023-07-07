    <header class="fixed-top scroll-change logo-left" data-menu-height="139">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-main navbar-middle">
                <div class="container">
                    <div class="scroll-hide">
                        <div class="container">
                            <a class="navbar-brand center" href="/">
                                <img class="logo-default" src="{{ asset('user/images/logo1.png') }}" alt="logo" style="max-width: 100%; height: auto;">

                            </a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="/">Home <span class="caret"></span></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/tukang">Tukang <span class="caret"></span></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/kontak">Contacts <span class="caret"></span></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/daftar">Carrers <span class="caret"></span></a>
                            </li>
                            @auth
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Welcome Back, {{ auth()->user()->username }} <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="dashboard">Dasboard</a></li>
                                    <li>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Log Out
                                        </a>
                                        
                                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>                                  
                                </ul>
                            </li>
                            @endauth
                        </ul>
                        <div class="nav navbar-nav navbar-right">
                            @auth

                            @else
                            <ul class="nav navbar-nav lan-menu">
                                <li class="dropdown">
                                    <a href="/login" class="dropdown-toggle" data-toggle="dropdown" role="button">Login</a>
                                </li>
                            </ul>
                            @endauth
                            <div class="custom-area">
                                <a href="/tukang" class="btn btn-sm hidden-sm">Cari Tukang Terbaik, Klik Disini!!</a>
                            </div>
                            {{-- <form class="navbar-form" role="search">
                                <div class="search-box-menu">
                                    <div class="search-box scrolldown">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                    </div>
                                    <button type="button" class="btn btn-default btn-search">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

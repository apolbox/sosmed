<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top p-md-1 p-xs-0 border-bottom">
    <div class="container-fluid">
        <a href="{{ url('/') }}" class="navbar-brand">
            <i class="zmdi"> Apolbox</i>
        </a>

        <div class="col-md-6 ml-0 search-form">
            <form class="my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="search" class="form-control form-control-sm" name="q" placeholder="Cari di apolbox">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-white px-3">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <button type="button" class="btn-search border-0 d-md-none d-sm-block d-xs-block bg-transparent" data-toggle="modal" data-target="#navbar-search">
                <i class="fa fa-search fa-lg"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <div class="nav dropdown">
                <a href="#homepage" class="nav-link active p-md-auto p-2x border-0" id="homepage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="zmdi zmdi-home zmdi-hc-fw zmdi-hc-lg"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="homepage">
                    Hello friend
                </div>
            </div>
            <ul id="toolbar" class="nav dropdown nav-justified mx-md-auto border-0">
                <li class="nav-item d-md-none">

                </li>
                <li class="nav-item">
                    <a href="#friendship" class="nav-link p-md-auto p-2x border-0" id="friendship-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="zmdi zmdi-accounts zmdi-hc-fw zmdi-hc-lg"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#messages" class="nav-link p-md-auto p-2x border-0" id="messages-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="zmdi zmdi-comments zmdi-hc-fw zmdi-hc-lg"></i>
                    </a>
                </li>
                  <li class="nav-item">
                    <a href="#notification" class="nav-link p-md-auto p-2x border-0" id="notification-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="zmdi zmdi-globe zmdi-hc-fw zmdi-hc-lg"></i>
                        </a>
                  </li>
                  <li class="nav-item d-md-none">
                     <a href="#search" class="nav-link p-md-auto p-2x border-0" id="search-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="zmdi zmdi-search zmdi-hc-fw zmdi-hc-lg"></i>
                     </a>
                  </li>
                  <li class="nav-item d-md-none">
                        <a href="#menu" class="nav-link p-md-auto p-2x border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <i class="zmdi zmdi-menu zmdi-hc-fw zmdi-hc-lg"></i>
                         </a>
                    </li>
                    {{--<li class="nav-item dropdown users">
                        <a href="#" class="nav-link text-light bg-dark" role="button" id="settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img width="28" height="24" class="rounded-circle" src="{{ asset('img/male.png') }}" alt="...">
                            <i class="zmdi zmdi-account zmdi-hc-lg"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="settings">
                            <li class="dropdown-item">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>--}}
            </ul>

            <div class="dropdown justify-content-end">
                <a href="#" class="nav-link" role="button" id="settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img width="26" height="24" class="rounded-circle" src="{{ asset('img/male.png') }}" alt="...">
                </a>

                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="settings">
                    <li class="dropdown-item">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="modal fade" id="navbar-search" tabindex="-1" role="dialog" aria-labelledby="navbar-search-label" aria-hidden="true">
    <div class="modal-dialog m-0" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="ui-widget">
                    <form class="form-inline" action="{{ route('search') }}" method="GET">
                        <input type="search" id="tags" class="form-control rounded-0" name="q" placeholder="Cari di apolbox">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

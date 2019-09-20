<nav class="main-header navbar navbar-expand bg-light navbar-light border-bottom">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <div class="input-group input-group-sm ml-2 mr-2">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar">
            <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">

            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user-circle h-icon"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right mp-0" style="width: 250px; padding-bottom: 4px !important;">

                <div class="row">
                    <img class="col-6 img-rounded" src="img/avatar04.png" alt="User Image" style="object-fit: fill">
                    <div class="col-6 mp-0">
                        <p class="caps pt-2 mb-0"><strong>{{ Auth::user()->name }}</strong></p>
                        <p class="mp-0"><small>{{ Auth::user()->email }}</small></p>
                        <a class="btn btn-block btn-outline-success btn-sm mb-2 mt-2"
                            style="width: 110px; height: 20px; line-height: 10px !important; font-weight: 700"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('edit-form').submit();">
                            <small>Edit Profile</small>
                        </a>
                        <form id="edit-form" action="{{ route('logout') }}" method="POST" 
                                style="display: none;">@csrf</form>                                    
                        <a class="btn btn-block btn-outline-danger btn-sm"
                            style="width: 110px; height: 20px; line-height: 10px !important; font-weight: 700"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <small>Logout</small>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                                style="display: none;">@csrf</form>                                    
                    </div>
                </div>                

                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item pl-3">
                    <i class="fa fa-envelope pr-1 m-icon"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>

                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item pl-3">
                    <i class="fa fa-user pr-1 m-icon"></i> 8 appointments
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>

                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item pl-3">
                    <i class="fa fa-file pr-1 m-icon"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider mb-1"></div>
            </div>

        </li>
    </ul>
</nav>
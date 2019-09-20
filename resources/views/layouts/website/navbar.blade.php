<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top">

    <div class="container">

        <a href="{{ url('/') }}">
           <i class="fas fa-chevron-left"></i>
        </a>
        <div class="navbar-brand">{{ $title }}</div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if (!empty($menus) && count($menus) > 0)
                    @foreach ($menus as $menu)
                        @if ($menu->type == 1)
                            <li class="nav-item {{ ($menu->name == $title) ? 'active-menu-item' : '' }}">
                                <a class="nav-link" href="{{ $menu->link }}">{{ $menu->name }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>

        </div>

    </div>
    
</nav>
    
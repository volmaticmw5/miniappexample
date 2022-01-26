<nav class="navbar navbar-expand-md navbar-green-overwride fixed-top">
    <a class="navbar-brand px-2" href="{{ route('Dashboard') }}">{{ env('APP_NAME', 'Mini App')}}</a>
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item @if($PageName == 'Dashboard') active @endif">
            <a class="nav-link px-4" href="{{ route('Dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item @if($PageName == 'Products') active @endif">
            <a class="nav-link px-4" href="{{ route('Products') }}">Products</a>
        </li>
        <li class="nav-item @if($PageName == 'Settings') active @endif">
            <a class="nav-link px-4" href="{{ route('Settings') }}">Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link logout px-4" href="{{ route('Logout') }}">Logout <i class="las la-sign-out-alt"></i></a>
        </li>
    </div>
</nav>
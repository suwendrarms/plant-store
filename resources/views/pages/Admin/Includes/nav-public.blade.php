<nav class="navbar navbar-expand navbar-light bg-white topbar  static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <img src="{{ asset('img/logo.png') }}" id="logo_img" style="" width="50" height="auto">
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item">
            @if (Auth::user())
            <a class="btn btn-link text-dark" href="{{ route('dashboard') }}">
                Dashboard
            </a>
            @else
            <a class="btn btn-link text-dark" href="{{ route('login') }}">
                Login
            </a>
            @endif
        </li>
    </ul>

</nav>

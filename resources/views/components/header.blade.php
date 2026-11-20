<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand fw-bold fs-4" href="/">
            <i class="bi bi-heart-pulse-fill me-2"></i>
            Blood Shield
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <ul class="navbar-nav ms-auto gap-lg-2">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('donors.*') ? 'active' : '' }}"
                        href="{{ route('donors.index') }}">
                        Donors
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('donations.*') ? 'active' : '' }}"
                        href="{{ route('donations.index') }}">
                        Donations
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('storage') ? 'active' : '' }}"
                        href="{{ route('storage') }}">
                        Blood Storage
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        About Us
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

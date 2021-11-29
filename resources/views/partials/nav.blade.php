<nav class="navbar">

    <ul class="nav-menu">
        <li class="nav-menu-item {{ setActive('home') }}">
            <a class="nav-menu-link" href="{{ route('home') }}">
                @lang('Home')
            </a>
        </li>
        <li class="nav-menu-item {{ setActive('contact') }}">
            <a class="nav-menu-link" href="{{ route('contact') }}">
                @lang('Contact')
            </a>
        </li>
        <li class="nav-menu-item {{ setActive('projects') }}">
            <a class="nav-menu-link" href="{{ route('projects') }}">
                @lang('Projects')
            </a>
        </li>
        <li class="nav-menu-item {{ setActive('about') }}">
            <a class="nav-menu-link" href="{{ route('about') }}">
                Quién soy
            </a>
    </ul>
    <button class="toggle">
        <i class="fas fa-bars"></i>
    </button>
</nav>


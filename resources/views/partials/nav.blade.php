<nav class="navbar bg-white shadow-sm">
    <a class="navbar-brand" href="{{ route('home') }}">
    
    <ul class="nav nav-pills">
        <li class="nav-item {{ setActive('home') }}">
            <a class="nav-link" href="{{ route('home') }}">
                @lang('Home')
            </a>
        </li>
        <li class="nav-item {{ setActive('contact') }}">
            <a href="{{ route('contact') }}">
                @lang('Contact')
            </a>
        </li>
        <li class="nav-item {{ setActive('projects') }}">
            <a href="{{ route('projects') }}">
            </a>
        </li>
    </ul>
</nav>


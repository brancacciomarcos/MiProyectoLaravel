<nav class="navbar bg-white shadow-sm" >
    <ul class="nav">
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
    </ul>
</nav>
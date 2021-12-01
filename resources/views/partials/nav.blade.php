
<nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <li class="nav-menu-item {{ setActive('home') }}">
        <a class="nav-menu-link" href="{{ route('home') }}">
            @lang('Home')
        </a>
    </li>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ml-auto">
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
        </li>
      </ul>
      
    </div>
  </nav>


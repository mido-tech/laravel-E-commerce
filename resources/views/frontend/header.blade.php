<header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="{{asset('frontend')}}/assets/images/logo.svg" width="160" height="50" alt="Footcap logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="{{asset('frontend')}}/assets/images/logo.svg" width="190" height="50" alt="Footcap logo">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">About</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Products</a>
          </li>

          <li class="navbar-item">
            <a href="{{url('cart')}}" class="navbar-link">Cart</a>
          </li>
          <li class="navbar-item">
            <a href="{{url('my-orders')}}" class="navbar-link">My Order</a>
          </li>

          <li class="nav-item d-flex align-items-center">

            <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>


                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user me-sm-1">

                </i>
                    <li>
                        <a class="dropdown-item" href="#">
                            {{ Auth::user()->name }}
                          </a>
                      </li>
                      <li>
                          <a class="dropdown-item" href="#">
                          My profile
                          </a>
                      </li>
                      <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault()
                          document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                          </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                    </li>
                @endguest
            </a>

          </li>

        </ul>

        <ul class="nav-action-list">

          <li>
            <button class="nav-action-btn">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Search</span>
            </button>
          </li>

          <li>
            <a href="#" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Login / Register</span>
            </a>
          </li>

          <li>
            <button class="nav-action-btn">
              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>

              <span class="nav-action-text">Wishlist</span>

              <data class="nav-action-badge" value="5" aria-hidden="true">5</data>
            </button>
          </li>

          <li>
            <button class="nav-action-btn">
              <ion-icon name="bag-outline" aria-hidden="true"></ion-icon>

              <data class="nav-action-text" value="318.00">Basket: <strong>$318.00</strong></data>

              <data class="nav-action-badge" value="4" aria-hidden="true">4</data>
            </button>
          </li>

        </ul>

      </nav>

    </div>
  </header>

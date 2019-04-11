<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('product.index')}}" style="font-size:30px;color:#F2D900"><b>Car Center</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.shoppingcart') }}"><i class="fas fa-shopping-cart"></i> Shopping Cart <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
          User Management
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::check())
          <a class="dropdown-item" href="{{ route('user.profile') }}">user profile</a>
          <a class="dropdown-item" href="{{ route('user.logout')}}">log out</a>
          @else
          <a class="dropdown-item" href="{{ route('user.signup') }}">Sign up</a>
          <a class="dropdown-item" href="{{ route('user.signin')}}">Sign in</a>
          @endif
          <div class="dropdown-divider"></div>
        </div>
      </li>
      </ul>
    </form>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="{{ route('product.index') }}">{{__('customlang.navShirt')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="lang/en">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    EN
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lang/de">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    DE
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product.shoppingCart') }}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    {{__('customlang.navCart')}}
                    <span class="badge">
                        {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}
                    </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    {{__('customlang.navAccount')}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if(Auth::check())
                        <a class="dropdown-item" href="{{ route('user.profile') }}">{{__('customlang.navProfile')}}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('user.logout') }}">{{__('customlang.navLogout')}}</a>
                    @else
                        <a class="dropdown-item" href="{{ route('user.signup') }}">{{__('customlang.navRegister')}}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('user.signin') }}">{{__('customlang.navLogin')}}</a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>

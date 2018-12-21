@if (auth()->user())
    <li class="header-account dropdown default-dropdown">
        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
            <div class="header-btns-icon">
                <i class="fa fa-user-o"></i>
            </div>
            <strong class="text-uppercase">{{$user->name}} <i class="fa fa-caret-down"></i></strong>
        </div>
        <a href="{{$user->profile->path()}}" class="text-uppercase">Profile</a> / <a href="{{route('register')}}" class="text-uppercase">Logout</a>
        <ul class="custom-menu">
            <li><a href="{{$user->profile->path()}}"><i class="fa fa-user-o"></i> My Account</a></li>
            <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
            <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
            <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
            <li><a href="#"><i class="fa fa-unlock-alt"></i> Support</a></li>
            <li><a href="{{route('logout')}}"><i class="fa fa-user-plus"></i> LOGOUT</a></li>
        </ul>
    </li>
@endif

@if (auth()->guest())
    <li class="header-account dropdown default-dropdown">
        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
            <div class="header-btns-icon">
                <i class="fa fa-user-o"></i>
            </div>
            <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
        </div>
        <a href="{{route('login')}}" class="text-uppercase">Login</a> / <a href="{{route('register')}}" class="text-uppercase">Register</a>
        <ul class="custom-menu">
            <li><a href="{{route('login')}}"><i class="fa fa-user-o"></i> My Account</a></li>
            <li><a href="{{route('login')}}"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
            <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
            <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
            <li><a href="{{route('login')}}"><i class="fa fa-unlock-alt"></i> Login</a></li>
            <li><a href="{{route('register')}}"><i class="fa fa-user-plus"></i> Create An Account</a></li>
        </ul>
    </li>
@endif
<!-- Header section -->
<header class="header-section">
    <div class="header-warp">
        <div class="container">
            <a href="#" class="site-logo">
                <img src="img/logo.png" alt="">
            </a>
            <div class="user-panel">
                <a href="{{ route('login') }}">Login</a><span>
                    {{--  </span><a
                   href="{{ route('register') }}">Register</a>  --}}
            </div>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="main-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('aboutus') }}">About us</a></li>
                <li><a href="{{ route('courses') }}">Courses</a></li>
                <li><a href="{{ route('news') }}">News</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Header section end -->

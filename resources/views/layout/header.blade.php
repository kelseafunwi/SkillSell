 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><img src="/logo/logo.jpg"  alt="" class="img-fluid me-2"><a href="index.html">SkillzSell<span>.</span></a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto @yield('homepage-active') " href="/">Home</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Our Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> --}}
                @if (Auth::check())
                    <div class="d-md-flex @yield('linksClass')">
                        <li><a class="nav-link scrollto @yield('services-active')" href="/services">Our Servoces</a></li>
                        <li><a class="nav-link scrollto @yield('companies-active')" href="/company">Companies & Training</a></li>
                        <li><a class="nav-link scrollto @yield('messages-active')" href="/messages/1">Messages</a></li>
                        <li><a class="nav-link scrollto @yield('people-active')" href="/people">People</a></li>
                        {{-- <li><a class="nav-link scrollto @yield('job-search-active')" href="/jobs">Jobs</a></li> --}}
                    </div>
                @endif
            </ul>
            {{-- profile icon.  --}}
            @if (Auth::check())
                <div class="d-flex align-items-center">
                    <i class="bi bi-list mobile-nav-toggle"></i>
                    <a href="/{{ Auth::id()}}/account"><img src="/storage{{ Auth::user()->profile }}" class="ml-3 profile-img" alt=""><span class="mx-2">{{ Auth::user()->firstname }}</span></a>
                </div>
            @endif
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

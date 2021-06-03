<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{ Request::routeIs('home') ? 'active' : '' }}"><a href={{route('home')}}>Home</a></li>
            <li class="{{ Request::routeIs('services') ? 'active' : '' }}"><a href={{route('services')}}>Services</a></li>
            <li class="{{ Request::routeIs('blog') ? 'active' : '' }}"><a href={{route('blog')}}>Blog</a></li>
            <li class="{{ Request::routeIs('contact') ? 'active' : '' }}"><a href={{route('contact')}}>Contact</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->
<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <a href="index.html" class="logo m-0">Tour <span class="text-primary">.</span></a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">About</a></li>
                <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="/service">Services</a></li>
                <li class="{{ Request::is('galery') ? 'active' : '' }}"><a href="/galery">Gallery</a></li>
                <li class="{{ Request::is('partner') ? 'active' : '' }}"><a href="/partner">Partners</a></li>
                <li class="{{ Request::is('testimoni') ? 'active' : '' }}"><a href="/testimoni">Testimonials</a>
                </li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
            </ul>

            <a href="#"
                class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>

        </div>
    </div>
</nav>

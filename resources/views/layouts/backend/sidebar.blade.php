<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/admin" class="b-brand text-primary">
                <img src="{{ asset('assetsbackend/images/logo-white.svg') }}" alt="logo image" class="logo-lg" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>

                <li class="pc-item {{ Request::is('admin') ? 'active' : '' }}">
                    <a href="/admin" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/hero*') ? 'active' : '' }}">
                    <a href="/admin/hero" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Hero</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/about*') ? 'active' : '' }}">
                    <a href="/admin/about" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">About</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/service*') ? 'active' : '' }}">
                    <a href="/admin/service" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Services</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/galery*') ? 'active' : '' }}">
                    <a href="/admin/galery" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Gallery</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/testimoni*') ? 'active' : '' }}">
                    <a href="/admin/testimoni" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Testimonials</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/sejarah*') ? 'active' : '' }}">
                    <a href="/admin/sejarah" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Sejarah</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/tenagakerja*') ? 'active' : '' }}">
                    <a href="/admin/tenagakerja" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Tenaga Kerja</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/partner*') ? 'active' : '' }}">
                    <a href="/admin/partner" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Partners</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/contact*') ? 'active' : '' }}">
                    <a href="/admin/contact" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Contact Us</span>
                    </a>
                </li>

                <li class="pc-item {{ Request::is('admin/media*') ? 'active' : '' }}">
                    <a href="/admin/media" class="pc-link">
                        <span><i></i></span><span class="pc-mtext">Media Social</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

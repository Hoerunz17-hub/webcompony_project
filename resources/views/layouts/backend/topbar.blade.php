<header class="pc-header">
    <div class="m-header">
        <a href="{{ asset('assetsbackend/dashboard/index.html') }}" class="b-brand text-primary">
            <!-- ========   Change your logo from here   ============ -->
            <img src="{{ asset('assetsbackend/images/logo-white.svg') }}" alt="logo image" class="logo-lg" />
        </a>
    </div>
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ph ph-list"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ph ph-list"></i>
                    </a>
                </li>

            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                        <img src="{{ asset('assetsbackend/images/user/avatar-2.jpg') }}" alt="user-image"
                            class="user-avtar" />
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item">
                                        <form action="{{ route('logout') }}" method="POST" class="m-0 p-0">
                                            @csrf
                                            <button type="submit"
                                                class="dropdown-item d-flex align-items-center text-danger">
                                                <i class="ph ph-power me-2"></i>
                                                <span>Logout</span>
                                            </button>
                                        </form>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>

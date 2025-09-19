<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Login | Gradient Able Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able is trending dashboard template made using Bootstrap 5 design framework. Gradient Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
    <meta name="author" content="codedthemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assetsbackend/images/favicon.svg') }}" type="image/x-icon" />
    <!-- [Google Font : Poppins] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assetsbackend/fonts/tabler-icons.min.css') }}" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assetsbackend/fonts/feather.css') }}" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assetsbackend/fonts/fontawesome.css') }}" />
    <!-- [Material Icons] https: -->
    <link rel="stylesheet" href="{{ asset('assetsbackend/fonts/material.css') }}" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assetsbackend/css/style.css') }}" id="main-style-link" />
    <link rel="stylesheet" href="{{ asset('assetsbackend/css/style-preset.css') }}" />

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-header="header-1" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true"
    data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main v1 bg-grd-primary">
        <div class="auth-wrapper">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assetsbackend/images/logo-dark.svg') }}" alt="images"
                                class="img-fluid mb-4" />
                            <h4 class="f-w-500 mb-1">Login with your email</h4>
                            <p class="mb-4">Don't have an Account? <a href="{{ asset('/pages/register-v1.html') }}"
                                    class="link-primary ms-1">Create Account</a></p>
                        </div>
                        <form action="{{ route('login.process') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger mb-3">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <input type="email" class="form-control" name="email"
                                    @error('email') is-invalid @enderror id="email" placeholder="Email Address"
                                    required / autofocus value="{{ old('email') }}">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required / autofocus>
                            </div>
                            <div class="d-flex mt-1 justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" name="remember"
                                        id="customCheckc1" />
                                    <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
                                </div>
                                <a href="{{ asset('assetsbackend/pages/forgot-password-v1.html') }}">
                                    <h6 class="f-w-400 mb-0">Forgot Password?</h6>
                                </a>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="{{ asset('assetsbackend/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assetsbackend/js/script.js') }}"></script>
    <script src="{{ asset('assetsbackend/js/theme.js') }}"></script>
    <script src="{{ asset('assetsbackend/js/plugins/feather.min.js') }}"></script>


    <script>
        layout_change('light');
    </script>

    <script>
        layout_sidebar_change('light');
    </script>

    <script>
        change_box_container('false');
    </script>

    <script>
        layout_caption_change('true');
    </script>

    <script>
        layout_rtl_change('false');
    </script>

    <script>
        preset_change('preset-1');
    </script>

    <script>
        header_change('header-1');
    </script>


</body>
<!-- [Body] end -->

</html>

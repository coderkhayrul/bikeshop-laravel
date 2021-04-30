<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ setting('site.title') }}</title>
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <!--     Include UIKit CSS   -->
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css') }}">
    <!--     Theme CSS   -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>

<body>

    <!--     start Header Section   -->
    <nav id="tm-topbar" class=" uk-navbar uk-contrast ">
        <div class="uk-container uk-container-center ">
            <ul class="uk-navbar-nav uk-hidden-small">

                <li>
                    <a href="{{ setting('social-media.Facebook') }}"><i class="uk-icon-facebook-square uk-icon-small"></i></a>
                </li>
                <li>
                    <a href="{{ setting('social-media.Twitter') }}"><i class="uk-icon-twitter-square uk-icon-small"></i></a>
                </li>
                <li>
                    <a href="{{ setting('social-media.Instagram') }}"><i class="uk-icon-instagram uk-icon-small"></i></a>
                </li>
                <li>
                    <a href="{{ setting('social-media.Pinterest') }}"><i class="uk-icon-pinterest uk-icon-small"></i></a>
                </li>

            </ul>
            <div class="uk-navbar-flip uk-hidden-small">
                {{ menu('Home') }}
            </div>
        </div>

    </nav>
    <nav id="tm-header" class="uk-navbar  ">
        <div class="uk-container uk-container-center ">
            <a class="uk-navbar-brand uk-hidden-small" href="{{ url('/') }}"><img src="{{ Voyager::image(setting('site.logo')) }}" width="200"
                    height="120"></a>

            <form class="uk-search uk-margin-small-top uk-margin-left uk-hidden-small">
                <input class="uk-search-field" type="search" placeholder="Search..." autocomplete="off">
                <div class="uk-dropdown uk-dropdown-flip uk-dropdown-search" aria-expanded="false"></div>
            </form>
            <div class="uk-navbar-flip uk-hidden-small">
                <div class="uk-button-group">
                    <a class="uk-button uk-button-link uk-button-large" href="{{ route('register') }}">Sign up</a>
                    <a class="uk-button uk-button-success uk-button-large uk-margin-left" href="{{ route('login') }}"><i
                            class="uk-icon-lock uk-margin-small-right"></i> Log in</a>
                </div>

            </div>

            <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small uk-icon-medium" data-uk-offcanvas></a>
            <div class="uk-navbar-flip uk-visible-small">
                <a href="#offcanvas" class="uk-navbar-toggle uk-navbar-toggle-alt uk-icon-medium" data-uk-offcanvas></a>
            </div>
            <div class="uk-navbar-brand uk-navbar-center uk-visible-small">
                <i class="uk-icon-small uk-text-primary uk-margin-small-right uk-icon-play-circle"></i>
                {{ setting('site.title') }}
            </div>
        </div>
    </nav>
    <!--     ./ Header Section   -->


    <!--  Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!--     start Footer Section   -->

    <footer id="tm-footer" class="uk-block uk-block-secondary uk-block-small ">
        <div class="uk-container-center uk-container">
            <div class="uk-grid">
                <div class="uk-width-medium-3-10">
                    <div class="copyright-text">&copy; 2018
                        <span class="uk-text-bold">{{ setting('site.title') }}</span></div>
                </div>
                <div class="uk-width-medium-5-10">
                    <ul class="uk-subnav">
                        {{ menu('Footer') }}
                    </ul>
                </div>
                <div class="uk-width-medium-2-10">
                    <div class=" uk-float-right">
                        <ul class="uk-subnav">
                            <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-facebook-square"></a></li>
                            <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-twitter"></a></li>
                            <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-instagram"></a></li>
                            <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-pinterest"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--     start Offcanvas Menu   -->

    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <div class="uk-panel">
                <form class="uk-search">
                    <input class="uk-search-field" type="search" placeholder="Search...">
                </form>
                <div class="uk-button-group">
                    <a class="uk-button uk-button-link uk-button-large uk-text-muted" href="signup.html">Sign up</a>
                    <a class="uk-button uk-button-success uk-button-large uk-margin-left" href="login.html"><i
                            class="uk-icon-lock uk-margin-small-right"></i> Log in</a>
                </div>
            </div>
            <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
                <li class="uk-active">
                    <a href="#">Featured</a>
                </li>
                <li>
                    <a href="#">Movies</a>
                </li>
                <li>
                    <a href="index.html">TV Shows</a>
                </li>

                <li>
                    <a href="index.html.html">Music</a>
                </li>
                <li class="uk-parent">
                    <a href="#">Genre</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Animation</a> </li>
                        <li><a href="#">Anime</a> </li>
                        <li><a href="#">Adventure</a> </li>
                        <li><a href="#">Biography</a> </li>
                        <li><a href="#">Comedy</a> </li>
                        <li><a href="#">Crime</a> </li>
                        <li><a href="#">Romance</a> </li>
                        <li><a href="#">Documentary</a> </li>
                    </ul>
                </li>
                <li class="uk-nav-divider"></li>
                <li class="uk-nav-header">Pages</li>
                <li><a href=""> Home</a></li>
                <li><a href=""> FAQ's</a></li>
                <li><a href=""> Terms & Conditions</a></li>
                <li><a href=""> Privacy Policy</a></li>
                <li><a href=""> Contact Us</a></li>
            </ul>
            <div class="uk-panel uk-text-center">
                <ul class="uk-subnav">
                    <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-facebook-square"></a></li>
                    <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-twitter"></a></li>
                    <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-instagram"></a></li>
                    <li><a href="#" class="uk-icon-hover uk-icon-medium uk-icon-pinterest"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--     ./ Offcanvas Menu   -->

    <!--     Include JS   -->

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/uikit.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/grid.min.js') }}"></script>

</body>

</html>

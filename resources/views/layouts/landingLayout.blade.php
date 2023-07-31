<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('landing/assets/content/images/favicon.ico') }}">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Muli:100,300,400,400italic,500,600,700,700italic'>
    {{-- BOOTSTRAP --}}
    <!-- CSS -->
    <link rel='stylesheet' href="{{ asset('landing/assets/css/global.css') }}">
    <link rel='stylesheet' href="{{ asset('landing/assets/content/css/structure.css') }}">
    <link rel='stylesheet' href="{{ asset('landing/assets/content/css/kcl.css') }}">
    <link rel='stylesheet' href="{{ asset('landing/assets/content/css/custom.css') }}">
    <link rel='stylesheet' href="{{ asset('landing/assets/mycss/mycss.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body
    class="color-custom style-default button-default layout-full-width no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu tr-content be-reg-20971">
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="{{ route('landing') }}" title="kcl_logo" data-height="60"
                                        data-padding="20">
                                        <img class="logo-main scale-with-grid"
                                            src="{{ asset('landing/assets/content/images/kcl_logo.png') }}"
                                            data-retina="{{ asset('landing/assets/content/images/kcl_logo.png') }}"
                                            data-height="50" alt="kcl_logo">
                                        <img class="logo-sticky scale-with-grid"
                                            src="{{ asset('landing/assets/content/images/kcl_logo.png') }}"
                                            data-retina="{{ asset('landing/assets/content/images/kcl_logo.png') }}"
                                            data-height="50" alt="kcl_logo">
                                        <img class="logo-mobile scale-with-grid"
                                            src="{{ asset('landing/assets/content/images/kcl_logo.png') }}"
                                            data-retina="{{ asset('landing/assets/content/images/kcl_logo.png') }}"
                                            data-height="50" alt="kcl_logo">
                                        <img class="logo-mobile-sticky scale-with-grid"
                                            src="{{ asset('landing/assets/content/images/kcl_logo.png') }}"
                                            data-retina="{{ asset('landing/assets/content/images/kcl_logo.png') }}"
                                            data-height="50" alt="kcl_logo">
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu menu-main">
                                            <li class="current-menu-item">
                                                <a href="{{ route('landing') }}"><span>{{ __('message.layout.accueil') }}</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about') }}"><span>{{ __('message.layout.propos_nous') }}</span></a>
                                            </li>

                                            <li class="menu-custom-children">
                                                <a href="#"><span>{{ __('message.layout.nos_services') }}</span></a>
                                                <ul class="sub-menu" >
                                                    <li><a href="{{ route("srv_centre_d'appel") }}">{{ __('message.layout.centre_appel') }}</a>
                                                    </li>
                                                    <li><a href="{{ route('srv_dev_web_mobile') }}">{{ __('message.layout.website') }}
                                                            </a></li>
                                                    <li><a href="{{ route('srv_camera_surveillance') }}">{{ __('message.layout.camera') }}
                                                            </a></li>
                                                    <li><a href="{{ route('srv_traitement') }}">{{ __('message.layout.database') }}</a></li>
                                                    <li><a href="{{ route('srv_photo_video') }}">{{ __('message.layout.photo_video') }}</a></li>
                                                    <li><a href="{{ route('srv_community_manager') }}">{{ __('message.layout.manager') }}</a></li>
                                                    <!-- Add more services here as needed -->
                                                </ul>
                                            </li>


                                            <li>
                                                <a href="{{ route('contact') }}"><span>{{ __('message.layout.contactez_nous') }}</span></a>
                                            </li>
                                            <li class="menu-custom-children">
                                                <a href="#"><i class="fa fa-globe"></i></a>
                                                <ul class="sub-menu" id="language-dropdown" style="top:64%;left:-10px">
                                                    <li style="width:10%">
                                                        <a href="{{ url('change-language/fr') }}" style="border: none"
                                                            class="{{ session()->get('lang_code') == 'fr' ? 'active' : '' }}"><img src="{{asset('flags/france.png')}}" alt="fr" width="20px"></a>
                                                    </li>
                                                    <li style="width:10%">
                                                        <a href="{{ url('change-language/en') }}" style="border: none"
                                                            class="{{ session()->get('lang_code') == 'en' ? 'active' : '' }}"><img src="{{asset('flags/united-states.png')}}" alt="fr" width="20px"></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                    <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        @yield('content')
        <footer id="Footer" class="clearfix">
            <div class="widgets_wrapper" style="padding:20px 0 20px;">
                <div class="container">
                    <div class="column one-second">
                        <aside class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                    <div class="image_wrapper">
                                        <img class="scale-with-grid"
                                            src="{{ asset('landing/assets/content/images/kcl_logo.png') }}"
                                            width="100" alt="kcl_logo">
                                    </div>
                                </div>
                                <hr class="no_line" style="margin: 0 auto 80px">
                                <p style="font-size: 30px; line-height: 30px">
                                    <a style="color: #4767aa;" href="https://www.Facebook.com/kadacallingleads"><i
                                            class="icon-facebook-circled"></i></a>
                                    <a style="color: #1da1f2;" href="https://twitter.com/OuiAlo"><i
                                            class="icon-twitter-circled"></i></a>
                                    <a style="color: #1da1f2;"
                                        href="https://www.linkedin.com/in/bouamara-adele-5a53519b/"><i
                                            class="icon-linkedin-circled"></i></a>
                                </p>
                            </div>
                        </aside>
                    </div>
                    <div class="column one-fourth">
                        <aside class="widget_text widget widget_custom_html">
                            <h4>{{ __('message.layout.contactez_nous') }}</h4>
                            <div class="textwidget custom-html-widget">
                                <p>
                                    {!! __('message.layout.emploi') !!}
                                </p>
                                <h4>Fix : +212535463293<br>Gsm : +212661261803</h4>
                                <p>
                                    <a href="#">alo.oui.call@gmail.com</a>
                                </p>
                            </div>
                        </aside>
                    </div>
                    <div class="column one-fourth">
                        <aside class="widget_text widget widget_custom_html">
                            <h4>{{ __('message.layout.local') }}</h4>
                            <div class="textwidget custom-html-widget">
                                <p>
                                    Lot.Rizana
                                    <br> Imm 9 Bureau N20
                                    <br> Av. Mohamed 6, 50050
                                    <br> Meknès-Maroc
                                </p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" class="button button_js" href="#"><i
                                class="icon-up-open-big"></i></a>
                        <div class="copyright">
                            &copy; 2023 Kada Calling Leads by <a target="_blank" rel="nofollow"
                                href="https://www.linkedin.com/in/ayoub-el-boukhari-35264a282/">El Boukhari Ayoub</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- side menu -->
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>

    <!-- JS -->
    <script src="{{ asset('landing/assets/js/jquery-2.1.4.min.js') }}"></script>

    <script src="{{ asset('landing/assets/js/mfn.menu.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.plugins.js') }}"></script>
    <script src="{{ asset('landing/assets/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/animations/animations.js') }}"></script>
    <script src="{{ asset('landing/assets/js/translate3d.js') }}"></script>
    <script src="{{ asset('landing/assets/js/scripts.js') }}"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function changeLanguage(lang) {
            window.location = '{{ url('change-language') }}/' + lang
        }
    </script>
    <script src="{{ asset('landing/assets/myjs/myjs.js') }}"></script>
</body>

</html>

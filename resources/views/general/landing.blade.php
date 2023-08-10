@extends('layouts.landingLayout')
@section('title', __('message.accueil.title'))

@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section h1_page" >
                        <div class="section_wrapper mcb-section-inner ">
                            <div class="wrap mcb-wrap one valign-top clearfix control_height">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column two-third column_column">
                                        <div class="column_attr clearfix">
                                            <h1>
                                                <div class="calling_word"><span class="word_orange">KADA</span>
                                                    CALLING
                                                    <span class="word_orange">LEADS</span>
                                                </div> <br>
                                                <div class="phrase_eng_fr">
                                                    <span
                                                        class="titre_landing_page">{{ __('message.accueil.para_1') }}</span>

                                                </div>
                                            </h1>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr>

                            <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-250px"
                                data-mobile="no-up">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-second column_placeholder">
                                        <div class="placeholder">
                                            &nbsp;
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <h3 class="themecolor nos_service_landing">
                                                {{ __('message.accueil.nos_service') }}</h3>
                                            <div class="container_grid_landing">
                                                <div class="grid_item_landing grid_item_left">
                                                    <div
                                                        class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/headphone.png') }}');
                                                            background-repeat:no-repeat;
                                                            background-position:left top;
                                                            padding:0 0 10px 80px;
                                                            ">
                                                            <h4>{{ __('message.accueil.centre_appel_1') }}
                                                                <br> {{ __('message.accueil.centre_appel_2') }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                {{ __('message.accueil.para_2') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing"
                                                            href="{{ route("srv_centre_d_appel") }}"
                                                            style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">{{ __('message.accueil.savoir_plus') }}</span></a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing">
                                                    <div
                                                        class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/dev.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>{{ __('message.accueil.dev_1') }}
                                                                <br> {{ __('message.accueil.dev_2') }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                {{ __('message.accueil.para_3') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing"
                                                            href="{{ route('srv_dev_web_mobile') }}"
                                                            style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">{{ __('message.accueil.savoir_plus') }}</span></a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing grid_item_left">
                                                    <div
                                                        class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/camera.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>{{ __('message.accueil.camera_1') }}
                                                                <br> {{ __('message.accueil.camera_2') }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                {{ __('message.accueil.para_4') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing"
                                                            href="{{ route('srv_camera_surveillance') }}"
                                                            style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">{{ __('message.accueil.savoir_plus') }}</span></a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing">
                                                    <div
                                                        class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/database.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>{{ __('message.accueil.data_1') }}
                                                                <br> {{ __('message.accueil.data_2') }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                {{ __('message.accueil.para_5') }}


                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing" href="{{ route('srv_traitement') }}"
                                                            style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">{{ __('message.accueil.savoir_plus') }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing grid_item_left">
                                                    <div
                                                        class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/video.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>{{ __('message.accueil.photo_video_1') }}
                                                                <br>{{ __('message.accueil.photo_video_2') }}

                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                {{ __('message.accueil.para_6') }}


                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing"
                                                            href="{{ route('srv_photo_video') }}"
                                                            style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">{{ __('message.accueil.savoir_plus') }}</span></a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing">
                                                    <div
                                                        class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/manager.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>Community
                                                                <br> Manager
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                {{ __('message.accueil.para_7') }}


                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing"
                                                            href="{{ route('srv_community_manager') }}"
                                                            style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">{{ __('message.accueil.savoir_plus') }}</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <hr>
                        </div>
                    </div>


                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:12px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix align_center">
                                            <h4 class="themecolor">{{ __('message.accueil.nos_clients') }}</h4>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_testimonials ">
                                        <div class="testimonials_slider single-photo">
                                            <ul class="testimonials_slider_ul">
                                                <li>
                                                    <div class="single-photo-img" style="height:0px;">
                                                    </div>
                                                    <div class="bq_wrapper">
                                                        <blockquote>
                                                            {{ __('message.accueil.para_8') }}
                                                        </blockquote>
                                                    </div>
                                                    <div class="hr_dots">
                                                        <span></span><span></span><span></span>
                                                    </div>
                                                    <div class="author">
                                                        <h5>R.W. </h5><span class="company"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-photo-img" style="height:0px;">

                                                    </div>
                                                    <div class="bq_wrapper">
                                                        <blockquote>
                                                            {{ __('message.accueil.para_9') }}

                                                        </blockquote>
                                                    </div>
                                                    <div class="hr_dots">
                                                        <span></span><span></span><span></span>
                                                    </div>
                                                    <div class="author">
                                                        <h5>N.P.</h5><span class="company"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-photo-img" style="height:0px;">

                                                    </div>
                                                    <div class="bq_wrapper">
                                                        <blockquote>
                                                            {{ __('message.accueil.para_10') }}
                                                        </blockquote>
                                                    </div>
                                                    <div class="hr_dots">
                                                        <span></span><span></span><span></span>
                                                    </div>
                                                    <div class="author">
                                                        <h5>GH.R.</h5><span class="company"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="slider_pager slider_pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:20px">
                        <div class="section_wrapper mcb-section-inner">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.9385735472565!2d-5.5763776!3d33.8654739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76c6f330dec1b%3A0x163f259ce74bc0f5!2sKA%20CALLING%20LEADS!5e0!3m2!1sfr!2sma!4v1690236353988!5m2!1sfr!2sma"
                                width="1080" height="376" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" title="Carte Google Maps de KA CALLING LEADS">
                            </iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

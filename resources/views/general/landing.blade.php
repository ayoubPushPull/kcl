@extends('layouts.landingLayout')
@section('title', 'Accueil')

@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section" style="padding-top:170px; padding-bottom:40px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column two-third column_column">
                                        <div class="column_attr clearfix">
                                            <h2>Nous favorisons une communication positive des destinataires avec votre
                                                marque.(Mme Kada)</h2>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_divider ">
                                        <hr class="no_line" style="margin:0 auto 30px">
                                    </div>
                                    <div class="column mcb-column one-second column_button">
                                        <a class="button button_right button_size_2 button_theme button_js"
                                            href="{{ route('about') }}"><span
                                                class="button_icon"><i class="icon-right-open-mini"></i></span><span
                                                class="button_label">À propos de nous</span></a>
                                    </div>
                                    <div class="column mcb-column one-second column_image ">
                                        <div class="image_frame image_item no_link scale-with-grid alignright no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid"
                                                    src="{{ asset('landing/assets/content/images/home_pic1.png') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-55px"
                                data-mobile="no-up">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid"
                                                    src="{{ asset('landing/assets/content/images/home_pic2.jpg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-250px"
                                data-mobile="no-up">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one-second column_placeholder">
                                        <div class="placeholder">
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="column mcb-column two-fifth column_column">
                                        <div class="column_attr clearfix"
                                            style=" background-image:url('{{ asset('landing/assets/content/images/home_pic3.png') }}'); background-repeat:no-repeat; background-position:left top; padding:120px 40px 40px;">
                                            <h4 style="font-weight: 400; font-style: italic;">A remplir</h4>
                                            <h6>Fondatrice Madame Kada</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:60px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <h4 class="themecolor">Nos services</h4>
                                            <h3>Nous atteignons efficacement vos objectifs(Mme Kada)</h3>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_divider ">
                                        <hr class="no_line" style="margin:0 auto 30px">
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 4% 0 0">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column  column-margin-10px">
                                        <div class="column_attr clearfix"
                                            style=" background-image:url('{{ asset('landing/assets/content/images/headphone.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                            <h4>Centre
                                                <br> D'appel
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <p>
                                                (Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme
                                                Kada)(Mme Kada)(Mme Kada)(Mme Kada)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 4% 0 0">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column  column-margin-10px">
                                        <div class="column_attr clearfix"
                                            style=" background-image:url('{{ asset('landing/assets/content/images/database.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                            <h4>Traitement
                                                <br> des bases de données
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <p>
                                                (Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme
                                                Kada)(Mme Kada)(Mme Kada)(Mme Kada)

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 4% 0 0">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column  column-margin-10px">
                                        <div class="column_attr clearfix"
                                            style=" background-image:url('{{ asset('landing/assets/content/images/dev.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                            <h4>Développement d'applications
                                                <br> Web et Mobiles
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <p>
                                                (Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme
                                                Kada)(Mme Kada)(Mme Kada)(Mme Kada)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 4% 0 0">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column  column-margin-10px">
                                        <div class="column_attr clearfix"
                                            style=" background-image:url('{{ asset('landing/assets/content/images/camera.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                            <h4>Installation des caméras
                                                <br> de surveillance
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <p>
                                                (Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme
                                                Kada)(Mme Kada)(Mme Kada)(Mme Kada)

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 4% 0 0">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column  column-margin-10px">
                                        <div class="column_attr clearfix"
                                            style=" background-image:url('{{ asset('landing/assets/content/images/manager.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                            <h4>Community
                                                <br> Manager
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <p>
                                                (Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme
                                                Kada)(Mme Kada)(Mme Kada)(Mme Kada)

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 4% 0 0">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column  column-margin-10px">
                                        <div class="column_attr clearfix"
                                            style=" background-image:url('{{ asset('landing/assets/content/images/video.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                            <h4>Photo <br>& vidéo

                                            </h4>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <p>
                                                (Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme Kada)(Mme
                                                Kada)(Mme Kada)(Mme Kada)(Mme Kada)

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="button button_right button_size_2 button_theme button_js"
                                href="#"><span class="button_icon"><i
                                        class="icon-right-open-mini"></i></span><span class="button_label">En savoir plus sur nos services
                                </span></a>

                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_divider ">
                                        <hr class="no_line" style="margin:0 auto 30px">
                                    </div>
                                    <div class="column mcb-column one column_button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section equal-height-wrap" style="padding-top:0px; padding-bottom:100px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one-second valign-middle clearfix"
                                style="padding:180px 11% 140px; background-image:url('{{ asset('landing/assets/content/images/home_pic8.jpg') }}'); background-repeat:no-repeat; background-position:center">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix"
                                            style=" background-image:url('{{ asset('landing/assets/content/images/home_pic9.png') }}'); background-repeat:no-repeat; background-position:left top; padding:120px 40px 40px;">
                                            <h4 style="font-weight: 400;"><strong>KADA CALLING LEADS</strong> est un acteur majeur dans les services qu'elle offre depuis 2014.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-middle clearfix" style="padding:20px 0 0 6%">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <h4 class="themecolor">À propos de nous</h4>
                                            <h3>Nous atteignons efficacement vos objectifs(Mme Kada)</h3>
                                            <hr class="no_line" style="margin:0 auto 10px">
                                            <p>
                                                petit description (Mme Kada)
                                            </p>
                                            <p>
                                                petit description (Mme Kada)
                                            </p>
                                            <hr class="no_line" style="margin:0 auto 30px">
                                            <a class="button button_right button_size_2 button_theme button_js"
                                                href="{{ route('about') }}"><span
                                                    class="button_icon"><i class="icon-right-open-mini"></i></span><span
                                                    class="button_label">À propos de nous</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:60px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix align_center">
                                            <h4 class="themecolor">Nos clients</h4>
                                            <h3>Faites confiance à nos clients</h3>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_testimonials ">
                                        <div class="testimonials_slider single-photo">
                                            <ul class="testimonials_slider_ul">
                                                <li>
                                                    <div class="single-photo-img">
                                                        <img src="{{ asset('landing/assets/content/images/home_ourteam_1-85x85.jpg') }}"
                                                            class="scale-with-grid wp-post-image">
                                                    </div>
                                                    <div class="bq_wrapper">
                                                        <blockquote>
                                                            avis client1 (Mme Kada) <br>avis client1 (Mme Kada)
                                                        </blockquote>
                                                    </div>
                                                    <div class="hr_dots">
                                                        <span></span><span></span><span></span>
                                                    </div>
                                                    <div class="author">
                                                        <h5>client1 (Mme Kada)</h5><span class="company"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-photo-img">
                                                        <img src="{{ asset('landing/assets/content/images/home_ourteam_2-85x85.jpg') }}"
                                                            class="scale-with-grid wp-post-image">
                                                    </div>
                                                    <div class="bq_wrapper">
                                                        <blockquote>
                                                            avis client2 (Mme Kada)<br>avis client2 (Mme Kada)
                                                        </blockquote>
                                                    </div>
                                                    <div class="hr_dots">
                                                        <span></span><span></span><span></span>
                                                    </div>
                                                    <div class="author">
                                                        <h5>client2 (Mme Kada)</h5><span class="company"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-photo-img">
                                                        <img src="{{ asset('landing/assets/content/images/home_ourteam_3-85x85.jpg') }}"
                                                            class="scale-with-grid wp-post-image">
                                                    </div>
                                                    <div class="bq_wrapper">
                                                        <blockquote>
                                                            avis client3 (Mme Kada)<br>avis client3 (Mme Kada)
                                                        </blockquote>
                                                    </div>
                                                    <div class="hr_dots">
                                                        <span></span><span></span><span></span>
                                                    </div>
                                                    <div class="author">
                                                        <h5>client3 (Mme Kada)</h5><span class="company"></span>
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
                </div>
            </div>
        </div>
    </div>
@endsection

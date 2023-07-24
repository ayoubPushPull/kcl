@extends('layouts.landingLayout')
@section('title', 'Accueil')

@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section" style="padding-top:170px; padding-bottom:40px">
                        <div class="section_wrapper mcb-section-inner ">
                            <div class="wrap mcb-wrap one valign-top clearfix control_height">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column two-third column_column">
                                        <div class="column_attr clearfix">
                                            <h2>
                                                <div class="calling_word"><span class="word_orange">KADA</span>
                                                    CALLING
                                                    <span class="word_orange">LEADS</span>
                                                </div> <br>
                                                <div class="phrase_eng_fr">
                                                    <span class="titre_landing_page">Soyez Productif, Nous Gérons le Reste !
                                                        Externalisation des Tâches pour une Efficacité Maximale.</span>
                                                    <span class="titre_landing_page "> Be Productive, We
                                                        Handle the Rest! Outsourcing Tasks for Maximum Efficiency
                                                    </span>
                                                </div>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_divider ">
                                        <hr class="no_line" style="margin:0 auto 30px">
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
                                            <h4 class="themecolor nos_service_landing">Nos services</h4>
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
                                            style=" background-image:url('{{ asset('landing/assets/content/images/headphone.png') }}');
                                            background-repeat:no-repeat;
                                            background-position:left top;
                                            padding:0 0 10px 80px;
                                            ">
                                            <h4>Centre
                                                <br> D'appel
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <p>
                                                Notre centre d'appel est doté d'une équipe de professionnels hautement
                                                qualifiés et dévoués, formés pour répondre aux besoins spécifiques de nos
                                                clients.
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="" href="#"><span class="button_icon"><i
                                                    class="icon-right-open-mini"></i></span><span
                                                class="button_label">Savoir plus</span></a>
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
                                                Que vous ayez une petite entreprise ou une grande organisation, nous
                                                comprenons l'importance de disposer de données précises, fiables et bien
                                                organisées.

                                            </p>
                                        </div>
                                    </div>

                                    <div>
                                        <a class="" href="#"><span class="button_icon"><i
                                                    class="icon-right-open-mini"></i></span><span
                                                class="button_label">Savoir plus</span></a>
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
                                                Notre équipe talentueuse de concepteurs et de développeurs web et mobiles
                                                est prête à transformer votre vision en réalité.
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="" href="#"><span class="button_icon"><i
                                                    class="icon-right-open-mini"></i></span><span
                                                class="button_label">Savoir plus</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-top clearfix" style="padding:0 4% 0 0">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column  column-margin-10px">
                                        <div class="column_attr clearfix"
                                            style=" background-image:url('{{ asset('landing/assets/content/images/camera.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                            <h4>Caméras
                                                <br> de surveillance
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <p>
                                                Lorsque vous choisissez notre service d'installation de caméras de
                                                surveillance, vous pouvez vous attendre à une expertise professionnelle de
                                                bout en bout.

                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="" href="#"><span class="button_icon"><i
                                                    class="icon-right-open-mini"></i></span><span
                                                class="button_label">Savoir plus</span></a>
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
                                                Lorsque vous travaillez avec nous, nous commençons par comprendre vos
                                                objectifs commerciaux, votre identité de marque et votre public cible. En
                                                nous basant sur ces informations, nous élaborons une stratégie de gestion de
                                                communauté sur mesure qui répond à vos besoins spécifiques.
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="" href="#"><span class="button_icon"><i
                                                    class="icon-right-open-mini"></i></span><span
                                                class="button_label">Savoir plus</span></a>
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
                                                Bienvenue à notre service de photos d'entreprise et de réalisation de vidéos
                                                institutionnelles et publicitaires ! Nous sommes là pour capturer des
                                                moments précieux et raconter des histoires visuelles convaincantes pour
                                                promouvoir votre entreprise ou votre marque.

                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="" href="#"><span class="button_icon"><i
                                                    class="icon-right-open-mini"></i></span><span
                                                class="button_label">Savoir plus</span></a>
                                    </div>
                                </div>
                            </div>


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


                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:60px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix align_center">
                                            <h4 class="themecolor">Nos clients</h4>
                                            <h3>Faites confiance à nos clients (Mme kada)</h3>
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

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
                                            <h4 class="themecolor nos_service_landing">Nos services</h4>
                                            <div class="container_grid_landing">
                                                <div class="grid_item_landing grid_item_left">
                                                    <div class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
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
                                                    <div class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                Notre centre d'appel est doté d'une équipe de professionnels
                                                                hautement
                                                                qualifiés et dévoués, formés pour répondre aux besoins
                                                                spécifiques de nos
                                                                clients.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing" href="{{ route("srv_centre_d'appel") }}" style="text-decoration: none"><span
                                                                class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">Savoir plus</span></a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing">
                                                    <div class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/dev.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>Développement d'applications
                                                                <br> Web et Mobiles
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                Notre équipe talentueuse de concepteurs et de développeurs
                                                                web et mobiles
                                                                est prête à transformer votre vision en réalité.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing" href="{{route('srv_dev_web_mobile')}}" style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">Savoir plus</span></a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing grid_item_left">
                                                    <div class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/camera.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>Caméras
                                                                <br> de surveillance
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                Lorsque vous choisissez notre service d'installation de
                                                                caméras de
                                                                surveillance, vous pouvez vous attendre à une expertise
                                                                professionnelle de
                                                                bout en bout.

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing" href="{{route('srv_camera_surveillance')}}" style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">Savoir plus</span></a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing">
                                                    <div class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/database.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>Traitement
                                                                <br> des bases de données
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                Que vous ayez une petite entreprise ou une grande
                                                                organisation, nous
                                                                comprenons l'importance de disposer de données précises,
                                                                fiables et bien
                                                                organisées.

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing" href="{{route('srv_traitement')}}" style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">Savoir plus</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing grid_item_left">
                                                    <div class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/video.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>Photo <br>& vidéo

                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                Bienvenue à notre service de photos d'entreprise et de
                                                                réalisation de vidéos
                                                                institutionnelles et publicitaires ! Nous sommes là pour
                                                                capturer des
                                                                moments précieux et raconter des histoires visuelles
                                                                convaincantes pour
                                                                promouvoir votre entreprise ou votre marque.

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing" href="{{route('srv_photo_video')}}" style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">Savoir plus</span></a>
                                                    </div>
                                                </div>
                                                <div class="grid_item_landing">
                                                    <div class="column mcb-column one column_column  column-margin-10px inside-grid-cells-first">
                                                        <div class="column_attr clearfix"
                                                            style=" background-image:url('{{ asset('landing/assets/content/images/manager.png') }}'); background-repeat:no-repeat; background-position:left top; padding:0 0 10px 80px;">
                                                            <h4>Community
                                                                <br> Manager
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one column_column inside-grid-cells-second">
                                                        <div class="column_attr clearfix">
                                                            <p>
                                                                Lorsque vous travaillez avec nous, nous commençons par
                                                                comprendre vos
                                                                objectifs commerciaux, votre identité de marque et votre
                                                                public cible. En
                                                                nous basant sur ces informations, nous élaborons une
                                                                stratégie de gestion de
                                                                communauté sur mesure qui répond à vos besoins spécifiques.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="savoir_plus inside-grid-cells-third">
                                                        <a class="custom-link-landing" href="{{route("srv_community_manager")}}" style="text-decoration: none"><span class="button_icon"><i
                                                                    class="icon-right-open-mini"></i></span><span
                                                                class="button_label">Savoir plus</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                            <h3>Ce que nos clients ont dit à propos de nous</h3>
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
                                                            Nous remercier KCL pour le traitement efficace de nos bases de
                                                            données ainsi que la création de notre application clients.
                                                            Cela nous a permis d'améliorer considérablement la qualité de
                                                            nos services et de répondre aux besoins de nos clients de
                                                            manière plus rapide et plus efficace. Votre professionnalisme,
                                                            votre expertise ainsi que votre excellent service client ont été
                                                            très appréciés tout au long de notre collaboration. Encore une
                                                            fois, merci pour votre excellent travail.

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
                                                            En tant que client fidèle de KCL depuis plus de 10 ans, je ne
                                                            peux que recommander leurs services. Leur centre d'appel est
                                                            composé d'une équipe de professionnels hautement qualifiés et
                                                            dévoués, qui prennent le temps de comprendre les besoins
                                                            spécifiques de chaque client. Leur expertise en matière de
                                                            communication et de service client est inégalée, et leur
                                                            approche personnalisée a permis à notre entreprise de maintenir
                                                            une relation de confiance avec nos clients.
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
                                                            Nous tenons à exprimer nos sincères remerciements à l'équipe de
                                                            KCL pour leur incroyable professionnalisme et service
                                                            exceptionnel. Ils ont installé des caméras chez moi et dans mon
                                                            magasin avec une rapidité et une expertise impressionnante. Leur
                                                            installation intelligente garantit la sécurité de nos biens et
                                                            leur présence rassure notre clientèle.
                                                            De plus, chaque fois que nous avons eu recours à leur
                                                            assistance, ils ont trouvé une solution à nos problèmes, ce qui
                                                            témoigne de leur expérience et de leur savoir-faire.
                                                            En bref, nous sommes ravis de notre collaboration avec KCL et
                                                            nous les recommandons vivement à tous ceux qui cherchent des
                                                            solutions de sécurité fiables et professionnelles.

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
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:60px">
                        <div class="section_wrapper mcb-section-inner">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.9385735472565!2d-5.5763776!3d33.8654739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76c6f330dec1b%3A0x163f259ce74bc0f5!2sKA%20CALLING%20LEADS!5e0!3m2!1sfr!2sma!4v1690236353988!5m2!1sfr!2sma"
                                width="1080" height="376" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

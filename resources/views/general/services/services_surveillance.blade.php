@extends('layouts.landingLayout')
@section('title', __('message.service_camera.title'))
@section('content')


    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section" style="padding-top:170px; padding-bottom:40px">
                        <div class="section_wrapper mcb-section-inner ">
                            <div class="wrap mcb-wrap one valign-top clearfix control_height_centre">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column two-third column_column">
                                        <div class="column_attr clearfix">
                                            <h2>
                                                <div class="calling_word" {{-- style="font-size: 36px;" --}}>CAMÉRA DE <span
                                                        class="word_orange">SURVEILLANCE</span>
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
                                            <div class="container_grid_camera">
                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl camera surveillance/kcl_camera security_1.jpg') }}"
                                                        alt="kcl_camera security_1.jpg">
                                                    <p class="paragraphe-inside-cell">حضي راسك يافلان </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">contactez</a>
                                                </div>

                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl camera surveillance/kcl_camera security.png') }}"
                                                        alt="kcl_call_center_4.png">
                                                    <p class="paragraphe-inside-cell">Dormez sur vos deux oreilles en
                                                        laissant nos experts installer des caméras de surveillance
                                                        professionnelles pour assurer la sécurité de votre domicile ou de
                                                        votre entreprise. </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">contactez</a>

                                                </div>


                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl camera surveillance/kcl_camera security_2.jpg') }}"
                                                        alt="kcl_call_center_3.png">
                                                    <p class="paragraphe-inside-cell" style="">
                                                        <span class="limited-text-camera">

                                                            Une tranquillité d'esprit totale grâce à nos systèmes de caméras
                                                            de surveillance....
                                                        </span>
                                                        <span class="full-text-camera" style="display: none;">
Une tranquillité d'esprit totale grâce à nos systèmes de caméras de
                                                        surveillance installés avec expertise. Protégez votre espace en
                                                        toute confiance
                                                        </span>
                                                        <a class="read-more-camera" href="#">plus</a>

                                                    </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">contactez</a>



                                                </div>

                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl camera surveillance/kcl_camera_security_3.png') }}"
                                                        alt="kcl_call_center_1.png">
                                                    <p class="paragraphe-inside-cell">
                                                        <span class="limited-text-camera-1">
                                                            (Mme kada)(Mme kada)(Mme kada)
                                                            (Mme kada)(Mme kada)(Mme kada)
                                                            ....</span>
                                                        <span class="full-text-camera-1" style="display: none;">
                                                            (Mme kada)(Mme kada)(Mme kada)
                                                            (Mme kada)(Mme kada)(Mme kada)
                                                            (Mme kada)(Mme kada)(Mme kada)
                                                            (Mme kada)(Mme kada)(Mme kada)
                                                            (Mme kada)(Mme kada)(Mme kada)
                                                            (Mme kada)(Mme kada)(Mme kada)
                                                        </span>
                                                        <a class=".read-more-camera-1" href="#">plus</a>
                                                    </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">contactez</a>

                                                </div>

                                            </div>
                                            <blockquote class="blockquote_camera" @readonly(true)>
                                                <span class="limited-text">
                                                    Bienvenue à notre service d'installation de caméras de surveillance !
                                                    Nous sommes là pour vous offrir des solutions de sécurité avancées en
                                                    installant des systèmes de caméras de surveillance fiables et efficaces.
                                                    <br>
                                                    La sécurité est une préoccupation majeure dans notre monde en constante
                                                    évolution, que ce soit pour votre domicile, votre entreprise ou tout
                                                    autre espace important pour vous. Notre équipe expérimentée comprend
                                                    l'importance de protéger ce qui compte le plus pour vous.......</span>
                                                <span class="full-text" style="display: none;">
                                                    Bienvenue à notre service d'installation de caméras de surveillance !
                                                    Nous sommes là pour vous offrir des solutions de sécurité avancées en
                                                    installant des systèmes de caméras de surveillance fiables et
                                                    efficaces.<br>
                                                    La sécurité est une préoccupation majeure dans notre monde en constante
                                                    évolution, que ce soit pour votre domicile, votre entreprise ou tout
                                                    autre espace important pour vous. Notre équipe expérimentée comprend
                                                    l'importance de protéger ce qui compte le plus pour vous. <br>
                                                    Lorsque vous choisissez notre service d'installation de caméras de
                                                    surveillance, vous pouvez vous attendre à une expertise professionnelle
                                                    de bout en bout. <br>
                                                    Nous commençons par évaluer vos besoins spécifiques en matière de
                                                    sécurité et concevons un système de caméras sur mesure qui répond à vos
                                                    exigences. <br>
                                                    Nous travaillons avec les dernières technologies de caméras de
                                                    surveillance, y compris les caméras haute définition, les systèmes de
                                                    vidéosurveillance en réseau et les caméras à vision nocturne. Nous
                                                    veillons à ce que chaque caméra soit positionnée stratégiquement pour
                                                    maximiser la couverture de surveillance et identifier les points
                                                    critiques. <br>
                                                    Notre équipe d'installation est composée de professionnels compétents
                                                    qui ont une connaissance approfondie des normes de sécurité et des
                                                    meilleures pratiques. Nous nous assurons que l'installation est
                                                    effectuée de manière propre, précise et discrète, en minimisant les
                                                    perturbations potentielles pour votre environnement. <br>
                                                    En plus de l'installation, nous fournissons également des services de
                                                    configuration et d'intégration pour vous assurer que votre système de
                                                    caméras de surveillance fonctionne de manière optimale. Nous vous
                                                    guidons dans l'utilisation du logiciel de gestion, vous permettant ainsi
                                                    de consulter vos caméras à distance et de recevoir des alertes en temps
                                                    réel en cas d'activité suspecte. <br>
                                                    Votre sécurité et votre tranquillité d'esprit sont notre priorité
                                                    absolue. Nous vous garantissons un service fiable, des produits de
                                                    qualité supérieure et un support continu pour répondre à toutes vos
                                                    questions ou préoccupations. <br>
                                                    Contactez-nous dès aujourd'hui pour discuter de vos besoins en matière
                                                    d'installation de caméras de surveillance et découvrez comment nous
                                                    pouvons vous aider à renforcer la sécurité de votre espace.
                                                </span>
                                                <a class="read-more" href="#">plus</a>
                                            </blockquote>

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
                </div>
            </div>
        </div>
    </div>
@endsection

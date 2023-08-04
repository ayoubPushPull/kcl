@extends('layouts.landingLayout')
@section('title', __('message.recrute.titre'))

@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section" style="padding-top:170px; padding-bottom:50px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">

                            </div>
                        </div>
                    </div>

                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:50px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <h3><span class="word_orange_website">KCL </span>{{ __('message.recrute.h1') }}</h3>

                                            <hr class="no_line" style="margin:0 auto 30px">
                                            <div id="contactWrapper">
                                                <form id="contactform" action="https://formspree.io/f/xnqkjrra"
                                                    method="POST" >
                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second">
                                                        <label for="">{{ __('message.recrute.nom') }}</label>
                                                        <input placeholder="{{ __('message.recrute.nom_placeholder') }}" type="text" name="nom"
                                                            size="40" aria-required="true" aria-invalid="false" />
                                                    </div>
                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second">
                                                        <label for="">{{ __('message.recrute.prenom') }}</label>
                                                        <input placeholder="{{ __('message.recrute.prenom_placeholder') }}" type="text"
                                                            name="prenom" size="40" aria-required="true"
                                                            aria-invalid="false" />
                                                    </div>

                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second">
                                                        <label for="">{{ __('message.recrute.num_tele') }}</label>
                                                        <input placeholder="{{ __('message.recrute.num_tele_placeholder') }}" type="text"
                                                            name="Numéro Téléphone" size="40" aria-required="true"
                                                            aria-invalid="false" />
                                                    </div>
                                                    <div class="column one-second">
                                                        <label for="">{{ __('message.recrute.email') }}</label>
                                                        <input placeholder="{{ __('message.recrute.email_placeholder') }}" type="email"
                                                            name="E-mail" size="40" aria-required="true"
                                                            aria-invalid="false" />
                                                    </div>
                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second">
                                                        <label for="">{{ __('message.recrute.ville') }}</label>
                                                        <select name="ville" required>
                                                            <option value="" disabled selected hidden>{{ __('message.recrute.ville') }}</option>
                                                            <option value="Agadir">Agadir</option>
                                                            <option value="Casablanca">Casablanca</option>
                                                            <option value="Fes">Fes</option>
                                                            <option value="Marrakech">Marrakech</option>
                                                            <option value="Rabat">Rabat</option>
                                                            <option value="Tangier">Tangier</option>
                                                            <option value="Meknes">Meknes</option>
                                                            <option value="Oujda">Oujda</option>
                                                            <option value="Kenitra">Kenitra</option>
                                                            <option value="Tetouan">Tetouan</option>
                                                            <option value="Temara">Temara</option>
                                                            <option value="Safi">Safi</option>
                                                            <option value="Mohammedia">Mohammedia</option>
                                                            <option value="Khouribga">Khouribga</option>
                                                            <option value="El Jadida">El Jadida</option>
                                                            <option value="Beni Mellal">Beni Mellal</option>
                                                            <option value="Nador">Nador</option>
                                                            <option value="Settat">Settat</option>
                                                            <option value="Agdal">Agdal</option>
                                                            <option value="M'diq">M'diq</option>
                                                            <option value="Youssoufia">Youssoufia</option>
                                                            <option value="Ksar El Kebir">Ksar El Kebir</option>
                                                            <option value="Larache">Larache</option>
                                                            <!-- Add more cities as needed -->
                                                        </select>

                                                    </div>
                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second">
                                                        <label for="">{{ __('message.recrute.date_naiss') }}</label>
                                                        <input  type="date"
                                                            name="Date Naissance" size="40" aria-required="true"
                                                            aria-invalid="false" />
                                                    </div>
                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second">
                                                        <label for="">{{ __('message.recrute.exp_pro') }}</label>
                                                        <input placeholder="{{ __('message.recrute.exp_pro_placeholder') }}" type="text"
                                                            name="prenom" size="40" aria-required="true"
                                                            aria-invalid="false" />
                                                    </div>

                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second">
                                                        <label for="">{{ __('message.recrute.diplome') }}</label>
                                                        <input placeholder="{{ __('message.recrute.diplome_placeholder') }}" type="text"
                                                            name="Votre meilleur diplôme" size="40" aria-required="true"
                                                            aria-invalid="false" />
                                                    </div>
                                                    <div class="column one">
                                                        <label for="">{{ __('message.recrute.motivation') }}</label>
                                                        <textarea placeholder="{{ __('message.recrute.motivation_placeholder') }}" name="Collaboration " id="body" style="width:100%;" rows="10"
                                                            aria-invalid="false"></textarea>
                                                    </div>
                                                    <div class="column one">
                                                        <input type="submit" value="{{ __('message.contact_form.send') }}" id="submit"
                                                            onClick="return check_values();">
                                                    </div>
                                                </form>
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
    </div>
@endsection

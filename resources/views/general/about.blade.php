@extends('layouts.landingLayout')
@section('title', __('message.about.title'))
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
                                            <h2 class="calling_word"><span class="word_orange">KADA</span> CALLING <span
                                                    class="word_orange">LEADS</span></h2>
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
                    <div class="section mcb-section equal-height-wrap" style="padding-top:0px; padding-bottom:100px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="content-wrapper container_text_about_page" style="color: black">
                                <p class="text_about_page">
                                    {!!__('message.about.text')!!}

                                    <strong>Mme KADA AZ.</strong></p>

                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:21px; padding-bottom:40px">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top move-up clearfix" style="margin-top:-55px"
                                data-mobile="no-up">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_image">
                                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{ asset('services/kcl_about.png') }}" alt="kcl_about.png" >
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

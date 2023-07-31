@extends('layouts.landingLayout')
@section('title', __('message.service_centre.title'))
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
                                                <div class="calling_word"><span class="word_orange">{{__('message.service_centre.h1-1')}}</span>
                                                   {{__('message.service_centre.h1-2')}}
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
                                            <div class="container_grid_centre">
                                                <div class="grid_item_centre undertext" tabindex="0">
                                                    <img src="{{ asset("services/kcl centre d'appel/kcl_call_center_6.jpg") }}"
                                                        alt="kcl_call_center_6.jpg">
                                                    <p class="paragraphe-inside-cell">
                                                        {{__('message.service_centre.para_1')}}
                                                        </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>
                                                </div>
                                                <div class="grid_item_centre undertext" tabindex="0">
                                                    <img src="{{ asset("services/kcl centre d'appel/kcl_call_center_5.png") }}"
                                                        alt="kcl_call_center_5.png">
                                                    <p class="paragraphe-inside-cell">
                                                        {{__('message.service_centre.para_2')}}

                                                        </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>

                                                </div>
                                                <div class="grid_item_centre undertext" tabindex="0">
                                                    <img src="{{ asset("services/kcl centre d'appel/kcl_call_center_4.png") }}"
                                                        alt="kcl_call_center_4.png">
                                                    <p class="paragraphe-inside-cell">
                                                        {{__('message.service_centre.para_3')}}

                                                        </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>

                                                </div>
                                            </div>
                                            <blockquote class="blockquote" @readonly(true)>
                                                <span class="limited-text-camera">
                                                    {!!__('message.service_centre.limited_text')!!}
                                                    </span>
                                                <span class="full-text-camera" style="display: none;">
                                                    {!!__('message.service_centre.full_text')!!}

                                                </span>
                                                <a class="read-more-camera" href="#">{{__('message.general.plus')}}</a>
                                            </blockquote>
                                            <div class="container_grid_centre">
                                                <div class="grid_item_centre undertext" tabindex="0">
                                                    <img src="{{ asset("services/kcl centre d'appel/kcl_call_center_3.png") }}"
                                                        alt="kcl_call_center_3.png">
                                                    <p class="paragraphe-inside-cell" style="line-height: 2.3;">
                                                        {{__('message.service_centre.para_4')}}
                                                        </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>
                                                </div>
                                                <div class="grid_item_centre undertext" tabindex="0">
                                                    <img src="{{ asset("services/kcl centre d'appel/kcl_call_center_2.png") }}"
                                                        alt="kcl_call_center_2.png">
                                                    <p class="paragraphe-inside-cell">
                                                        {{__('message.service_centre.para_5')}}
                                                        </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>
                                                </div>
                                                <div class="grid_item_centre undertext" tabindex="0">
                                                    <img src="{{ asset("services/kcl centre d'appel/kcl_call_center_1.png") }}"
                                                        alt="kcl_call_center_1.png">
                                                    <p class="paragraphe-inside-cell">
                                                        {{__('message.service_centre.para_6')}}
                                                        </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>
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
                </div>
            </div>
        </div>
    </div>
@endsection

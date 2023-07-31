@extends('layouts.landingLayout')
@section('title', __('message.service_website.title'))
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
                                                <div class="calling_word" {{-- style="font-size: 36px;" --}}><span
                                                        class="word_orange_website">{{ __('message.service_website.h1-1') }}</span>
                                                    {{ __('message.service_website.h1-2') }}
                                                </div>

                                            </h2>
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
                                            <div class="container_grid_website">
                                                <div class="grid_item_website undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl website/kcl_site.jpg') }}"
                                                        alt="kcl_site.jpg">
                                                    <p class="paragraphe-inside-cell arab_text">كون حاضر لي قلب عليك يلقاك
                                                    </p>
                                                    <a
                                                        href="{{ route('contact') }} "class="contactez-link">{{ __('message.general.contact') }}</a>
                                                </div>

                                                <div class="grid_item_website undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl website/kcl_site_1.jpg') }}"
                                                        alt="kcl_site_1.jpg">
                                                    <p class="paragraphe-inside-cell">
                                                        <span class="limited-text-camera">
                                                            {{ __('message.service_website.text-1') }}
                                                        </span>

                                                    </p>
                                                    <a
                                                        href="{{ route('contact') }} "class="contactez-link">{{ __('message.general.contact') }}</a>
                                                </div>
                                                <div class="grid_item_website undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl website/kcl_site_2.png') }}"
                                                        alt="kcl_site_2.png">
                                                    <p class="paragraphe-inside-cell" style="">
                                                        <span class="limited-text-camera">
                                                            {{ __('message.service_website.text-2') }}
                                                        </span>

                                                    </p>
                                                    <a
                                                        href="{{ route('contact') }} "class="contactez-link">{{ __('message.general.contact') }}</a>
                                                </div>
                                            </div>
                                            <blockquote class="blockquote_website ">
                                                <span class="limited-text-camera">
                                                    {!! __('message.service_website.limited-text-4') !!}
                                                </span>
                                                <span class="full-text-camera" style="display: none;">
                                                    {!! __('message.service_website.full-text-4') !!}
                                                </span>
                                                <a class="read-more-camera" href="#">{{__('message.general.plus')}}</a>
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

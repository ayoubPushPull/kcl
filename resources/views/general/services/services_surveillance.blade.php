@extends('layouts.landingLayout')
@section('title', __('message.service_camera.title'))
@section('content')


    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section mcb-section h1_page">
                        <div class="section_wrapper mcb-section-inner ">
                            <div class="wrap mcb-wrap one valign-top clearfix control_height_centre">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column two-third column_column">
                                        <div class="column_attr clearfix">
                                            <h1>
                                                <div class="calling_word" {{-- style="font-size: 36px;" --}}>
                                                    {{ __('message.service_camera.h1-1') }} <span
                                                        class="word_orange">{{ __('message.service_camera.h1-2') }}</span>
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
                                            <div class="container_grid_camera">
                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl camera surveillance/kcl_camera security_1.jpg') }}"
                                                        alt="kcl_camera security_1.jpg">
                                                    <p class="paragraphe-inside-cell arab_text">حضي راسك يافلان </p>
                                                    <a
                                                        href="{{ route('contact') }} "class="contactez-link">{{ __('message.general.contact') }}</a>
                                                </div>

                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl camera surveillance/kcl_camera security.png') }}"
                                                        alt="kcl_call_center_4.png">
                                                    <p class="paragraphe-inside-cell">
                                                        <span class="limited-text-camera">
                                                            {{ __('message.service_camera.limited-text-1') }}

                                                        </span>
                                                        <span class="full-text-camera" style="display: none;">
                                                            {{ __('message.service_camera.full-text-1') }}
                                                        </span>
                                                        <a class="read-more-camera"
                                                            href="#">{{ __('message.general.plus') }}</a>
                                                    </p>
                                                    <a
                                                        href="{{ route('contact') }} "class="contactez-link">{{ __('message.general.contact') }}</a>

                                                </div>


                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl camera surveillance/kcl_camera security_2.jpg') }}"
                                                        alt="kcl_call_center_3.png">
                                                    <p class="paragraphe-inside-cell" style="">
                                                        <span class="limited-text-camera">
                                                            {{ __('message.service_camera.limited-text-2') }}
                                                        </span>
                                                        <span class="full-text-camera" style="display: none;">
                                                            {{ __('message.service_camera.full-text-2') }}

                                                        </span>
                                                        <a class="read-more-camera"
                                                            href="#">{{ __('message.general.plus') }}</a>

                                                    </p>
                                                    <a
                                                        href="{{ route('contact') }} "class="contactez-link">{{ __('message.general.contact') }}</a>
                                                </div>

                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl camera surveillance/kcl_camera_security_3.png') }}"
                                                        alt="kcl_call_center_1.png">
                                                    <p class="paragraphe-inside-cell arab_text">عندنا المعلمين الحرفة و
                                                        الاتقان والامان </p>

                                                    <a
                                                        href="{{ route('contact') }} "class="contactez-link">{{ __('message.general.contact') }}</a>

                                                </div>

                                            </div>
                                            <blockquote class="blockquote_camera">
                                                <span class="limited-text-camera">
                                                    {!! __('message.service_camera.limited-text-4') !!}
                                                </span>
                                                <span class="full-text-camera" style="display: none;">
                                                    {!! __('message.service_camera.full-text-4') !!}
                                                </span>
                                                <a class="read-more-camera"
                                                    href="#">{{ __('message.general.plus') }}</a>
                                            </blockquote>

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

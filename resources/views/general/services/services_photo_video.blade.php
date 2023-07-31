@extends('layouts.landingLayout')
@section('title', __('message.service_photo&video.title'))
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
                                            <h1>
                                                <div class="calling_word" {{-- style="font-size: 36px;" --}}>{{__('message.service_photo&video.h1-1')}} <span
                                                        class="word_orange">{{__('message.service_photo&video.h1-2')}}</span>{{__('message.service_photo&video.h1-3')}}
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
                                                    <img src="{{ asset('services/kcl photo & video/kcl_photo_video.jpg') }}"
                                                        alt="kcl_photo_video.jpg">
                                                    <p class="paragraphe-inside-cell arab_text">ديما حاضر ناظر منظور مشهور</p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>
                                                </div>

                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl photo & video/kcl_photo_video_1.jpg') }}"
                                                        alt="kcl_photo_video_1.jpg">
                                                    <p class="paragraphe-inside-cell arab_text">
                                                        كون زوين على كل الشاشات
                                                    </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>

                                                </div>


                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl photo & video/kcl_photo_video_2.png') }}"
                                                        alt="kcl_photo_video_2.png">
                                                    <p class="paragraphe-inside-cell" style="">


                                                            {{__('message.service_photo&video.text-1')}}



                                                    </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>



                                                </div>

                                                <div class="grid_item_camera undertext" tabindex="0">
                                                    <img src="{{ asset('services/kcl photo & video/kcl_photo_video_3.jpg') }}"
                                                        alt="kcl_photo_video_3.jpg">
                                                    <p class="paragraphe-inside-cell">
                                                        {{__('message.service_photo&video.text-2')}}

                                                

                                                    </p>
                                                    <a href="{{ route('contact') }} "class="contactez-link">{{__('message.general.contact')}}</a>

                                                </div>

                                            </div>
                                            <blockquote class="blockquote_camera">
                                                <span class="limited-text-camera">
                                                    {!!__('message.service_photo&video.limited-text-4')!!}
                                                </span>
                                                <span class="full-text-camera" style="display: none;">
                                                    {!!__('message.service_photo&video.full-text-4')!!}
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

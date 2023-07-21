@extends("layouts.landingLayout")
@section("content")
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section" style="padding-top:170px; padding-bottom:50px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column two-third column_column">
                                            <div class="column_attr clearfix">
                                                <h4 class="themecolor">Contact</h4>
                                                <h2>Have a question?</h2>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin:0 auto 10px">
                                        </div>
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="images/home_agency3_pic1.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section equal-height-wrap" style="padding-top:0px; padding-bottom:100px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-second valign-middle clearfix" style="padding:180px 11% 140px; background-image:url(images/home_agency3_pic18.jpg); background-repeat:no-repeat; background-position:center">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix" style=" background-image:url('images/home_agency3_pic9.png'); background-repeat:no-repeat; background-position:left top; padding:120px 40px 40px;">
                                                <h4 style="font-weight: 400;">Opening time
                                                    <br> Monday - Friday
                                                    <br> 8 am - 5 pm</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-second valign-middle clearfix" style="padding:20px 0 0 6%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h4 class="themecolor">Localization</h4>
                                                <h3>BeAgency office</h3>
                                                <hr class="no_line" style="margin:0 auto 10px">
                                                <p>
                                                    Level 13, 2 Elizabeth St,
                                                    <br> Melbourne, Victoria 3000,
                                                    <br> Australia
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 15px">
                                                <h4>+61 (0) 3 8376 6284</h4>
                                                <p>
                                                    <a href="#">noreply@envato.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:50px">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h4 class="themecolor">Online contact</h4>
                                                <h3>Write a message</h3>
                                                <p>
                                                    Curabitur sed iaculis dolor, non congue ligula. Maecenas imperdiet ante.
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 30px">
                                                <div id="contactWrapper">
                                                    <form id="contactform">
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one-second">
                                                            <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                        </div>
                                                        <div class="column one">
                                                            <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
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
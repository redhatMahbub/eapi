@extends('layouts.frontend.app')
@section('title','Eurofoodex')

@push('css')

@endpush

@section('content')
    <!-- masterslider -->
    <div class="master-slider ms-skin-default" id="masterslider">

        <!-- slide 1 -->
        <div class="ms-slide slide-1" data-delay="9">
            <div class="slide-pattern"></div>
            <img src="js/masterslider/blank.gif" data-src="http://placehold.it/1920x650" alt=""/>

            <h3 class="ms-layer text1"
                style="left: 230px;top: 200px;"
                data-type="text"
                data-delay="500"
                data-duration="1230"
                data-effect="rotate3dtop(-100,0,0,40,t)"
                data-ease="easeOutExpo"
            >
                Many More Features &
            </h3>

            <h3 class="ms-layer text2"
                style="left: 230px;top: 245px;"
                data-type="text"
                data-delay="1000"
                data-duration="1230"
                data-effect="rotate3dtop(-100,0,0,40,t)"
                data-ease="easeOutExpo"
            >
                Layered PSD Files
            </h3>

            <h3 class="ms-layer text3"
                style="left: 230px; top: 313px;"
                data-type="text"
                data-effect="top(45)"
                data-duration="2000"
                data-delay="1500"
                data-ease="easeOutExpo"> Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo <br />
                Praesent mattis commodo augue Aliquam ornare. </h3>

            <a class="ms-layer sbut1"
               style="left: 230px; top: 395px;"
               data-type="text"
               data-delay="2000"
               data-ease="easeOutExpo"
               data-duration="1200"
               data-effect="scale(1.5,1.6)"> Read More </a>

            <a class="ms-layer sbut5"
               style="left: 390px; top: 395px;"
               data-type="text"
               data-delay="2500"
               data-ease="easeOutExpo"
               data-duration="1200"
               data-effect="scale(1.5,1.6)"> Purchase now ! </a>
        </div>
        <!-- end slide 1 -->

        <!-- slide 2 -->
        <div class="ms-slide slide-2" data-delay="9">
            <div class="slide-pattern"></div>
            <img src="js/masterslider/blank.gif" data-src="http://placehold.it/1920x650" alt=""/>

            <h3 class="ms-layer text1"
                style="right: 230px;top: 200px;"
                data-type="text"
                data-delay="500"
                data-duration="1230"
                data-effect="rotate3dtop(-100,0,0,40,t)"
                data-ease="easeOutExpo"
            >
                Awesome Features
            </h3>

            <h3 class="ms-layer text2"
                style="right: 230px;top: 245px;"
                data-type="text"
                data-delay="1000"
                data-duration="1230"
                data-effect="rotate3dtop(-100,0,0,40,t)"
                data-ease="easeOutExpo"
            >
                Bg/Color Options
            </h3>

            <h3 class="ms-layer text7"
                style="right: 230px; top: 313px;"
                data-type="text"
                data-effect="top(45)"
                data-duration="2000"
                data-delay="1500"
                data-ease="easeOutExpo"> Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo <br />
                Praesent mattis commodo augue Aliquam ornare. </h3>

            <a class="ms-layer sbut1"
               style="right: 230px; top: 395px;"
               data-type="text"
               data-delay="2000"
               data-ease="easeOutExpo"
               data-duration="1200"
               data-effect="scale(1.5,1.6)"> Read More </a>

            <a class="ms-layer sbut5"
               style="right: 390px; top: 395px;"
               data-type="text"
               data-delay="2500"
               data-ease="easeOutExpo"
               data-duration="1200"
               data-effect="scale(1.5,1.6)"> Purchase now ! </a>
        </div>
        <!-- end slide 2 -->


    </div>
    <!-- end of masterslider -->
    <div class="clearfix"></div>

    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-title">Welcome to Our Site !</h2>
                    <p class="sub-title">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent <span class="text-orange-2">mattis commodo</span> augue .</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-box7 text-center bmargin"> <span class="icon-bike"></span><br/>
                        <br/>
                        <h4 class="uppercase">Graphic Design</h4>
                        <p>Lorem ipsum dolor consectetuer sit amet sit et justo consectetuer adipiscing elit.</p>
                        <br/>
                        <br/>
                        <a class="btn btn-border light btn-round" href="#">Read more</a> </div>
                </div>
                <!--end item-->

                <div class="col-md-3 col-sm-6">
                    <div class="feature-box7 text-center bmargin"> <span class="icon-lightbulb"></span><br/>
                        <br/>
                        <h4 class="uppercase">UI Design</h4>
                        <p>Lorem ipsum dolor consectetuer sit amet sit et justo consectetuer adipiscing elit.</p>
                        <br/>
                        <br/>
                        <a class="btn btn-border light btn-round" href="#">Read more</a> </div>
                </div>
                <!--end item-->

                <div class="col-md-3 col-sm-6">
                    <div class="feature-box7 text-center active bmargin"> <span class="icon-tools"></span><br/>
                        <br/>
                        <h4 class="uppercase">Branding</h4>
                        <p>Lorem ipsum dolor consectetuer sit amet sit et justo consectetuer adipiscing elit.</p>
                        <br/>
                        <br/>
                        <a class="btn btn-border light btn-round" href="#">Read more</a> </div>
                </div>
                <!--end item-->

                <div class="col-md-3 col-sm-6">
                    <div class="feature-box7 text-center bmargin"> <span class="icon-chat"></span><br/>
                        <br/>
                        <h4 class="uppercase">24/7 Support</h4>
                        <p>Lorem ipsum dolor consectetuer sit amet sit et justo consectetuer adipiscing elit.</p>
                        <br/>
                        <br/>
                        <a class="btn btn-border light btn-round" href="#">Read more</a> </div>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <!--end item-->
    <div class="clearfix"></div>

    <section class="section-light sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><img src="http://placehold.it/1115x530" class="img-responsive" alt=""/></div>
                <div class="col-md-12 text-center">
                    <div class="item-holder">
                        <h1 class="uppercase">Responsive <b>Design Ready</b></h1>
                        <h4 class="uppercase text-gray">get excellent features with Our Creative Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue.<span class="text-orange-2"> Aliquam ornare hendrerit augue</span>. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tellus diam, volutpat a, laoreet vel, bibendum in, nibh. Curabitur eget orci. Cras laoreet ligula</p>
                        <br/>
                        <br/>
                        <a class="btn btn-border dark btn-round" href="#">Read more</a> <a class="btn btn-border dark btn-round" href="#">Read more</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class=" clearfix"></div>

    <section class="section section-side-image clearfix">
        <div class="img-holder col-md-6 col-sm-3 pull-left">
            <div class="background-imgholder img4">
                <img class="nodisplay-image" src="images/site-img48.jpg" alt=""/>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-md-offset-7 col-sm-8 col-sm-offset-4 text-inner clearfix align-left">
                    <div class="text-box">
                        <h2 class="section-title">Why Choose Us</h2>
                        <p class="sub-title-left">Lorem ipsum dolor sit amet <span class="text-orange-2">consectetuer adipiscing elit</span> Suspendisse et justo Praesent mattis commodo augue.</p>
                        <div class="col-md-6 col-xs-12">
                            <div class="item-holder">
                                <div class="icon-plain-small left"> <span class="icon-layers"></span></div>
                                <div class="text-box-right less-padding-1">
                                    <h5>Nullam turpis Cras et sit justo dapibus</h5>
                                    <p>Lorem ipsum dolor sit amet et justo lorem dolor consectetuer adipiscing elit Suspendisse et.</p>
                                </div>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="col-md-6 col-xs-12">
                            <div class="item-holder">
                                <div class="icon-plain-small left"> <span class="icon-basket"></span></div>
                                <div class="text-box-right less-padding-1">
                                    <h5>Nullam turpis Cras et sit justo dapibus</h5>
                                    <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et.</p>
                                </div>
                            </div>
                        </div>
                        <!--end item-->
                        <div class="clearfix"></div>
                        <br/>
                        <br/>
                        <a class="btn btn-orange-2 dark btn-round" href="#">Read more</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class=" clearfix"></div>

    <section class="parallax-section4">
        <div class="container sec-tpadding-2 sec-bpadding-2">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class=" uppercase section-title text-white">You Will Love Hasta</h2>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. </p>
                    <br/>
                    <br/>
                    <a href="#" class="btn btn-border gray btn-round">Read more</a></div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-title">Our Services</h2>
                    <p class="sub-title">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent <span class="text-orange-2">mattis commodo</span> augue .</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6 col-sm-6">
                    <div class="feature-box8">
                        <div class="iconbox-small right"><span class="icon-plane"></span></div>
                        <div class="text-box-left">
                            <h4 class="less-mar3">3D Animation</h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit et sit amet justo Suspendisse et justo.</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-6">
                    <div class="feature-box8">
                        <div class="iconbox-small left"><span class="icon-screen-desktop"></span></div>
                        <div class="text-box-right">
                            <h4 class="less-mar3">Responsive Design</h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit et sit amet justo Suspendisse et justo.</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-6">
                    <div class="feature-box8">
                        <div class="iconbox-small right"><span class="icon-docs"></span></div>
                        <div class="text-box-left">
                            <h4 class="less-mar3">Layered PSD Files</h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit et sit amet justo Suspendisse et justo.</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-6">
                    <div class="feature-box8 active">
                        <div class="iconbox-small left"><span class="icon-handbag"></span></div>
                        <div class="text-box-right">
                            <h4 class="less-mar3">Branding Design</h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit et sit amet justo Suspendisse et justo.</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-6">
                    <div class="feature-box8">
                        <div class="iconbox-small right"><span class="icon-camcorder"></span></div>
                        <div class="text-box-left">
                            <h4 class="less-mar3">Video Editing</h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit et sit amet justo Suspendisse et justo.</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-6">
                    <div class="feature-box8">
                        <div class="iconbox-small left"><span class="icon-bubble"></span></div>
                        <div class="text-box-right">
                            <h4 class="less-mar3">Excellent Support</h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit et sit amet justo Suspendisse et justo.</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class="section-light sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 align-left last">
                    <div class="item-holder">
                        <h4 class="uppercase">What We Offer</h4>
                        <br/>
                        <div class="accordion_holder">
                            <div class="accordion_example1">

                                <!-- Section 1 -->
                                <div class="accordion_in two st2 acc_active">
                                    <div class="acc_head">Creative Design</div>
                                    <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue.</div>
                                </div>

                                <!-- Section 2 -->
                                <div class="accordion_in two st2">
                                    <div class="acc_head">Graphic Design</div>
                                    <div class="acc_content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue.</div>
                                </div>

                                <!-- Section 3 -->
                                <div class="accordion_in two st2">
                                    <div class="acc_head">Photography</div>
                                    <div class="acc_content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion end -->
                </div>
                <!--end column-->

                <div class="col-md-4 col-sm-6">
                    <div class="item-holder">
                        <h4 class="uppercase">Our Skills</h4>
                        <br/>
                        <!--bar-->
                        <div class="progress progressbar-style1 ">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> Javascript 80% </div>
                        </div>
                        <!--end bar-->
                        <!--bar-->
                        <div class="progress progressbar-style1 ">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"> Photoshop 90% </div>
                        </div>
                        <!--end bar-->
                        <!--bar-->
                        <div class="progress progressbar-style1 ">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"> Logo Design 70% </div>
                        </div>
                        <!--end bar-->
                        <!--bar-->
                        <div class="progress progressbar-style1 ">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"> Photography 75% </div>
                        </div>
                        <!--end bar-->
                    </div>
                </div>
                <!--end column-->

                <div class="col-md-4 col-sm-6">
                    <div class="item-holder">
                        <h4 class="uppercase">People Says</h4>
                        <br/>
                        <div class="clearfix"></div>
                        <div id="owl-demo2" class="owl-carousel">
                            <div class="item">
                                <div class="testimonials2">
                                    <div class="textbox">
                                        <div class="arrow-down"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
                                    </div>
                                    <div class="image-left">
                                        <div class="imgholder">
                                            <div class="img-inner overflow-hidden"><img src="http://placehold.it/110x110" alt=""/></div>
                                        </div>
                                    </div>
                                    <div class="text-box-right">
                                        <h5 class="less-mar1 paddtop3">Celina John</h5>
                                        <span class="text-orange-2">Mediatricks - Support</span> </div>
                                </div>
                            </div>
                            <!--end item-->

                            <div class="item">
                                <div class="testimonials2">
                                    <div class="textbox">
                                        <div class="arrow-down"></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue.</p>
                                    </div>
                                    <div class="image-left">
                                        <div class="imgholder">
                                            <div class="img-inner overflow-hidden"><img src="http://placehold.it/110x110" alt=""/></div>
                                        </div>
                                    </div>
                                    <div class="text-box-right">
                                        <h5 class="less-mar1 paddtop3">Celina John</h5>
                                        <span class="text-orange-2">Mediatricks - Support</span> </div>
                                </div>
                            </div>
                            <!--end item-->
                        </div>
                    </div>
                </div>
                <!--end column-->
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class=" section sec-tpadding-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-title">Featured Projects</h2>
                    <p class="sub-title">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent <span class="text-orange-2">mattis commodo</span> augue .</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="demo-full-width">
                    <div id="grid-container" class="cbp">
                        <div class="cbp-item identity logos"> <a href="http://placehold.it/800x600" class="cbp-caption cbp-lightbox" data-title="Suspendisse Imperdiet<br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x600" alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Suspendisse Imperdiet </div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                        <div class="cbp-item web-design"> <a href="http://placehold.it/800x600" class="cbp-caption cbp-lightbox" data-title="Magna Tempus Urna<br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x600" alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Magna Tempus Urna</div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                        <div class="cbp-item motion identity"> <a href="http://placehold.it/800x600" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x600" alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Maecenas Sed </div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                        <div class="cbp-item identity graphic"> <a href="http://placehold.it/800x600" class="cbp-caption cbp-lightbox" data-title="Quisque Ornare <br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x600" alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Quisque Ornare </div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                        <div class="cbp-item motion logos"> <a href="http://placehold.it/800x600" class="cbp-caption cbp-lightbox" data-title="Skateshop Website<br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x600" alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Hendrerit Condimentum</div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                        <div class="cbp-item web-design"> <a href="http://placehold.it/800x600" class="cbp-caption cbp-lightbox" data-title="Donec Dapibus Placerat <br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x600" alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Donec Dapibus Placerat </div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                        <div class="cbp-item identity motion"> <a href="http://placehold.it/800x600" class="cbp-caption cbp-lightbox" data-title="Mauris non Quam ac eros<br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x600" alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Mauris non Quam ac eros </div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                        <div class="cbp-item web-design graphic"> <a href="http://placehold.it/800x600" class="cbp-caption cbp-lightbox" data-title="Vivamus Vulputate <br>by Codelayers">
                                <div class="cbp-caption-defaultWrap"> <img src="http://placehold.it/800x600" alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">Vivamus Vulputate </div>
                                            <div class="cbp-l-caption-desc">by Codelayers</div>
                                        </div>
                                    </div>
                                </div>
                            </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class=" section sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-title">Meet Our Team</h2>
                    <p class="sub-title">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent <span class="text-orange-2">mattis commodo</span> augue .</p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="team-holder3 two">
                        <div class="image-left">
                            <div class="img-holder"> <a href="#">
                                    <div class="overlay"><span class="icon-attachment "></span></div>
                                </a>
                                <div class="img-inner overflow-hidden"><img src="http://placehold.it/230x230" alt=""/></div>
                            </div>
                        </div>
                        <div class="text-box-right"> <br/>
                            <h4 class="less-mar1">John Doe</h4>
                            <span class="text-orange-2">Founder & CEO</span><br/>
                            <br/>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
                            <br/>
                            <ul class=" social-icons-3">
                                <li class="first"><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-12">
                    <div class="team-holder3 two active">
                        <div class="image-left">
                            <div class="img-holder"> <a href="#">
                                    <div class="overlay"><span class="icon-attachment "></span></div>
                                </a><div class="img-inner overflow-hidden"><img src="http://placehold.it/230x230" alt=""/></div> </div>
                        </div>
                        <div class="text-box-right"> <br/>
                            <h4 class="less-mar1">John Doe</h4>
                            <span class="text-orange-2">Founder & CEO</span><br/>
                            <br/>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
                            <br/>
                            <ul class=" social-icons-3">
                                <li class="first"><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="active" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-12">
                    <div class="team-holder3 two">
                        <div class="image-left">
                            <div class="img-holder"> <a href="#">
                                    <div class="overlay"><span class="icon-attachment "></span></div>
                                </a> <div class="img-inner overflow-hidden"><img src="http://placehold.it/230x230" alt=""/></div> </div>
                        </div>
                        <div class="text-box-right"> <br/>
                            <h4 class="less-mar1">John Doe</h4>
                            <span class="text-orange-2">Founder & CEO</span><br/>
                            <br/>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
                            <br/>
                            <ul class=" social-icons-3">
                                <li class="first"><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-6 col-sm-12">
                    <div class="team-holder3 two">
                        <div class="image-left">
                            <div class="img-holder"> <a href="#">
                                    <div class="overlay"><span class="icon-attachment "></span></div>
                                </a> <div class="img-inner overflow-hidden"><img src="http://placehold.it/230x230" alt=""/></div> </div>
                        </div>
                        <div class="text-box-right"> <br/>
                            <h4 class="less-mar1">John Doe</h4>
                            <span class="text-orange-2">Founder & CEO</span><br/>
                            <br/>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
                            <br/>
                            <ul class=" social-icons-3">
                                <li class="first"><a href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <!--end section -->
    <div class="clearfix"></div>

    <section class="parallax-section6">
        <div class="section-overlay">
            <div class="container sec-tpadding-2 sec-bpadding-2">
                <div class="row">
                    <div class="col-md-8 col-centered">
                        <h2 class=" uppercase section-title text-white">Dolor sit amet consectetuer adipiscing</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit <span class="text-orange-2">Suspendisse et justo Praesent mattis</span> commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. </p>
                        <br/>
                        <br/>
                        <a class="btn btn-border white-2 btn-round" href="#">Read more</a> <a class="btn btn-border white-2 btn-round" href="#">Read more</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>

    <section class=" section-light sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="section-title">From The Blog</h2>
                    <p class="sub-title">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent <span class="text-orange-2">mattis commodo</span> augue .</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-holder1 noborder bmargin">
                        <div class="image-holder">
                            <div class="post-date-box violet"> 25 <span>May, 2015</span> </div>
                            <img src="http://placehold.it/1000x800" alt="" class="img-responsive"/> </div>
                        <div class="content-box">
                            <h4 class="less-mar2"><a href="#">Creative Design</a></h4>
                            <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
                            <br/>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo sit amet et Praesent mattis commodo</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-4 col-sm-6">
                    <div class="blog-holder1 noborder bmargin">
                        <div class="image-holder">
                            <div class="post-date-box violet"> 25 <span>May, 2015</span> </div>
                            <img src="http://placehold.it/1000x800" alt="" class="img-responsive"/> </div>
                        <div class="content-box">
                            <h4 class="less-mar2"><a href="#">Layered PSD Files</a></h4>
                            <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
                            <br/>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo sit amet et Praesent mattis commodo</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

                <div class="col-md-4 col-sm-6">
                    <div class="blog-holder1 noborder bmargin">
                        <div class="image-holder">
                            <div class="post-date-box violet"> 25 <span>May, 2015</span> </div>
                            <img src="http://placehold.it/1000x800" alt="" class="img-responsive"/> </div>
                        <div class="content-box">
                            <h4 class="less-mar2"><a href="#">Awesome Support</a></h4>
                            <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
                            <br/>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo sit amet et Praesent mattis commodo</p>
                        </div>
                    </div>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <!--end section-->
    <div class=" clearfix"></div>

    <section class="section sec-moreless-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="clientlogo-list two">
                        <li><img src="http://placehold.it/140x100" alt=""/></li>
                        <li><img src="http://placehold.it/140x100" alt=""/></li>
                        <li><img src="http://placehold.it/140x100" alt=""/></li>
                        <li><img src="http://placehold.it/140x100" alt=""/></li>
                        <li class="last"><img src="http://placehold.it/140x100" alt=""/></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--end section -->
    <div class="clearfix"></div>



    <section class="parallax-section5">
        <div class="container sec-tpadding-2 sec-bpadding-2">
            <div class="row">
                <div class="col-md-8 col-centered">
                    <h2 class=" uppercase section-title text-white">Get Many More Features With Hasta</h2>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. </p>
                    <br/>
                    <br/>
                    <a class="btn btn-border white-2 btn-round" href="#">Read more</a> </div>
            </div>
        </div>
    </section>
    <!--end section-->
    <div class="clearfix"></div>
@endsection

@push('js')

@endpush
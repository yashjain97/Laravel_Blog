@section('title',$title)
@extends('layouts.master3')

@section('content')
    <section class="breadcrumb-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left pull-left">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!--Start contact form area-->
   <section class="contact-form-area">
            <div class="container">
                <div class="sec-title">
                    <h3>Quick Contact</h3>
                    <h1>Get Touch With Us</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content">
                            <div class="col-lg-8 col-md-7">
                                <div class="contact-form">
                                    <form id="contact-form" name="contact_form" class="default-form" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="form_name" value="" placeholder="Your Name*" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" name="form_email" value="" placeholder="Your Mail*" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="form_phone" value="" placeholder="Phone">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="form_subject" value="" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="form_message" placeholder="Your Message.." required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button class="thm-btn bgclr-1" type="submit" data-loading-text="Please wait...">send message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <!--Start single item-->
                                <div class="single-item">
                                    <div class="sec-title">
                                        <h3>Rae Bareli</h3>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="icon-holder">
                                                <span class="flaticon-arrows"></span>
                                            </div>
                                            <div class="text-holder">
                                                <p>2nd Floor, Chauhan Complex,Near Bargad Chauraha, Raebareli, Uttar Pradesh
                                                    229001</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-holder">
                                                <span class="flaticon-technology"></span>
                                            </div>
                                            <div class="text-holder">
                                                <p>Phone: (+91) 535-270-0102</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-holder">
                                                <span class="flaticon-note"></span>
                                            </div>
                                            <div class="text-holder">
                                                <p>Email:contact@dronasankalp.com</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!--Start single item-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    </section>
    <!--End contact form area-->
    @endsection
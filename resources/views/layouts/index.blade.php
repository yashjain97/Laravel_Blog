
@section('title',$title)
@include('layouts.header')


<body onload="loadScroller();">
    <div class="boxed_wrapper">

        <!--Start Preloader -->
        <div class="preloader"></div>
        <form action="/stuquery" method="post" name="form1">
        {{csrf_field()}}
        <!--End Preloader -->
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-describedby="modalDescription" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" id="modalDescription">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    <img src='images/modal-img.jpg' class='img-responsive'>
                                </div>
                                <div class="col-md-4 col-xs-12 col-sm-12">
                                    <h4 style='padding:10px 0px;'>Admission Enquiry Form</h4>
                                    <form>
                                        <div class="form-group">
                                            <input type='text' class='enq-form'  name="name"placeholder='Name (required)' required>
                                        </div>
                                        <div class='form-group'>
                                            <select required class="enq-form" name="course">
                                                <option value selected disabled>Target Entrance Exam (required)</option>
                                                <option value="JEE Mains">JEE Mains</option>
                                                <option value="JEE Advanced">JEE Advanced</option>
                                                <option value="NEET">NEET-UG</option>
                                                <option value="AIIMS">AIIMS</option>
                                                <option value="Foundation Boards">Foundation Boards</option>
                                                <option value="Foundation NTSE">Foundation NTSE</option>
                                                <option value="NDA">NDA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="enq-form" name="class" required>
                                                <option value selected disabled>Class</option>
                                                <option value="9">9th</option>
                                                <option value="10">10th</option>
                                                <option value="11">11th</option>
                                                <option value="12">12th</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="enq-form" placeholder="Percentage in Previous Class" name="acheivement" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Address" class="enq-form" rows="2" name="address" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="enq-form" name="district" placeholder="District/City" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="enq-form" name="phone" placeholder="Mobile Number" min="7000000000" max="9999999999" id="mobile"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="enq-form" name="email" placeholder="Email id" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="enq-form" name="batch">
                                                <option value selected disabled>Preferred time of Calling in IST</option>
                                                <option value="08:00-09:00">08:00-09:00</option>
                                                <option value="09:00-10:00">09:00-10:00</option>
                                                <option value="10:00-11:00">10:00-11:00</option>
                                                <option value="11:00-12:00">11:00-12:00</option>
                                                <option value="12:00-13:00">12:00-13:00</option>
                                                <option value="13:00-14:00">13:00-14:00</option>
                                                <option value="14:00-15:00">14:00-15:00</option>
                                                <option value="15:00-16:00">15:00-16:00</option>
                                                <option value="16:00-17:00">16:00-17:00</option>
                                                <option value="17:00-18:00">17:00-18:00</option>
                                                <option value="18:00-19:00">18:00-19:00</option>
                                                <option value="19:00-20:00">19:00-20:00</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-primary"  value=" Submit" name="submit" onclick="myFunction()">
                    <input type="button" class="btn btn-secondary" value="Close" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>

  </form>
    <script>
        function myFunction(){
            alert('your form has been submitted');
        }
    </script>

@include('layouts.nav')

        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>
                    <!--one list item removed-->
                    <li data-transition="fade">
                        <img src="images/slides/4.jpg" alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

                        <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-155" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                            data-splitin="none" data-splitout="none" data-start="500">
                            <div class="slide-content-box middle-slide">
                                <img src="images/DSA Logo golden.png">
                            </div>
                        </div>
                        <div class="tp-caption  tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-35" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1500">
                            <div class="slide-content-box middle-slide">
                                <img src="images/text-1.png">
                            </div>
                        </div>
                        <div class="tp-caption  tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="50" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2000">
                            <div class="slide-content-box middle-slide">
                                <img src="images/text-4.png">
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="200" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box middle-slide">
                                <div class="button">
                                    <a id="studInc" href="#">Know More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-transition="fade">
                        <img src="images/slides/3.jpg" alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="right" data-hoffset="0" data-y="top" data-voffset="160" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box right-slide">
                                <h2>Made by yash Jain4</h2>
                                <h1>This is a good coaching website
                                    <br/></h1>
                                <p>Please go through each and every page of the website</p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="165" data-y="top" data-voffset="450" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="" href="courses.html">Explore Courses</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--End rev slider wrapper-->

        <!--Start service area-->
        <section class="service-area">
            <div class="container">
                <div class="sec-title">
                    <!--<h3>What We Do</h3>-->
                    <h1>Courses Offered</h1>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="servicecarousel">
                            <!--Start single item-->
                            <div class="single-service-item">
                                <div class="img-holder">
                                    <img src="images/services/1.png" alt="Awesome Image">
                                    <div class="content">
                                        <div class="text-holder text-center">
                                            <div class="inner">
                                                <div class="inner-content">
                                                    <div class="icon-box">
                                                        <span class="flaticon-studying"></span>
                                                    </div>
                                                    <h3>Engineering Competitives</h3>
                                                    <p>Courses for Joint Entrance Examinations (JEE) for admission in IITs,
                                                        NITs, IIITs & BITS</p>
                                                    <!--<a class="thm-btn bgclr-1" href="#">Read More</a>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder-1 text-center">
                                            <div class="inner">
                                                <div class="inner-content">
                                                    <div class="icon-box">
                                                        <span class="flaticon-studying"></span>
                                                    </div>
                                                    <h3>Engineering</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="single-service-item">
                                <div class="img-holder">
                                    <img src="images/services/10.jpg" alt="Awesome Image">
                                    <div class="content">
                                        <div class="text-holder text-center">
                                            <div class="inner">
                                                <div class="inner-content">
                                                    <div class="icon-box">
                                                        <span class="flaticon-doctor"></span>
                                                    </div>
                                                    <h3>Medical Tests</h3>
                                                    <p>Courses For Medical Examinations like AIIMS, NEET for admissions in AIIMS
                                                        and other reputed government Colleges</p>
                                                    <!--<a class="thm-btn bgclr-1" href="#">Read More</a>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder-1 text-center">
                                            <div class="inner">
                                                <div class="inner-content">
                                                    <div class="icon-box">
                                                        <span class="flaticon-doctor"></span>
                                                    </div>
                                                    <h3>Medical</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="single-service-item">
                                <div class="img-holder">
                                    <img src="images/services/11.jpg" alt="Awesome Image">
                                    <div class="content">
                                        <div class="text-holder text-center">
                                            <div class="inner">
                                                <div class="inner-content">
                                                    <div class="icon-box">
                                                        <span class="flaticon-student-with-graduation-hat"></span>
                                                    </div>
                                                    <h3>Foundation Classes</h3>
                                                    <p>Some interesting Courses that would increase chances for a good Foundation</p>
                                                    <!--<a class="thm-btn bgclr-1" href="#">Read More</a>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder-1 text-center">
                                            <div class="inner">
                                                <div class="inner-content">
                                                    <div class="icon-box">
                                                        <span class="flaticon-student-with-graduation-hat"></span>
                                                    </div>
                                                    <h3>Foundation</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="single-service-item">
                                <div class="img-holder">
                                    <img src="images/services/12.jpg" alt="Awesome Image">
                                    <div class="content">
                                        <div class="text-holder text-center">
                                            <div class="inner">
                                                <div class="inner-content">
                                                    <div class="icon-box">
                                                        <span class="flaticon-shield"></span>
                                                    </div>
                                                    <h3>NDA And Other Defence Exams</h3>
                                                    <p>Courses for Defence Service exams to make you ready for serving the nation</p>
                                                    <!--<a class="thm-btn bgclr-1" href="#">Read More</a>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder-1 text-center">
                                            <div class="inner">
                                                <div class="inner-content">
                                                    <div class="icon-box">
                                                        <span class="flaticon-shield"></span>
                                                    </div>
                                                    <h3>NDA</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End service area-->

        <!--Start choosing area-->
        <section class="choosing-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Student Incentives</h1>
                </div>
                <div class="row">
                    <!--Start single item-->
                    <div class="col-md-4">
                        <div class="single-item">
                            <div class="title">
                                <h3>Course Study Material</h3>
                            </div>
                            <div class="text-holder">
                                <div class="iocn">
                                    <span class="flaticon-open-magazine"></span>
                                </div>
                                <div class="text">
                                    <p>Warmly little before cousin sussex entire men set. Blessing it ladyship on sensible judgment
                                        settling outweigh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4">
                        <div class="single-item">
                            <div class="title">
                                <h3>Book Bank</h3>
                            </div>
                            <div class="text-holder">
                                <div class="iocn">
                                    <span class="flaticon-books"></span>
                                </div>
                                <div class="text">
                                    <p>Warmly little before cousin sussex entire men set. Blessing it ladyship on sensible judgment
                                        settling outweigh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4">
                        <div class="single-item">
                            <div class="title">
                                <h3>Support & Motivation</h3>
                            </div>
                            <div class="text-holder">
                                <div class="iocn">
                                    <span class="flaticon-motivation"></span>
                                </div>
                                <div class="text">
                                    <p>Warmly little before cousin sussex entire men set. Blessing it ladyship on sensible judgment
                                        settling outweigh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4">
                        <div class="single-item">
                            <div class="title">
                                <h3>Best Of Tutors</h3>
                            </div>
                            <div class="text-holder">
                                <div class="iocn">
                                    <span class="flaticon-teacher-pointing-blackboard"></span>
                                </div>
                                <div class="text">
                                    <p>Warmly little before cousin sussex entire men set. Blessing it ladyship on sensible judgment
                                        settling outweigh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4">
                        <div class="single-item">
                            <div class="title">
                                <h3>Doubt Sessions</h3>
                            </div>
                            <div class="text-holder">
                                <div class="iocn">
                                    <span class="flaticon-learning"></span>
                                </div>
                                <div class="text">
                                    <p>Warmly little before cousin sussex entire men set. Blessing it ladyship on sensible judgment
                                        settling outweigh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4">
                        <div class="single-item">
                            <div class="title">
                                <h3>Credits To The Toppers</h3>
                            </div>
                            <div class="text-holder">
                                <div class="iocn">
                                    <span class="flaticon-team-success"></span>
                                </div>
                                <div class="text">
                                    <p>Warmly little before cousin sussex entire men set. Blessing it ladyship on sensible judgment
                                        settling outweigh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>
        </section>
        <!--End choosing area-->

        <!--Start testimonial area-->
        <section class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title pull-left">
                            <h1>NEWS & BLOG</h1>
                        </div>
                        <!-- <div class="more-button pull-right">
                    <a href="#">More Stories</a>
                </div>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="newscorousel">
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/news/1.jpg">
                                <div class="card-block">
                                    <p class="card-text">
                                        Mr do raising article general norland my hastily. Its companions say uncommonly pianoforte favourable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
@include('layouts.footer')
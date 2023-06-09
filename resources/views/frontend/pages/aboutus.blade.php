@extends('layouts.index')

@section('Title')
    AboutUs
@endsection
@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
        <div class="container text-white">
            <h3>About us</h3>
        </div>
    </section>
    <!--  Page top end -->


    <!-- Search section -->
    <section class="multi-search-section">
        <div class="msf-warp">
            <div class="container">
                <h5>Search your Course</h5>
                <form class="multi-search-form">
                    <input type="text" placeholder="Course">
                    <input type="text" placeholder="Level">
                    <input type="text" placeholder="Date">
                    <input type="text" placeholder="Teacher">
                    <input type="text" placeholder="Price">
                    <button class="site-btn">Search <i class="fa fa-angle-right"></i></button>
                </form>
            </div>
        </div>
    </section>
    <!-- Search section end -->


    <!-- About section -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 about-text">
                    <h3>Hello, We are Academica</h3>
                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor
                        lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id
                        aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus,
                        tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna
                        mauris. In molestie quis risus commodo gravida.</p>
                    <p>Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus
                        sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non,
                        porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris. In
                        molestie quis risus commodo gravida. </p>
                    <a href="#" class="site-btn">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="col-lg-5">
                    <figure class="pt-lg-0 pt-5">
                        <img src="{{ asset("img/about.jpg") }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->


    <!-- Progress section -->
    <section class="Progress-section spad set-bg" data-setbg="img/progress-bg.jpg">
        <div class="container">
            <div class="row text-white">
                <div class="col-lg-3 col-md-6 cp-item">
                    <div class="circle-progress" data-cpid="id-1" data-cpvalue="75"></div>
                    <h3>New Students</h3>
                    <p>Etiam nec odio vestibulum est.</p>
                </div>
                <div class="col-lg-3 col-md-6 cp-item">
                    <div class="circle-progress" data-cpid="id-2" data-cpvalue="83"></div>
                    <h3>NEw Teachers</h3>
                    <p>Odio vestibulum est mattis.</p>
                </div>
                <div class="col-lg-3 col-md-6 cp-item">
                    <div class="circle-progress" data-cpid="id-3" data-cpvalue="25"></div>
                    <h3>Creativity</h3>
                    <p>Vestibulum est mattis effic.</p>
                </div>
                <div class="col-lg-3 col-md-6 cp-item">
                    <div class="circle-progress" data-cpid="id-4" data-cpvalue="95"></div>
                    <h3>Prestige</h3>
                    <p>Vestibulum est mattis effic.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Progress section end -->


    <!-- Pricing section -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="sec-title text-center">
                <span>Only the best</span>
                <h2>Princing Table</h2>
            </div>
            <!-- pricing switch -->
            <div class="pricing-switch-warp">
                <div class="pricing-switch">
                    <div class="ps-month">monthly</div>
                    <div class="main-switch"></div>
                    <div class="ps-annual">annual</div>
                </div>
            </div>
            <!-- Monthly pricing charts -->
            <div class="mp-chart">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-chart">
                            <h2>Free</h2>
                            <span>Forever</span>
                            <h4>Begginer</h4>
                            <ul>
                                <li>1 e-mail address</li>
                                <li>10 Users</li>
                                <li>25 GB space</li>
                                <li>unlimited Reports</li>
                                <li>25 GB Upoads</li>
                            </ul>
                            <a href="#" class="site-btn">Purchase <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-chart pc-populer">
                            <div class="offer-info">Save 20% - go annual</div>
                            <h3>15<sup>90</sup></h3>
                            <span>/month</span>
                            <h4>Regular</h4>
                            <ul>
                                <li>3 e-mail address</li>
                                <li>15 Users</li>
                                <li>25 GB space</li>
                                <li>unlimited Reports</li>
                                <li>25 GB Upoads</li>
                                <li>
                                    <img src="{{ asset("img/icons/check.png") }}" alt="">
                                </li>
                            </ul>
                            <a href="#" class="site-btn">Purchase <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-chart">
                            <div class="offer-info">Save 20% - go annual</div>
                            <h3>25<sup>90</sup></h3>
                            <span>/month</span>
                            <h4>Professional</h4>
                            <ul>
                                <li>3 e-mail address</li>
                                <li>20 Users</li>
                                <li>25 GB space</li>
                                <li>unlimited Reports</li>
                                <li>25 GB Upoads</li>
                                <li>
                                    <img src="{{ asset("img/icons/check.png") }}" alt="">
                                </li>
                            </ul>
                            <a href="#" class="site-btn">Purchase <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-chart">
                            <div class="offer-info">Save 20% - go annual</div>
                            <h3>45<sup>90</sup></h3>
                            <span>/month</span>
                            <h4>Corporate</h4>
                            <ul>
                                <li>3 e-mail address</li>
                                <li>unlimited Users</li>
                                <li>25 GB space</li>
                                <li>unlimited Reports</li>
                                <li>25 GB Upoads</li>
                                <li>
                                    <img src="{{ asset("img/icons/check.png") }}" alt="">
                                    <img src="{{ asset("img/icons/check.png") }}" alt="">
                                </li>
                            </ul>
                            <a href="#" class="site-btn">Purchase <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Annual pricing charts -->
            <div class="ap-chart">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-chart">
                            <h2>Free</h2>
                            <span>Forever</span>
                            <h4>Begginer</h4>
                            <ul>
                                <li>1 e-mail address</li>
                                <li>10 Users</li>
                                <li>25 GB space</li>
                                <li>unlimited Reports</li>
                                <li>25 GB Upoads</li>
                            </ul>
                            <a href="#" class="site-btn">Purchase <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-chart pc-populer">
                            <div class="offer-info">Save 20% - go annual</div>
                            <h3>110<sup>90</sup></h3>
                            <span>/Annual</span>
                            <h4>Regular</h4>
                            <ul>
                                <li>3 e-mail address</li>
                                <li>15 Users</li>
                                <li>25 GB space</li>
                                <li>unlimited Reports</li>
                                <li>25 GB Upoads</li>
                                <li>
                                    <img src="{{ asset("img/icons/check.png") }}" alt="">
                                </li>
                            </ul>
                            <a href="#" class="site-btn">Purchase <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-chart">
                            <div class="offer-info">Save 20% - go annual</div>
                            <h3>215<sup>90</sup></h3>
                            <span>/annual</span>
                            <h4>Professional</h4>
                            <ul>
                                <li>3 e-mail address</li>
                                <li>20 Users</li>
                                <li>25 GB space</li>
                                <li>unlimited Reports</li>
                                <li>25 GB Upoads</li>
                                <li>
                                    <img src="{{ asset("img/icons/check.png") }}" alt="">
                                </li>
                            </ul>
                            <a href="#" class="site-btn">Purchase <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-chart">
                            <div class="offer-info">Save 20% - go annual</div>
                            <h3>320<sup>90</sup></h3>
                            <span>/annual</span>
                            <h4>Corporate</h4>
                            <ul>
                                <li>3 e-mail address</li>
                                <li>unlimited Users</li>
                                <li>25 GB space</li>
                                <li>unlimited Reports</li>
                                <li>25 GB Upoads</li>
                                <li>
                                    <img src="{{ asset("img/icons/check.png") }}" alt="">
                                    <img src="{{ asset("img/icons/check.png") }}" alt="">
                                </li>
                            </ul>
                            <a href="#" class="site-btn">Purchase <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing section end -->
@endsection

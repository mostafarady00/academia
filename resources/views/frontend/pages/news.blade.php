@extends('layouts.index')

@section('Title')
    News
@endsection

@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="{{ asset("img/page-top-bg.jpg") }}">
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
    @foreach ($news as $new )
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog item -->
                    <div class="blog-item">
                        <div class="blog-thumb set-bg"><img src="/uploads/news/{{ $new->image }}" width="800" alt="" srcset=""></div >
                            <div class="blog-date">
                                 <h2>{{ $new->day}}</h2>
                                <span>{{ $new->month}}</span>
                                <span>{{ $new->year}}</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3>{{ $new->title}}</h3>

                            <p>{{ $new->description}}</p>

                        </div>
                    </div>
                    <div class="site-pagination">
                        <span>01.</span>
                        <a href="#">02.</a>
                        <a href="#">03</a>
                    </div>
                </div>
                @endforeach
                <!-- sidebar -->
                <div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">
                    <div class="widget">
                        <form class="search-form">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="#">Books<span>(9)</span></a></li>
                            <li><a href="#">Events<span>(6)</span></a></li>
                            <li><a href="#">Courses<span>(6)</span></a></li>
                            <li><a href="#">Teachers<span>(7)</span></a></li>
                            <li><a href="#">Music<span>(33)</span></a></li>
                            <li><a href="#">Uncategorized<span>(7)</span></a></li>
                            <li><a href="#">School<span>(6)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h3 class="widget-title">Latest News</h3>
                        <div class="latest-blog">
                            <div class="lb-item">
                                <div class="lb-thumb set-bg" data-setbg="{{ asset("img/courses/1.jpg") }}"></div>
                                <div class="lb-content">
                                    <h5>New School programs</h5>
                                    <p>14.05.18<span>312 Views</span></p>
                                </div>
                            </div>
                            <div class="lb-item">
                                <div class="lb-thumb set-bg" data-setbg="{{ asset("img/courses/2.jpg") }}"></div>
                                <div class="lb-content">
                                    <h5>A close look at our courses</h5>
                                    <p>14.05.18<span>312 Views</span></p>
                                </div>
                            </div>
                            <div class="lb-item">
                                <div class="lb-thumb set-bg" data-setbg="{{ asset("img/courses/6.jpg") }}"></div>
                                <div class="lb-content">
                                    <h5>New School programs</h5>
                                    <p>14.05.18<span>312 Views</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="newslatter-card set-bg" data-setbg="{{ asset("img/nl-card-bg.jpg") }}">
                            <h5>Stay updated</h5>
                            <form class="newslatter-form">
                                <input type="text" placeholder="Your E-mail">
                                <button class="site-btn">Subscribe <i class="fa fa-angle-right"></i></button>
                            </form>
                            <p>*Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesqu e sit am et tellus
                                blandit. Etiam nec odio vestibul.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -e
@endsection



     {{-- <a href="#"><img src="images/{{ $datauser->img }}" alt=""></a>
                        <div class="blog-thumb set-bg" data-setbg="{{ asset("img/blog/3.jpg") }}"> --}}

      {{-- <!-- Blog item -->
      <div class="blog-item">

       <div c      <a href="#"><img src="images/{{ $datauser->img }}" alt=""></a>lass="blog-thumb set-bg" data-setbg="{{ asset("img/blog/3.jpg") }}">
            <div class="blog-date">
                <h2>15</h2>
                <span>may</span>
                <span>2018</span>
            </div>
        </div>
        <div class="blog-content">
            <h3>A close look at our new added courses</h3>
            <div class="blog-meta">
                <a href=""><span>By</span> Admin</a>|
                <a href=""><span>in</span> School</a>|
                <a href="">3 Comments</a>
            </div>
            <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et
                auctor lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est
                urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut
                erat dapibus, tempor sapien non,.</p>
            <div class="blog-tag">
                <a href="#">school</a>
                <a href="#">course</a>
                <a href="#">education</a>
            </div>
        </div>
    </div>
    <div class="site-pagination">
        <span>01.</span>
        <a href="#">02.</a>
        <a href="#">03</a>
    </div>
</div> --}}


























{{--
 <!-- Blog item -->
 <div class="blog-item">
    <div class="blog-thumb set-bg" data-setbg="{{ asset("img/blog/1.jpg") }}">
        <div class="blog-date">
            <h2>15</h2>
            <img src="{{ asset("img/blog/1.jpg") }}" alt="" srcset="">
            <span>may</span>
            <span>2018</span>
        </div>
    </div>
    <div class="blog-content">
        <h3>New school programs up to date</h3>
        <div class="blog-meta">
            <a href=""><span>By</span> Admin</a>|
            <a href=""><span>in</span> School</a>|
            <a href="">3 Comments</a>
        </div>
        <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et
            auctor lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est
            urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut
            erat dapibus, tempor sapien non,.</p>
        <div class="blog-tag">
            <a href="#">school</a>
            <a href="#">course</a>
            <a href="#">education</a>
        </div>
    </div>
</div>
<!-- Blog item -->
<div class="blog-item">
    <div class="blog-thumb set-bg" data-setbg="{{ asset("img/blog/2.jpg") }}">
        <div class="blog-date">
            <h2>15</h2>
            <span>may</span>
            <span>2018</span>
        </div>
    </div>
    <div class="blog-content">
        <h3>A close look at our new added courses</h3>
        <div class="blog-meta">
            <a href=""><span>By</span> Admin</a>|
            <a href=""><span>in</span> School</a>|
            <a href="">3 Comments</a>
        </div>
        <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et
            auctor lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est
            urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut
            erat dapibus, tempor sapien non,.</p>
        <div class="blog-tag">
            <a href="#">school</a>
            <a href="#">course</a>
            <a href="#">education</a>
        </div>
    </div>
</div> --}}









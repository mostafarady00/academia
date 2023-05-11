@extends('layouts.index')

@section('Title')
Courses
@endsection
@section('content')
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h3>Our Coureses</h3>
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

	<!-- Courses section  -->
	<section class="courses-section spad">
		<div class="container">
			<div class="sec-title text-center">
				<span>Only  the best</span>
				<h2>Our Courses</h2>
			</div>

			<div class="row courses-page">
				<!-- course -->
				<div class="col-lg-4 col-md-6">
					<div class="course-item">
						<figure class="course-preview">
                            @foreach ($courses as $course )
							<img src="/uploads/courses/{{ $course->img_course }}" width="150" alt="">
							<div class="price">{{ $course->price }}</div>
						</figure>
						<div class="course-content">
							<div class="cc-text">
								<h5>{{ $course->title }}</h5>
								<p> {{ $course->description }}</p>

								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star i-fade"></i>
								</div>
							</div>
                            @endforeach

                         @foreach ( $instructors as $instructor )
							<div class="seller-info">
								 <div class="seller-pic set-bg" data-setbg="/uploads/instructor/{{ $instructor->instruct_img }}" width="70" height="65"></div>
								<h6>{{ $instructor->instreuct_nam }}, <span>{{ $instructor->instruct_subject }}</span></h6>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</div>



			<div class="text-center pt-2">
				<button class="site-btn">Load More <i class="fa fa-angle-right"></i></button>
			</div>
		</div>

	</section>
	<!-- Courses section end -->
@endsection


	{{-- <span><i class="flaticon-student-2"></i>20</span>
								<span><i class="flaticon-placeholder"></i>3</span> --}}













{{-- <div class="col-lg-12">
    <div class="course-item featured">
        <div class="course-preview set-bg" data-setbg="img/courses/7.jpg">
            <div class="price">$25</div>
            <div class="featur-badges">Featured</div>
        </div>
        <div class="course-content">
            <div class="cc-text">
                <h5>Italian for Begginers & Advanced Course</h5>
                <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris. In molestie quis risus commodo gravida. </p>
                <span><i class="flaticon-student-2"></i>20</span>
                <span><i class="flaticon-placeholder"></i>3</span>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star i-fade"></i>
                </div>
            </div>
            <div class="seller-info">
                <div class="seller-pic set-bg" data-setbg="img/courses/sellers/1.jpg"></div>
                <h6>By Sebastian Smith, <span>Italian Teacher</span></h6>
            </div>
        </div>
    </div>
</div> --}}






{{-- <!-- course -->
				<div class="col-lg-4 col-md-6">
					<div class="course-item">
						<figure class="course-preview">
							<img src="img/courses/1.jpg" alt="">
							<div class="price">$25</div>
						</figure>
						<div class="course-content">
							<div class="cc-text">
								<h5>Italian for Begginers & Advanced Course</h5>
								<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
								<span><i class="flaticon-student-2"></i>20</span>
								<span><i class="flaticon-placeholder"></i>3</span>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star i-fade"></i>
								</div>
							</div>
							<div class="seller-info">
								<div class="seller-pic set-bg" data-setbg="img/courses/sellers/1.jpg"></div>
								<h6>By Sebastian Smith, <span>Italian Teacher</span></h6>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="col-lg-4 col-md-6">
					<div class="course-item">
						<figure class="course-preview">
							<img src="img/courses/2.jpg" alt="">
							<div class="price">$25</div>
						</figure>
						<div class="course-content">
							<div class="cc-text">
								<h5>English Literature Advanced Course</h5>
								<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
								<span><i class="flaticon-student-2"></i>20</span>
								<span><i class="flaticon-placeholder"></i>3</span>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star i-fade"></i>
								</div>
							</div>
							<div class="seller-info">
								<div class="seller-pic set-bg" data-setbg="img/courses/sellers/2.jpg"></div>
								<h6>By Maria Williams, <span>English Teacher</span></h6>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="col-lg-4 col-md-6">
					<div class="course-item">
						<figure class="course-preview">
							<img src="img/courses/3.jpg" alt="">
							<div class="price">$25</div>
						</figure>
						<div class="course-content">
							<div class="cc-text">
								<h5>Portrait Photography Course for Begginers</h5>
								<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
								<span><i class="flaticon-student-2"></i>20</span>
								<span><i class="flaticon-placeholder"></i>3</span>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star i-fade"></i>
								</div>
							</div>
							<div class="seller-info">
								<div class="seller-pic set-bg" data-setbg="img/courses/sellers/3.jpg"></div>
								<h6>By Jack Smith, <span>Photographer</span></h6>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="col-lg-4 col-md-6">
					<div class="course-item">
						<figure class="course-preview">
							<img src="img/courses/4.jpg" alt="">
							<div class="price">$25</div>
						</figure>
						<div class="course-content">
							<div class="cc-text">
								<h5>Italian for Begginers & Advanced Course</h5>
								<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
								<span><i class="flaticon-student-2"></i>20</span>
								<span><i class="flaticon-placeholder"></i>3</span>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star i-fade"></i>
								</div>
							</div>
							<div class="seller-info">
								<div class="seller-pic set-bg" data-setbg="img/courses/sellers/1.jpg"></div>
								<h6>By Sebastian Smith, <span>Italian Teacher</span></h6>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="col-lg-4 col-md-6">
					<div class="course-item">
						<figure class="course-preview">
							<img src="img/courses/5.jpg" alt="">
							<div class="price">$25</div>
						</figure>
						<div class="course-content">
							<div class="cc-text">
								<h5>English Literature Advanced Course</h5>
								<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
								<span><i class="flaticon-student-2"></i>20</span>
								<span><i class="flaticon-placeholder"></i>3</span>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star i-fade"></i>
								</div>
							</div>
							<div class="seller-info">
								<div class="seller-pic set-bg" data-setbg="img/courses/sellers/2.jpg"></div>
								<h6>By Maria Williams, <span>English Teacher</span></h6>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="col-lg-4 col-md-6">
					<div class="course-item">
						<figure class="course-preview">
							<img src="img/courses/6.jpg" alt="">
							<div class="price">$25</div>
						</figure>
						<div class="course-content">
							<div class="cc-text">
								<h5>Portrait Photography Course for Begginers</h5>
								<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
								<span><i class="flaticon-student-2"></i>20</span>
								<span><i class="flaticon-placeholder"></i>3</span>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star i-fade"></i>
								</div>
							</div>
							<div class="seller-info">
								<div class="seller-pic set-bg" data-setbg="img/courses/sellers/3.jpg"></div>
								<h6>By Jack Smith, <span>Photographer</span></h6>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="col-lg-12">
					<div class="course-item featured-2">
						<div class="row">
							<div class="col-lg-4 p-0">
								<div class="course-preview set-bg" data-setbg="img/courses/8.jpg">
									<div class="price">$25</div>
								</div>
							</div>
							<div class="col-lg-8 p-0">
								<div class="course-content">
									<div class="cc-text">
										<h5>HTML5  for Begginers & Advanced Course</h5>
										<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, </p>
										<span><i class="flaticon-student-2"></i>20</span>
										<span><i class="flaticon-placeholder"></i>3</span>
										<div class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star i-fade"></i>
										</div>
									</div>
									<div class="seller-info">
										<div class="seller-pic set-bg" data-setbg="img/courses/sellers/3.jpg"></div>
										<h6>By Jack Smith, <span>Photographer</span></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}

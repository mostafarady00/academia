@extends('layouts.index')

@section('Title')
Contact
@endsection
@section('content')





	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h3>Contact Us</h3>
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


	<!-- Contact section -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 contact-text">
					<h3>Stay in touch</h3>
					<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend.</p>
					<ul class="contact-info">
						<li><span>Address:</span>1481 Creekside Lane Avila Beach, CA 931</li>
						<li><span>Phone:</span>+53 345 7953 32453</li>
						<li><span>Email:</span>yourmail@gmail.com</li>
					</ul>
				</div>
				<div class="col-lg-8">
					<form class="contact-form">
						<div class="row">
							<div class="col-md-12">
								<input type="text" placeholder="Your Name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Your E-mail">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Subject">
							</div>
							<div class="col-md-12">
								<textarea placeholder="Message"></textarea>
								<button class="site-btn">Send <i class="fa fa-angle-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->

	<!-- map -->
	<div class="location-map" id="map-canvas"></div>
@endsection

@include('frontend.links')
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
<header>
@include('frontend.navbar')
</header>

@yield('content')


@include('frontend.footer')


@include('frontend.scripts')



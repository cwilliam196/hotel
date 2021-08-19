@extends('layout.headerOverview')

@section('title', 'Home')
    
@section('container')
    

	
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(assets/images/adriana-saraceanu-_ixNdO62FSg-unsplash.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>XZY Hotel</span></p>
		   						<h2>Reserve Room for Family Vacation</h2>
			   					<p>
			   						<a href="{{ url('/login')}}" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(assets/images/toa-heftiba-bcLE7reXFLM-unsplash.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>XZY Hotel</span></p>
		   						<h2>Make Your Vacation Comfortable</h2>
			   					<p>
			   						<a href="{{ url('/login')}}" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(assets/images/nik-lanus-YMOHw3F1Hdk-unsplash.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>XZY Hotel</span></p>
		   						<h2>A Best Place To Enjoy Your Life</h2>
			   					<p>
			   						<a href="{{ url('/login')}}" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>
	<div class="wrap">
		<div class="container">
			<div class="row">
				<div id="availability">
					
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-counter-section" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">User Access</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Hotels</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Transactions</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Rating &amp; Review</span>
				</div>
			</div>
		</div>
	</div>

	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Featured Hotels</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(assets/images/olexandr-ignatov-w72a24brINI-unsplash.jpg);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>$100/night</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Room</h3>
						<p>Menarik, modern, dan nyaman, dengan tempat tidur empuk dan kamar mandi fungsional. Dan memiliki semua yang Anda perlukan untuk masa menginap yang menyenangkan.</p>
						
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(assets/images/fabrizio-magoni-boaDpmC-_Xo-unsplash.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$99/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>Dinner</h3>
							<p>Pilihan tepat untuk merasa puas. Prasmanan nikmat yang menyajikan masakan tradisional. Benar-benar lezat.</p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(assets/images/alan-caishan-cU53ZFBr3lk-unsplash.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$99/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>Spa</h3>
							<p>Dengan fasilitas spa yang sangat nyaman bembuat anda merasakan relax.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="hotel-facilities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Hotel Facilities</h2>
					</div>
				</div>
			</div>

			<div id="tabs">
				<nav class="tabs-nav">
					<a href="#" class="active" data-tab="tab1">
						<i class="flaticon-restaurant icon"></i>
						<span>Restaurant</span>
					</a>
					<a href="#" data-tab="tab2">
						<i class="flaticon-cup icon"></i>
						<span>Bar</span>
					</a>
					<a href="#" data-tab="tab3">
					
						<i class="flaticon-car icon"></i>
						<span>Pick-up</span>
					</a>
					<a href="#" data-tab="tab4">
						
						<i class="flaticon-swimming icon"></i>
						<span>Swimming Pool</span>
					</a>
					<a href="#" data-tab="tab5">
						
						<i class="flaticon-massage icon"></i>
						<span>Spa</span>
					</a>
					<a href="#" data-tab="tab6">
						
						<i class="flaticon-bicycle icon"></i>
						<span>Gym</span>
					</a>
				</nav>
				<div class="tab-content-container">
					<div class="tab-content active show" data-tab-content="tab1">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/Restaurant.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Restaurant</h3>
									<p>Dibuat oleh chief profesional sehingga anda dapat menikmati setiap kelezatan tiap-tiap makanan dari Breakfast hingga Dinner. Selain itu menu-menu yang kita sediakan berbeda-beda tiap season.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>6:00 AM - 12:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab2">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/Bars.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Bars</h3>
									<p>Tidak lengkap rasanya jika tidak adanya bar yang akan menemani anda dalam mengisi waktu liburan anda. Kami memiliki berbagai macam jenis minuman mulai dari softdrink, wine, rum, beer hingga whisky </p>
									
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>12:00 AM - 12:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab3">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/Lobby.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Pick Up</h3>
									<p>Anda bingung jika baru sampai dijakarta atau anda bingung dari tempat kuliner menuju Hotel XYZ? Maka dengan itu kami memiliki fasilitas Pick Up pribadi yang memungkinkan anda tidak perlu cemas jika anda tersesat untuk kembali ke Hotel XYZ.</p>
									
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>6:00 AM - 12:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab4">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/Pool2.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Swimming Pool</h3>
									<p>Tentunya fasilitas ini sayang untuk dilewatkan... yaitu Swimming Pool, fasilitas ini sangat bermanfaat bagi anda yang sudah berkeluarga dan mempunyai anak bisa ajak anak anda untuk mencoba berenang dan menikmati liburan anda.  </p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>7:30 AM - 12:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab5">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/Spa2.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Spa</h3>
									<p>Sangat cocok untuk anda yang lelah dengan keseharian anda, kami memiliki fasilitas spa yang sangat nyaman sehingga anda dapat beristirahat sejenak dari kehidupan yang sangat sulit ini.</p>
									
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>6:00 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab6">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/Gym.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Gym</h3>
									<p>Bila anda terlalu banyak makanan enak yang kami sajikan dan takut berat badan anda naik maka dengan itu kami memiliki fasilitas GYM yang dapat membantu anda untuk menjaga berat badan anda. Selain itu dapat juga untuk membuat anda selalu sehat selalu</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>6:00 AM - 10:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Happy Customer Says...</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
						</blockquote>
						<p class="author"><cite>John Doe</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and attentive. Highly Recommended&rdquo;
						</blockquote>
						<p class="author"><cite>Rob Smith</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
						</blockquote>
						<p class="author"><cite>Jane Doe</cite></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-blog-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(assets/images/Award.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Most Comfortable Hotel</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(assets/images/Anniversary.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">1st Anniversary of XYZ Hotel</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(assets/images/Discovery.jpg);">
						<div class="date text-center">
							<span>09</span>
							<small>Aug</small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">Discover New Adventure</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
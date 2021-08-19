@extends('layout.headerOverview')

@section('title', 'Services')
    
@section('container')


	<div class="fh5co-parallax" style="background-image: url(assets/images/adriana-saraceanu-_ixNdO62FSg-unsplash.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">We Offer Services</h1>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-location-pin"></i></span>
						<div class="desc">
							<h3>Accessible Location</h3>
							<p>Terletak dimargonda depok, 2 KM menuju mall MargoCity dan Depok Town Square, 1 KM menuju transportasi kereta dan tempat makan sekitar.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-alarm-clock"></i></span>
						<div class="desc">
							<h3>Open 24/7</h3>
							<p>Akomodasi menyediakan resepsionis 24 jam.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-calendar"></i></span>
						<div class="desc">
							<h3>Reservation</h3>
							<p>Pemesanan dapat dilakukan melalui online maupun offline dan dapat melihat ketersediaan kamar.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-user"></i></span>
						<div class="desc">
							<h3>Friendly Staff</h3>
							<p>Tentunya kita memperhatikan keramahan staf-staf kami sehingga dapat membantu dan membuat anda meraya nyaman untuk menginap di Hotel XYZ.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-signal"></i></span>
						<div class="desc">
							<h3>Free Wifi</h3>
							<p>Dihotel XYZ kami menyediakan Free Wifi yang dapat anda akses selama menginap dengan kecepatan internet 1GBps.</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

@endsection
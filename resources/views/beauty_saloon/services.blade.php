@include('beauty_saloon.header');

    <div class="hero-wrap js-fullheight" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<div class="icon">
          		<a href="{{asset('beauty_saloon/index')}}" class="logo">
          			<span class="flaticon-flower"></span>
          			<h1>Pretty</h1>
          		</a>
          	</div>
            <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Services</h1>
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{asset('beauty_saloon/index')}}">Home</a></span> <span>Services</span></p>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{asset('beauty_saloon/index')}}">Pretty</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

            @include('beauty_saloon/menu');

        </div>
	  </nav>
    <!-- END nav -->

		<section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex mb-3"><span class="flaticon-facial-treatment"></span></div>
              <div class="media-body">
                <h3 class="heading">Skin &amp; Beauty Care</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex mb-3"><span class="flaticon-cosmetics"></span></div>
              <div class="media-body">
                <h3 class="heading">Makeup Pro</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex mb-3"><span class="flaticon-curl"></span></div>
              <div class="media-body">
                <h3 class="heading">Hair Style</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section ftco-discount img" style="background-image: url({{asset('images/bg_2.jpg')}});">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-5 discount ftco-animate">
						<h3>Save up to 25% Off</h3>
						<h2 class="mb-4">Student Discount</h2>
						<p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<p><a href="#" class="btn btn-white btn-outline-white px-4 py-3">Book Now</a></p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('images/bg_4.jpg')}});">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-flower"></span></div>
		              	<span>Makeup Over Done</span>
		                <strong class="number" data-number="3500">0</strong>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-flower"></span></div>
		              	<span>Procedure</span>
		                <strong class="number" data-number="1000">0</strong>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-flower"></span></div>
		              	<span>Happy Client</span>
		                <strong class="number" data-number="3000">0</strong>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-flower"></span></div>
		              	<span>Skin Treatment</span>
		                <strong class="number" data-number="900">0</strong>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

@include('beauty_saloon.footer');

@include('beauty_saloon.header');

    <div class="hero-wrap js-fullheight" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<div class="icon">
          		<a href="{{route('beauty_saloon/index')}}" class="logo">
          			<span class="flaticon-flower"></span>
          			<h1>Pretty</h1>
          		</a>
          	</div>
            <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Work</h1>
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('beauty_saloon/index')}}">Home</a></span> <span>Work</span></p>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('beauty_saloon/index')}}">Pretty</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

            @include('beauty_saloon/menu');

        </div>
	  </nav>
    <!-- END nav -->

		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Work</h2>
            <p class="work-category">
            	<span class="px-2"><a href="#" class="active">All</a></span>
            	<span class="px-2"><a href="#">Make Up</a></span>
            	<span class="px-2"><a href="#">Massage</a></span>
            	<span class="px-2"><a href="#">Facial</a></span>
            	<span class="px-2"><a href="#">Spa</a></span>
            	<span class="px-2"><a href="#">Hair</a></span>
            	<span class="px-2"><a href="#">Nail</a></span>
            </p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="{{asset('images/work-1.jpg')}}" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Lips Makeover</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="{{asset('images/work-2.jpg')}}" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Hair Style</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="{{asset('images/work-3.jpg')}}" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Makeup</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="{{asset('images/work-4.jpg')}}" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Lips Makeover</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="{{asset('images/work-5.jpg')}}" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Hair Style</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="{{asset('images/work-6.jpg')}}" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Makeup</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="{{asset('images/work-7.jpg')}}" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Lips Makeover</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="{{asset('images/work-8.jpg')}}" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Hair Style</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="#" class="work-entry">
        			<img src="{{asset('images/work-9.jpg')}}" class="img-fluid" alt="Colorlib Template">
        			<div class="info d-flex align-items-center">
        				<div>
        					<div class="icon mb-4 d-flex align-items-center justify-content-center">
        						<span class="icon-search"></span>
        					</div>
		        			<h3>Makeup</h3>
	        			</div>
        			</div>
        		</a>
        	</div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

@include('beauty_saloon.footer');

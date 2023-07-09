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
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Stylist</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('beauty_saloon/index')}}">Home</a></span> <span>Stylist</span></p>
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
        <div class="row d-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-about align-self-stretch" style="background-image: url({{asset('images/person_1.jpg')}}); width: 100%; height: 500px; border-radius: 100%"></div>
            </div>
            <div class="col-md-6 pl-md-5 ftco-animate m-auto">
                <h4><span class="position">Stylist</span></h4>
                <h2 class="mb-4">MELLISA SMITH</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4">Education</h2>
                <p>
                    Diploma YAGMA
                </p>
                <p>
                    Qualification - a doctor in the specialty "General Medicine-Residency"
                </p>
                <p>
                    Internship "Dermatovenereology"
                </p>
                <p>
                    YaGMA certificate in the specialty "Dermatovenereology",
                </p>
                <p>
                    Diploma of professional retraining of RUDN University under the program "Cosmetology",
                </p>
                <p>
                    Specialist certificate in the specialty "Cosmetology",
                </p>
                     Periodic accreditation of a specialist in the specialty "Cosmetology",
                </p>
                <p>
                    Professional standard "Cosmetologist".
                </p>
                <p>Specialist in chemical peels, hardware cosmetology, mesotherapy, botulinum toxin type A (Dysport preparation), contouring, laser rejuvenation, peeling, laser hair removal and laser depigmentation, photorejuvenation and photoepilation, Aqualex®, NEOLINE mesothreads.</p>
            </div>
        </div>
        <div class="row mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4">Сertificate</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <a href="{{asset('images/certificat_1.jpg')}}" class="work-entry">
                    <img src="{{asset('images/certificat_1.jpg')}}" class="img-fluid" alt="Colorlib Template">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{asset('images/certificat_2.jpg')}}" class="work-entry">
                    <img src="{{asset('images/certificat_2.jpg')}}" class="img-fluid" alt="Colorlib Template">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{asset('images/certificat_3.jpg')}}" class="work-entry">
                    <img src="{{asset('images/certificat_3.jpg')}}" class="img-fluid" alt="Colorlib Template">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{asset('images/certificat_4.jpg')}}" class="work-entry">
                    <img src="{{asset('images/certificat_4.jpg')}}" class="img-fluid" alt="Colorlib Template">
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="{{asset('images/certificat_5.jpg')}}" class="work-entry">
                    <img src="{{asset('images/certificat_5.jpg')}}" class="img-fluid" alt="Colorlib Template">
                </a>
            </div>
            </div>
        </div>
    </div>
</section>

@include('beauty_saloon.footer');

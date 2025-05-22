@extends('frontend.layout.main')
@push('title')
    <title>About Us</title>
@endpush
@push('meta')
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">    
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
@endpush

@section('main')
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{asset('frontend/assets/img/bg/breadcrumb-bg.png')}}">
        <!-- bg animated image/ -->   
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">About Us</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

    <!--==============================
    About Area  
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="row flex-row-reverse align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="about-thumb mb-5 mb-lg-0 text-lg-end text-center fade_left">  
                        <img class="about-img-1" src="{{asset('frontend/assets/img/normal/about_4-1.png')}}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-wrap title-anim text-center">
                        <div class="title-area mb-0">
                            <span class="sub-title style2">More About Us</span>
                            <h2 class="sec-title">The Jogi Films Photography</h2>
                            <p class="sec-text">At <b>Jogi Films Photography</b>, we believe every moment tells a story. Founded by <b>Arun Chouhan</b>, our passion for capturing life’s most beautiful memories has made us a trusted name in photography and cinematography.</p>
                            <p>From <b>weddings</b> and <b>pre-wedding shoots</b> to <b>product photography</b> and <b>bridal</b> & <b>groom portraits</b>, we specialize in creating timeless visuals that reflect emotion, elegance, and creativity. With a keen eye for detail and a commitment to excellence, we transform your moments into lasting memories.</p>
                        </div>
                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Counter Area  
    ==============================-->
    <div class="counter-area-2">
        <div class="counter-wrap1 space-bottom counter-item">
            <div class="container">
                <div class="row gy-40 justify-content-lg-between justify-content-center">
                    <div class="col-sm-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="media-body">
                                <h3 class="counter-card_number">
                                    <span class="odometer" data-odometer-final="256">.</span>
                                </h3>
                                <p class="counter-card_text">Weddings per year</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="media-body">
                                <h3 class="counter-card_number">
                                    <span class="odometer" data-odometer-final="28">.</span>
                                </h3>
                                <p class="counter-card_text">Years of celebration</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="media-body">
                                <h3 class="counter-card_number">
                                    <span class="odometer" data-odometer-final="1369">.</span>
                                </h3>
                                <p class="counter-card_text">Flower bouquest</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-auto">
                        <div class="counter-card">
                            <div class="media-body">
                                <h3 class="counter-card_number">
                                    <span class="odometer" data-odometer-final="256">.</span>
                                </h3>
                                <p class="counter-card_text">Sunny days per year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

   

   
    @endsection
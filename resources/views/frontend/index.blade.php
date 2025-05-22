@extends('frontend.layout.main')
@push('title')
    <title>Home</title>
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
            Hero Area
            ==============================-->
    <div class="hero-wrapper hero-1" id="hero">
        <div class="global-carousel" id="heroSlider1" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="false">
            <div class="hero-slider" data-bg-src="{{asset('frontend/assets/img/hero/hero_bg_1_1.png')}}">
                <div class="hero-shape1_1 shape-mockup movingX" data-bottom="0" data-left="0">
                    <img src="{{asset('frontend/assets/img/hero/hero_shape_1_1.png')}}" alt="img">
                </div>
                <div class="hero-shape1_2 shape-mockup movingX" data-top="-25%" data-right="35%">
                    <img src="{{asset('frontend/assets/img/hero/hero_shape_1_2.png')}}" alt="img">
                </div>
                <div class="container">
                    <div class="row flex-row-reverse">

                        <div class="col-lg-6 col-md-12">
                            <div class="hero-style1">
                                <h1 class="hero-title mb-3" data-ani="slideindown" data-ani-delay="0.1s"><b>Welcome to The
                                        Jogi Films</b></h1>
                                <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.5s">Capturing Moments,
                                    Creating Stories</span>
                                <span class="hero-subtitle2" data-ani="slideindown" data-ani-delay="0.4s">Welcome to Jogi
                                    Films Photography, where every frame tells a story. We specialize in turning fleeting
                                    moments into timeless memories through our lens. Let us bring your vision to life with
                                    creativity, passion, and perfection.</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.4s">
                                    <a href="{{ route('contact') }}" class="btn style2">CONTACT </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-end">
                            <div class="hero-thumb1" data-ani="slideinleft" data-ani-delay="0.1s">
                                <img src="{{asset('frontend/assets/img/hero/hero_1_1.png')}}" alt="img">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="hero-slider" data-bg-src="{{asset('frontend/assets/img/hero/hero_bg_1_1.png')}}">
                <div class="hero-shape1_1 shape-mockup movingX" data-bottom="0" data-left="0">
                    <img src="{{asset('frontend/assets/img/hero/hero_shape_1_1.png')}}" alt="img">
                </div>
                <div class="hero-shape1_2 shape-mockup movingX" data-top="-25%" data-right="35%">
                    <img src="{{asset('frontend/assets/img/hero/hero_shape_1_2.png')}}" alt="img">
                </div>
                <div class="container">
                    <div class="row flex-row-reverse">

                        <div class="col-lg-6 col-md-12">
                            <div class="hero-style1">
                                <h1 class="hero-title mb-3" data-ani="slideindown" data-ani-delay="0.1s"><b>Experience the
                                        Art of Visual Storytelling</b></h1>
                                <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.5s">Beyond Photography,
                                    It’s an Emotion</span>
                                <span class="hero-subtitle2" data-ani="slideindown" data-ani-delay="0.4s">At Jogi Films, we
                                    don’t just take pictures—we craft experiences. Whether it’s a wedding, a cinematic
                                    shoot, or a breathtaking portrait, our expertise ensures that every shot is
                                    picture-perfect. Let's create something extraordinary together!</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.4s">
                                    <a href="{{ route('contact') }}" class="btn style2">CONTACT </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-end">
                            <div class="hero-thumb1" data-ani="slideinleft" data-ani-delay="0.1s">
                                <img src="{{asset('frontend/assets/img/hero/hero_1_2.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
        About Area
        ==============================-->
    <div class="space">
        <div class="container">
            <div class="row flex-row-reverse align-items-center justify-content-between">
                <div class="col-lg-7 ">
                    <div class="about-thumb mb-5 mb-lg-0 text-lg-end fade_left">
                        <img class="about-img-1" src="{{asset('frontend/assets/img/normal/about_1-1.jpg')}}" alt="shivam" title="shivam weds swati">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content-wrap title-anim">
                        <div class="title-area mb-0">
                            <span class="sub-title">About Us</span>
                            <h2 class="sec-title">About <br>Us</h2>
                            <p class="sec-text mb-2">At Jogi Films Photography, we are passionate about capturing life’s
                                most precious moments with creativity and precision. Our expert team specializes in
                                high-quality photography and cinematography, ensuring every frame reflects emotion, beauty,
                                and storytelling.

                            </p>
                            <h4 class="sec-title mb-0">Our Expertise:
                            </h4>
                            <ul>
                                <li><b>Wedding Photography</b> – Capturing the magic of your big day with elegance and
                                    authenticity.</li>
                                <li> <b>Pre-Wedding Shoots</b> – Creating romantic and cinematic moments that tell your love
                                    story.</li>
                                <li> <b>Product Photography</b> – Showcasing your products with stunning visuals that stand
                                    out.</li>
                                <li><b>Bridal Photography</b> – Highlighting the grace, beauty, and emotions of the bride.
                                </li>
                                <li><b>Groom Photography</b> – Bringing out the confidence and charm of the groom.</li>
                            </ul>
                            <p>With Jogi Films, every shot is a masterpiece. Let us tell your story through our lens and
                                turn your moments into timeless memories.</p>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="{{ route('about') }}" class="btn">ABOUT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!--==============================
            video Area
        ==============================-->
        <div class="wedding-video-section space overflow-hidden pt-0">
            <div class="portfolio-shape1_1 shape-mockup jump d-lg-block d-none" data-top="0%" data-right="-10%">
                {{-- <img src="{{asset('frontend/assets/img/normal/portfolio-shape_1-1.png')}}" alt="img"> --}}
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="title-area title-anim">
                            <span class="sub-title style2">THERE IS SOMETHING FOR EVERYONE</span>
                            <h2 class="sec-title">OUR WEDDING VIDEO</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-30">
                    @php
                        $category = $allcategory->where('slug', 'wedding-films');
                        $weddingfilm = $weddingfilms->where('status', 1)->take(4);
                    @endphp
                    @foreach ($weddingfilm as $item)
                        
                            <div class="col-lg-6 filter-item wedding-films title-anim">
                                <div class="">
                                    <iframe width="560" height="315" src="{{$item->video_url}}" title="{{$item->video_title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                                </div>
                                <div class="films-wedding">
                                    <h4>{{$item->video_title}}</h4>
                                    <p>{{$item->discreption}}</p>
                                </div>
                            </div>
                        
                    @endforeach
                </div>
                <div class="row pt-5 text-center justify-content-center">
                    <div class="col-md-3">
                        @foreach ($category as $item)
                            <a href="{{ $item->slug }}" class="btn style2" tabindex="0">MORE WEDDING VIDEO</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    
        <!--==============================
            video Area
            ==============================-->

    <!--==============================
            WEDDING Area
        ==============================-->
    <div class="portfolio-area-1 space overflow-hidden" data-bg-src="{{asset('frontend/assets/img/bg/portfolio-1-bg.png')}}">
        <div class="portfolio-shape1_1 shape-mockup jump d-lg-block d-none" data-top="0%" data-right="-10%">
            <img src="{{asset('frontend/assets/img/normal/portfolio-shape_1-1.png')}}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="title-area title-anim">
                        <span class="sub-title style2">THERE IS SOMETHING FOR EVERYONE</span>
                        <h2 class="sec-title">OUR WEDDING PICS</h2>
                    </div>
                </div>
            </div>
            
                @php
                    $category = $allcategory->where('slug', 'wedding-pics');
                    $wedding = $weddingwork->where('category', 'Wedding Pics')->where('status', 1)->take(12);
                    $weddingsection = 'Wedding Pics';
                @endphp
                <x-wedding-work-com :categorys="$category" :wedding="$wedding" :weddings="$weddingsection"/>
            
            <div class="row pt-5 text-center justify-content-center">
                <div class="col-md-3">
                    @foreach ($category as $item)
                        <a href="{{ $item->slug }}" class="btn style2" tabindex="0">MORE WEDDING PICS</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!--==============================
        WEDDING Area
        ==============================-->
    <!--==============================
           PRE WEDDING Area
        ==============================-->
    <div class="portfolio-area-1 space overflow-hidden">
        <div class="portfolio-shape1_1 shape-mockup jump d-lg-block d-none" data-top="0%" data-left="-5%">
            <img src="{{asset('frontend/assets/img/normal/portfolio-shape_1-1.png')}}" style=" width: 70%; transform: rotate(232deg);"
                alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="title-area title-anim">
                        <span class="sub-title style2">THERE IS SOMETHING FOR EVERYONE</span>
                        <h2 class="sec-title"> OUR PRE WEDDING SHOOTS</h2>
                    </div>
                </div>
            </div>
            

                @php
                    $category = $allcategory->where('slug', 'pre-wedding');
                    $wedding = $weddingwork->where('category', 'Pre Wedding')->where('status', 1)->take(12);
                    $weddingsection = 'Pre Wedding';
                @endphp
                <x-wedding-work-com :categorys="$category" :wedding="$wedding" :weddings="$weddingsection"/>
          
            <div class="row pt-5 text-center justify-content-center">
                <div class="col-md-3">
                    @foreach ($category as $item)
                        <a href="{{ $item->slug }}" class="btn style2" tabindex="0">MORE PRE WEDDING SHOOTS</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--==============================
        PRE PEDDING Area
        ==============================-->

    <!--==============================
            kisd Area
        ==============================-->
    <div class="portfolio-area-1 space overflow-hidden" data-bg-src="{{asset('frontend/assets/img/bg/portfolio-1-bg.png')}}">
        <div class="portfolio-shape1_1 shape-mockup jump d-lg-block d-none" data-top="0%" data-right="-10%">
            <img src="{{asset('frontend/assets/img/normal/portfolio-shape_1-1.png')}}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="title-area title-anim">
                        <span class="sub-title style2">THERE IS SOMETHING FOR EVERYONE</span>
                        <h2 class="sec-title">OUR KIDS SHOOTS</h2>
                    </div>
                </div>
            </div>
            
                @php
                    $category = $allcategory->where('slug', 'kids');
                    $wedding = $weddingwork->where('category', 'Kids')->where('status', 1)->take(12);
                    $weddingsection = 'Kids';
                @endphp
                <x-wedding-work-com :categorys="$category" :wedding="$wedding" :weddings="$weddingsection"/>

            
            <div class="row pt-5 text-center justify-content-center">
                <div class="col-md-3">
                    @foreach ($category as $item)
                        <a href="{{ $item->slug }}" class="btn style2" tabindex="0">MORE KIDS SHOOTS</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
        <!--==============================
        kids Area
        ==============================-->

        <!--==============================
           product Area
        ==============================-->
        <div class="portfolio-area-1 space overflow-hidden">
            <div class="portfolio-shape1_1 shape-mockup jump d-lg-block d-none" data-top="0%" data-left="-5%">
                <img src="{{asset('frontend/assets/img/normal/portfolio-shape_1-1.png')}}"
                    style=" width: 70%; transform: rotate(232deg);" alt="img">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="title-area title-anim">
                            <span class="sub-title style2">THERE IS SOMETHING FOR EVERYONE</span>
                            <h2 class="sec-title"> OUR PRODUCT SHOOTS</h2>
                        </div>
                    </div>
                </div>
               

                @php
                    $category = $allcategory->where('slug', 'products');
                    $wedding = $weddingwork->where('category', 'Products')->where('status', 1)->take(12);
                    $weddingsection = 'Products';
                @endphp
                <x-wedding-work-com :categorys="$category" :wedding="$wedding" :weddings="$weddingsection"/>
            
            <div class="row pt-5 text-center justify-content-center">
                <div class="col-md-3">
                    @foreach ($category as $item)
                        <a href="{{ $item->slug }}" class="btn style2" tabindex="0">MORE PRODUCT SHOOTS</a>
                    @endforeach
                </div>
            </div>
            </div>
        </div>

        <!--==============================
        Product Area
        ==============================-->



        <!--==============================
        Testimonial Area
        ==============================-->
        <div class="testimonial-area-1 space-top overflow-hidden mb-5 pt-4">
            <div class="container">
                <div class="title-area title-anim">
                    <span class="sub-title style2">Feedbacks</span>
                    <h2 class="sec-title">Our Testimonials</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel testi-slider1" data-slide-show="3" data-lg-slide-show="2"
                    data-md-slide-show="2">
                    @foreach ($testimonial as $item)
                    <div class="col-lg-4">
                        <div class="testi-box title-anim" data-bg-src="{{asset('frontend/assets/img/testimonial/testi_box-bg.png')}}">
                            <div class="testi-box_thumb">
                                <img src="{{asset($item->testimonial_image)}}" alt="{{$item->testimonial_title}}">
                            </div>
                            <div class="testi-box_profile">
                                <h4 class="testi-box_name">{{$item->testimonial_title}}</h4>
                            </div>
                            <p class="testi-box_text">{{$item->discreption}}</p>
                        </div>
                    </div>
                    @endforeach
                    
       
                </div>
            </div>
        </div>
    @endsection

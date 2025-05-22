@extends('frontend.layout.main')
@push('title')
    <title>Contact</title>
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
                        <h1 class="breadcumb-title">Contact Us</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

    <!--==============================
        Contact Area  
    ==============================-->
    <div class="contact-area space" data-bg-src="{{asset('frontend/assets/img/bg/contact-page-bg.png')}}">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <img src="{{asset('frontend/assets/img/icon/location-icon.svg')}}" alt="icon">
                        </div>
                        <div class="contact-details">
                            <h4 class="title">Office Address</h4>
                            {{$globalSetting->address}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <img src="{{asset('frontend/assets/img/icon/envelope.svg')}}" alt="icon">
                        </div>
                        <div class="contact-details">
                            <h4 class="title">Email Address</h4>
                            <span>24/7 Anytime</span>
                            <p>{{$globalSetting->email}}</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <img src="{{asset('frontend/assets/img/icon/phone.svg')}}" alt="icon">
                        </div>
                        <div class="contact-details">
                            <h4 class="title">Phone Number</h4>
                            <span>24/7 Anytime</span>
                            <p>+91 {{$globalSetting->phone}},</p>
                            <p>+91 {{$globalSetting->office}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Reservation Area  
    ==============================-->
    <div class="space" >
        <div class="container">
            <div class="contact-page-wrap">
                <div class="row gx-0 justify-content-center flex-row-reverse">
                    <div class="col-xl-12">
                        <div class="map-sec">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4252.408880475448!2d77.54867977617295!3d29.98155812154654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390eea7d43d0221f%3A0x313bb15a0a3c7da4!2sShri%20Bhuteshwar%20Mahadev%20Temple!5e1!3m2!1sen!2sin!4v1742880819808!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

   
    @endsection
<style>
    .contact-info-list li a {
        color: #86867f;
    }
    .contact-info-list li a:hover {
        color: #fbbf60;
    }
</style>
<footer class="footer-wrapper footer-layout1 overflow-hidden" data-bg-src="{{asset('frontend/assets/img/bg/footer-1-bg.png')}}">    
    <div class="shape-mockup footer1-shape1 jump" data-top="20%" data-left="-2%">
        <img src="{{asset('frontend/assets/img/normal/footer-1-shape1.png')}}" alt="img">
    </div>
    <div class="shape-mockup footer1-shape2 jump-reverse" data-top="-10%" data-right="-10%">
        <img src="{{asset('frontend/assets/img/normal/footer-1-shape2.png')}}" alt="img">
    </div>
    <div class="container">
        <div class="widget-area">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-3">
                    <div class="widget footer-widget">
                      
                        <div class="footer-logo mb-40 mb-md-5">
                            <a href="{{url('/')}}"><img src="{{asset($globalSetting->logo)}}" style="    width: 140px;" alt="the jogi films"></a>
                        </div>
                        <div class="social-btn style2">
                            <a href="{{$globalSetting->facebook}}" target="_blanck"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$globalSetting->insta}}" target="_blanck"><i class="fab fa-instagram"></i></a>
                            <a href="{{$globalSetting->youtube}}" target="_blanck"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>        
                <div class="col-md-6 col-xl-3 col-lg-4">
                    <div class="widget footer-widget">
                        <div class="widget-contact">
                            <h3 class="widget_title">Contact Info</h3>
                            <ul class="contact-info-list">
                                <li>Phone: <a href="tel:"> +91 {{$globalSetting->phone}}</a></li>
                                <li>Office: <a href="tel:"> +91 {{$globalSetting->office}}</a></li>
                                <li>E-mail: <a href="mailto:">{{$globalSetting->email}}</a></li>
                                <li>Address: {{$globalSetting->address}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto col-lg-4">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Menu</h3>
                        <div class="menu-all-pages-container list-column2">
                            <ul class="menu">
                                <li><a href="{{url('/wedding-pics')}}">Wedding Pics</a></li>
                                <li><a href="{{url('/wedding-films')}}">Wedding Films</a></li>
                                <li><a href="{{url('/pre-wedding')}}">Pre Wedding</a></li>
                                <li><a href="{{url('/brides')}}">Brides</a></li>
                                <li><a href="{{url('kids')}}">Kids</a></li>
                            </ul>
                            <ul class="menu">
                                
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('team')}}">Team</a></li>
                                <li><a href="{{url('products')}}">Products</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                          
            </div>
        </div>
        <hr>
    <div class="copyright-wrap text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto align-self-center">
                    <p class="copyright-text">© Copyright {{date('Y')}} - All Rights Reserved | Designed and Developed by <b>Shivam.</b></p>

            </div>                
        </div>
    </div>
</footer>

<!--********************************
        Code End  Here 
******************************** -->

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<!--==============================
All Js File
============================== -->
<!-- Jquery -->
<script src="{{asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Counter Up -->
<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<!-- Range Slider -->
<script src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
<!-- odometer -->
<script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/viewport.jquery.js')}}"></script>

<!-- Isotope Filter -->
<script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
<!-- gsap -->
<script src="{{asset('frontend/assets/js/gsap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/ScrollSmoother.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/SplitText.min.js')}}"></script>

<!-- Main Js File -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>


</html>
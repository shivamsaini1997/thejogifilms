
 <!-- Cursor -->
 <div class="cursor"></div>
 <div class="cursor-follower"></div>
 <!-- Cursor End -->

 <!--==============================
  Preloader
 ==============================-->
 <div class="preloader ">
     <div class="preloader-inner">
         <img src="{{asset($globalSetting->logo)}}" alt="the jogi films">
         <span class="loader"></span>
     </div>
 </div>

 <div class="sidemenu-wrapper">
     <div class="sidemenu-content">
         <button class="closeButton sideMenuCls"><i class="fas fa-times"></i></button>
         <div class="widget footer-widget">
             <div class="widget-about">
                 <div class="footer-logo">
                     <a href="{{url('/')}}"><img src="{{asset($globalSetting->logo)}}" alt="the jogi films"></a>
                 </div>
                 <p class="about-text">Welcome to Jogi
                    Films Photography, where every frame tells a story. We specialize in turning fleeting
                    moments into timeless memories through our lens. Let us bring your vision to life with
                    creativity, passion, and perfection.</p>
                 <div class="social-btn style2">
                     <a href="{{$globalSetting->facebook}}" target="_blanck"><i class="fab fa-facebook"></i></a>
                     <a href="{{$globalSetting->insta}}" target="_blanck"><i class="fab fa-instagram"></i></a>
                     <a href="{{$globalSetting->youtube}}" target="_blanck"><i class="fab fa-youtube"></i></a>

                 </div>
             </div>
         </div>
         <div class="widget widget_nav_menu footer-widget">
             <h3 class="widget_title">Quick Links</h3>
             <ul class="menu">
                 <li><a href="{{route('about')}}">About Us</a></li>
                 <li><a href="{{url('/wedding-pics')}}">Wedding Pics</a></li>
                 <li><a href="{{url('/wedding-films')}}">Wedding Films</a></li>
                 <li><a href="{{url('/pre-wedding')}}">Pre Wedding</a></li>
                 <li><a href="{{url('/brides')}}">Brides</a></li>
                 <li class="menu-item-has-children">
                    <a href="{{url('/kids')}}">Kids</a>
         
                </li>
                <li class="menu-item-has-children">
                    <a href="{{url('products')}}">Products</a>
         
                </li>
                 <li><a href="{{route('contact')}}">Contact Us</a></li>
             </ul>
         </div>
     </div>
 </div>
 <!--==============================
 Mobile Menu
 ============================== -->
 <div class="mobile-menu-wrapper">
     <div class="mobile-menu-area text-center">
         <button class="menu-toggle"><i class="fas fa-times"></i></button>
         <div class="mobile-logo">
             <a href="{{url('/')}}"><img src="{{asset($globalSetting->logo)}}" alt="the jogi films"></a>
         </div>
         <div class="mobile-menu">
             <ul>
                 <li class="menu-item-has-children">
                     <a href="{{url('/')}}">Home</a>
                     
                 </li>
                 <li class="menu-item-has-children">
                    <a href="#">Wedding</a>
                    <ul class="sub-menu">
                        <li><a href="{{url('/wedding-pics')}}">Wedding Pics</a></li>
                        <li><a href="{{url('/wedding-films')}}">Wedding Films</a></li>
                        <li><a href="{{url('/pre-wedding')}}">Pre Wedding</a></li>
                        <li><a href="{{url('/brides')}}">Brides</a></li>
          
                    </ul>
                 </li>
                 <li class="menu-item-has-children">
                    <a href="{{url('/kids')}}">Kids</a>
         
                </li>
                <li class="menu-item-has-children">
                    <a href="{{url('products')}}">Products</a>
         
                </li>
                 {{-- <li class="menu-item-has-children">
                     <a href="#">Portfolio</a>
                     
                 </li> --}}
                 
                 <li>
                     <a href="{{url('/contact')}}">Contact</a>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!--==============================
 Header Area
 ==============================-->
 <header class="nav-header header-layout1">
     
     <div class="sticky-wrapper">
         <!-- Main Menu Area -->
         <div class="menu-area">
             <div class="container-fluid">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-auto">
                         <div class="header-logo">
                             <a href="{{url('/')}}"><img src="{{asset($globalSetting->logo)}}" alt="the jogi films"></a>
                         </div>
                     </div>
                     <div class="col-auto">
                         <nav class="main-menu d-none d-lg-inline-block">
                             <ul>
                                 <li class="menu-item-has-children">
                                     <a href="{{url('/')}}">Home</a>
                          
                                 </li>
                                 <li class="menu-item-has-children">
                                     <a href="#">Wedding</a>
                                     <ul class="sub-menu">
                                         <li><a href="{{url('/wedding-pics')}}">Wedding Pics</a></li>
                                         <li><a href="{{url('/wedding-films')}}">Wedding Films</a></li>
                                         <li><a href="{{url('/pre-wedding')}}">Pre Wedding</a></li>
                                         <li><a href="{{url('/brides')}}">Brides</a></li>
                           
                                     </ul>
                                 </li>
                                 <li class="menu-item-has-children">
                                    <a href="{{url('/kids')}}">Kids</a>
                         
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{url('products')}}">Products</a>
                         
                                </li>
                                 <li>
                                     <a href="{{route('contact')}}">Contact</a>
                                 </li>
                             </ul>
                         </nav>
                         <div class="navbar-right d-inline-flex d-lg-none">
                             <button type="button" class="menu-toggle icon-btn"><i class="fas fa-bars"></i></button>
                         </div>
                     </div>
                     <div class="col-auto d-none d-lg-block">
                         <div class="header-button">
                            
                             <button type="button" class="sidebar-btn sideMenuToggler">
                                 Menu                                        
                             </button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
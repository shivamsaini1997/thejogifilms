@extends('frontend.layout.main')
@push('title')
    <title>Team</title>
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
                        <h1 class="breadcumb-title">Our Team</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

    <!--==============================
    Team Area  
    ==============================-->
    <div class="team-area-1 space overflow-hidden">          
        <div class="container">
            <div class="row gy-4 justify-content-lg-between justify-content-center">
                @foreach ($teams as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card title-anim">
                            <div class="team-card_img global-img">
                                <img src="{{asset($item->team_image)}}" alt="Team Image">
                            </div>
                            <div class="team-card_content">
                                <h3 class="team-card_title"><a href="javascript:void(0)">{{$item->team_name}}</a></h3>
                                {{-- <span class="team-card_desig">Manager</span> --}}

                            </div>
                        </div>
                    </div>  
                @endforeach
                
                  
      
            </div>
        </div>
    </div>

@endsection
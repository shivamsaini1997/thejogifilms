@extends('frontend.layout.main')
@push('title')
    <title>{{ $categorys->category }}</title>
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
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/assets/img/bg/breadcrumb-bg.png') }}">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $categorys->category }}</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">{{ $categorys->category }}</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
        Portfolio Area
        ==============================-->

    @if ($categorys->slug == 'wedding-films')
        <div class="wedding-video-section space overflow-hidden">
            <div class="container">
                <div class="row gy-30">
                    @foreach ($weddingfilms as $item)
                        <div class="col-lg-6 filter-item wedding-films title-anim">
                            <div class="">
                                <iframe width="560" height="315" src="{{ $item->video_url }}"
                                    title="{{ $item->video_title }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="films-wedding">
                                <h4>{{ $item->video_title }}</h4>
                                <p>{{ $item->discreption }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    @else
        <div class="portfolio-area-1 space overflow-hidden" data-bg-src="frontend/assets/img/bg/portfolio-1-bg.png">
            <div class="portfolio-shape1_1 shape-mockup jump d-lg-block d-none" data-top="0%" data-right="-10%">
                <img src="frontend/assets/img/normal/portfolio-shape_1-1.png" alt="img">
            </div>
            <div class="container">
               
                    @php
                        $category = $categorys->category;
                    @endphp
                    <x-wedding-work-com :categorys="$category" :wedding="$WorkProtfolio" :weddings="$category" />
             
            </div>
        </div>
    @endif
@endsection

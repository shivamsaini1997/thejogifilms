
@extends('admin.layouts.main')
@push('title')
    <title>Dashboard</title>
@endpush
<style>
    .card-body ul {
    list-style: none;
}
</style>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2> Dashboard</h2>
                        <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dashboard">
            <div class="row">

                <div class="col-xxl-12 col-xl-12 proorder-xxl-7 col-lg-12 box-col-12">
                    <div class="card job-card">
                        <div class="card-header pb-0 card-no-border">
                            <div class="header-top">
                                <h3>Today</h3>
                                <div>
                                    <p>
                                        {{ date('l j,') }} <span>{{ date('M Y') }}</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <ul class="d-flex align-center justify-content-start gap-3">
                                <li>
                                    <div class="d-flex gap-2">
                                        
                                        <div class="flex-grow-1">
                                            <h3>{{$allcategory->count()}} </h3>
                                            <p>Category</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex gap-2">
                                        <div class="flex-grow-1">
               
                                            <h3>{{$Weddingpics->count()}}</h3>
                                            <p>Wedding Pics</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex gap-2">
                                        <div class="flex-grow-1">
               
                                            <h3>{{$prewedding->count()}}</h3>
                                            <p>Pre Wedding </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex gap-2">
                                        <div class="flex-grow-1">
               
                                            <h3>{{$brides->count()}}</h3>
                                            <p>Brides </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex gap-2">
                                        <div class="flex-grow-1">
               
                                            <h3>{{$weddingfilmwork->count()}}</h3>
                                            <p>Wedding Films</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex gap-2">
                                        <div class="flex-grow-1">
               
                                            <h3>{{$products->count()}}</h3>
                                            <p>Product</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex gap-2">
                                        <div class="flex-grow-1">
               
                                            <h3>{{$kids->count()}}</h3>
                                            <p>Kids</p>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

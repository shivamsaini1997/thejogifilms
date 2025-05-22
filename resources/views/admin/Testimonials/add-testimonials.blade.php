@extends('admin.layouts.main')
@push('title')
    <title>{{$title}}</title>
@endpush
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2>{{$title}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body add-post">
                            <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="testimonial_image">Testimonial Image:</label>
                                        <input type="file" class="form-control" name="testimonial_image">
                                        <label class="custom-file-label"
                                            for="testimonial_image">{{ isset($testimonial) ? basename($testimonial->testimonial_image) : '' }}</label>
    
                                        @error('testimonial_image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="mb-3">
                                            @if (isset($testimonial) && $testimonial->testimonial_image)
                                                <img src="{{ asset($testimonial->testimonial_image) }}"
                                                    alt="{{asset($testimonial->testimonial_title)}}"
                                                    style="width: 80px; height: 80px; object-fit: contain;">
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="testimonial_title">Testimonial Title:</label>
                                            <input type="text" name="testimonial_title" id="testimonial_title" placeholder="Testimonial Title" class="form-control"
                                                maxlength="255" value="{{ old('testimonial_title', isset($testimonial) ? $testimonial->testimonial_title : '') }}">
                                            @error('testimonial_title')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="discreption"> Descreption:</label>
                                            <textarea name="discreption" id="" class="form-control"  cols="30" rows="10">{{ old('discreption', isset($testimonial) ? $testimonial->discreption : '') }}</textarea>
                                            @error('discreption')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-showcase text-end blog-btn">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button class="btn bg-light font-dark" type="reset">Discard</button>
                                </div>
                            </form>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

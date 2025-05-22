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
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body add-post">
                            <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="video_url">Video Url:</label>
                                            <input class="form-control" id="video_url" name="video_url" type="url" 
                                                value="{{ old('video_url', isset($weddingfilmwork) ? $weddingfilmwork->video_url : '') }}" placeholder="Video Url">
                                            @error('video_url')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="video_title">Video Title:</label>
                                            <input type="text" name="video_title" id="video_title" placeholder="Video Title" class="form-control"
                                                maxlength="255" value="{{ old('video_title', isset($weddingfilmwork) ? $weddingfilmwork->video_title : '') }}">
                                            @error('video_title')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="discreption"> Descreption:</label>
                                            <textarea name="discreption" id="" class="form-control"  cols="30" rows="10">{{ old('discreption', isset($weddingfilmwork) ? $weddingfilmwork->discreption : '') }}</textarea>
                   
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
        <!-- Container-fluid Ends-->
    </div>
@endsection

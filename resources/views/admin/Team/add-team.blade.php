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
                            <form action="{{$url}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="title">Team Name:</label>
                                            <input class="form-control slug-create" id="team_name" name="team_name"
                                                type="text" value="{{old('team_name' , $teams->team_name ?? '')}}" placeholder="Work Name">
                                            @error('team_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                     
                                    <div class="col-lg-5">
                                        <label for="team_image">Team Image:</label>
                                        <input type="file" class="form-control" name="team_image">
                                        <label class="custom-file-label" for="team_image">{{ isset($teams) ? basename($teams->team_image) : '' }}</label>
    
                                        @error('team_image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="mb-3">
                                            @if (isset($teams) && $teams->team_image)
                                                <img src="{{ asset($teams->team_image) }}"
                                                    alt="{{asset($teams->team_name)}}"
                                                    style="width: 80px; height: 80px; object-fit: contain;">
                                            @endif
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

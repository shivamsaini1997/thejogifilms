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
                                        <div class="mb-3" data-test-hook="remove-button">
                                            <label class="col-form-label mb-2" for="choices-remove-button">Category:</label>
                                            <select class="form-select" id="choices-remove-button" name="category">
                                                <option value="">Select Category</option>
                                                @foreach ($allcategory as $item)
                                                <option value="{{ $item->category }}" {{old('category', $workwedding->category ?? '') == $item->category ? 'selected' : '' }}>{{ $item->category }} </option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="title">Work Name:</label>
                                            <input class="form-control slug-create" id="work_name" name="work_name"
                                                type="text" value="{{old('work_name' , $workwedding->work_name ?? '')}}" placeholder="Work Name">
                                            @error('work_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                     
                                    <div class="col-lg-5">
                                        <label for="work_image">Work Image:</label>
                                        <input type="file" class="form-control" name="work_image">
                                        <label class="custom-file-label"
                                            for="work_image">{{ isset($categorys) ? basename($categorys->work_image) : '' }}</label>
    
                                        @error('work_image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="mb-3">
                                            @if (isset($workwedding) && $workwedding->work_image)
                                                <img src="{{ asset($workwedding->work_image) }}"
                                                    alt="{{asset($workwedding->work_name)}}"
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

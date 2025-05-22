@extends('admin.layouts.main')
@push('title')
    <title>Global</title>
@endpush
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2>Global</h2>
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
                            <form action="{{route('store-global')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                   
                                    <div class="col-lg-11">
                                        <label for="logo">Logo:</label>
                                        <input type="file" class="form-control" name="logo">
                                        <label class="custom-file-label"
                                            for="logo">{{ isset($global) ? basename($global->logo) : '' }}</label>
    
                                        @error('logo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="mb-3">
                                            @if (isset($global) && $global->logo)
                                                <img src="{{ asset($global->logo) }}"
                                                    alt="{{asset($global->logo)}}"
                                                    style="width: 80px; height: 80px; object-fit: contain;">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="insta">Instagram Link:</label>
                                            <input type="url" name="insta" class="form-control" id="insta"
                                                value=" {{old('insta' , $global->insta ?? '')}}" placeholder="Instagram">
                                            @error('insta')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="facebook">Facebook Link:</label>
                                            <input type="url" name="facebook" class="form-control" id="facebook"
                                                value=" {{old('facebook' , $global->facebook ?? '')}}" placeholder="facebook">
                                            @error('facebook')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="youtube">Youtube Link:</label>
                                            <input type="url" name="youtube" class="form-control" id="youtube"
                                                value=" {{old('youtube' , $global->youtube ?? '')}}" placeholder="Youtube">
                                            @error('youtube')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="phone">Phone:</label>
                                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone"
                                                value=" {{old('phone' , $global->phone ?? '')}}" maxlength="10"  minlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="office">Office:</label>
                                            <input type="tel" name="office" class="form-control" id="office"placeholder="Office"
                                                value=" {{old('office' , $global->office ?? '')}}"  maxlength="10"  minlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                            @error('office')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="email">Email:</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                value=" {{old('email' , $global->email ?? '')}}" placeholder="Email" oninput="this.value = this.value.replace(/[^a-zA-Z0-9@._-]/g, '')">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" class="form-control" id="address"
                                                value=" {{old('address' , $global->address ?? '')}}" placeholder="Address">
                                            @error('address')
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

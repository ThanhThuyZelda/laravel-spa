@extends('home')

@section('content')

<div class="container">

            <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="{{ asset('public/frontend/img/testimonial.jpg')}}" alt="">
                </div>
                <div class="col-lg-6">
                    
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Feedback của khách hàng</h6>
                    <h1 class="mb-4">What Our Clients Say!</h1>
                    
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($feedback as $item)
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="{{ asset("storage/app/public/images/$item->PH_img") }}" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">{{ $item->PH_fullname }}</h6>
                                    <span>{{ $item->PH_service }}</span>
                                </div>
                            </div>
                            <p class="m-0">{{ $item->PH_content }}</p>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->  
    <hr>  
    <div class="p-5 my-5" style="background: rgba(188, 212, 122, 0.7);">
        <h1 class=" text-center mb-4">Gửi phản hồi</h1>
        <form action="{{ url('/feedback') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert"> 
                        {{ Session::get('success'); }}
                </div>
            @endif
            
            <div class="form-group">
                <label id="PH_fullname" style="color:black">Họ tên <span style="color: red">*</span></label>
                <input type="text" name="PH_fullname" id="PH_fullname" placeholder="Họ tên...." 
                class="form-control form-control-user" value="{{ old('PH_fullname') }}"> 
                <span class="text-danger small">@error('fullname') {{ $message }} @enderror</span>
            </div>
        
            <div class="form-group">
                <label id="PH_service" style="color:black">Dịch vụ đã sử dụng <span style="color: red">*</span></label>
                <input type="text" name="PH_service" id="PH_service" placeholder="Dịch vụ đã sử dụng...." 
                class="form-control form-control-user" value="{{ old('PH_service') }}"> 
                <span class="text-danger small">@error('service') {{ $message }} @enderror</span>
            </div>
        
            <div class="form-group">
                <label id="PH_img" style="color:black">Gửi ảnh<span style="color: red">*</span></label>
                <input type="file" name="PH_img" id="PH_img" class="form-control form-control-user"  value="{{ old('PH_img') }}"> 
                <span class="text-danger small">@error('images') {{ $message }} @enderror</span>
            </div>
        
            <div class="form-group">
                <label id="PH_content" style="color:black">Nội dung <span style="color: red">*</span></label>
                <textarea name="PH_content" id="PH_content"  class="form-control form-control-user"> </textarea>
                <span class="text-danger small">@error('content') {{ $message }} @enderror</span>
            </div>
            
            <div style="margin-left: 300px; margin-right: 300px">
                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Gửi</button>
            </div>
        </form>
    </div>
    
            

</div>

@endsection
@extends('admin.dashboard')

@section('content')

<div class="container">
    
            <div class="p-5 my-5" style="background: rgba(188, 212, 122, 0.7);">
                <h1 class=" text-center mb-4">Gửi phản hồi</h1>
                <form action="{{ url('/admin/menu/feedback') }}" method="POST" enctype="multipart/form-data">
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
                        <label id="PH_service" style="color:black">Dịch vụ đã sử dụng <span style="color: red">*</label>
                        <input type="text" name="PH_service" id="PH_service" placeholder="Dịch vụ đã sử dụng...." 
                        class="form-control form-control-user" value="{{ old('PH_service') }}"> 
                        <span class="text-danger small">@error('service') {{ $message }} @enderror</span>
                    </div>
                
                    <div class="form-group">
                        <label id="PH_img" style="color:black">Gửi ảnh</label>
                        <input type="file" name="PH_img" id="PH_img" class="form-control form-control-user"  value="{{ old('PH_img') }}"> 
                        <span class="text-danger small">@error('images') {{ $message }} @enderror</span>
                    </div>
                
                    <div class="form-group">
                        <label id="PH_content" style="color:black">Nội dung <span style="color: red">*</label>
                        <textarea name="PH_content" id="PH_content"  class="form-control form-control-user"> </textarea>
                        <span class="text-danger small">@error('content') {{ $message }} @enderror</span>
                    </div>
                 
                    <div style="margin-left: 300px; margin-right: 300px">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Gửi</button>
                    </div>
                </form>
            </div>

            <hr>
            

</div>

@endsection
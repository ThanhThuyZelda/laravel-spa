@extends('admin.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Cập nhật dịch vụ</h2><hr>
                                <form action="{{  url('admin/menu/booking/'.$booking->DL_id ) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <input type="hidden" name="DL_id" value="{{ $booking->DL_id }}">
                                        <div class="form-group">
                                                <label id="DL_hoten">Tên khách hàng</label>
                                                <input type="text" name="DL_hoten" id="DL_hoten" placeholder="Họ tên...." 
                                                class="form-control form-control-user" value="{{ $booking->DL_hoten }}"> 
                                                <span class="text-danger small">@error('DL_hoten') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label id="DL_sdt">Số điện thoại</label>
                                                <input type="text" name="DL_sdt" id="DL_sdt" placeholder="Số điện thoại ...." 
                                                class="form-control form-control-user" value="{{ $booking->DL_sdt }}"> 
                                                <span class="text-danger small">@error('DL_sdt') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label id="DL_sdt">Email</label>
                                                <input type="text" name="DL_email" id="DL_sdt" placeholder="Email ...." 
                                                class="form-control form-control-user" value="{{ $booking->DL_email }}"> 
                                                <span class="text-danger small">@error('DL_email') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label id="DL_diachi">Địa chỉ</label>
                                                <input type="text" name="DL_diachi" id="DL_diachi" placeholder="Địa chỉ ...." 
                                                class="form-control form-control-user" value="{{ $booking->DL_diachi }}"> 
                                                <span class="text-danger small">@error('DL_diachi') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-group">
                                                    <label>Chọn  dịch vụ</label>
                                                    <select name="DV_id" class="form-control">
                                                        <option value="0">--- Chọn  dịch vụ ---</option>
                                                        @foreach($service as $item)
                                                                <option value="{{ $item->DV_id }}" {{ $item->DV_id == $booking->DV_id ? 'selected' : '' }}>{{ $item->DV_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger small">@error('service') {{ $message }} @enderror</span>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label id="DL_thoigian">Khung giờ</label>
                                                <input type="datetime-local" name="DL_thoigian" id="DL_thoigian"  
                                                class="form-control form-control-user" value="{{ $booking->DL_thoigian }}"> 
                                                <span class="text-danger small">@error('DL_thoigian') {{ $message }} @enderror</span>
                                        </div>

                                        <div class="form-group">
                                                <label id="DL_active">Trạng thái</label>
                                                
                                                <div class="form-check">
                                                    <input type="radio"  class="form-check-input" name="DL_active" id="unconfirmed" value="Chưa xác nhận"
                                                    {{  $booking->DL_active == "Chưa xác nhận" ? "checked" : "" }} >
                                                    <label for="unconfirmed" class="form-check-label">Chưa xác nhận</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio"  class="form-check-input" name="DL_active" id="confirmed" value="Đã xác nhận"
                                                    {{  $booking->DL_active == "Đã xác nhận" ? "checked" : "" }}>
                                                    <label for="confirmed" class="form-check-label">Đã xác nhận</label>
                                                </div>
                                                <div class="form-check">
                                                        <input type="radio"  class="form-check-input" name="DL_active" id="processing" value="Đang phục vụ"
                                                        {{  $booking->DL_active == "Đang phục vụ" ? "checked" : "" }}>
                                                        <label for="processing" class="form-check-label">Đang phục vụ</label>
                                                </div>
                                                <div class="form-check">
                                                        <input type="radio"  class="form-check-input" name="DL_active" id="done" value="Đã xong"
                                                        {{  $booking->DL_active == "Đã xong" ? "checked" : "" }}>
                                                        <label for="done" class="form-check-label">Đã xong</label>
                                                </div>
    
                                                <span class="text-danger small">@error('active') {{ $message }} @enderror</span>
                                                
                                        </div>
                                        <div class="md-3">
                                                <button class="btn btn-primary ">Submit</button>   
                                                <a href="{{ url('admin/menu/booking') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div> 
        <script src="//cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
        {{-- <script type = "text/javascript">
                CKEDITOR.replace("DV_nd");
        </script>  --}}
        {{-- <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script> --}}
        <script>
                CKEDITOR.replace('DV_nd', {
                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                        filebrowserUploadMethod: 'form'
                });
        </script>  
@endsection
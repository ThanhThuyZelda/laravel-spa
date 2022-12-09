@extends('nhanvien.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Cập nhật dịch vụ</h2><hr>
                                <form action="{{  url('nhanvien/tuvan/'.$advise->TV_id ) }}" method="POST" >
                                        @csrf
                                        @method('PUT')
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <input type="hidden" name="TV_id" value="{{ $advise->TV_id }}">
                                        <div class="form-group">
                                                <label id="TV_hoten">Tên khách hàng</label>
                                                <input type="text" name="TV_hoten" id="TV_hoten" placeholder="Họ tên...." 
                                                class="form-control form-control-user" value="{{ $advise->TV_hoten }}"> 
                                                <span class="text-danger small">@error('fullname') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label id="TV_sdt">Số điện thoại</label>
                                                <input type="text" name="TV_sdt" id="TV_sdt" placeholder="Số điện thoại ...." 
                                                class="form-control form-control-user" value="{{ $advise->TV_sdt }}"> 
                                                <span class="text-danger small">@error('Phone') {{ $message }} @enderror</span>
                                        </div>

                                        <div class="form-group">
                                                <div class="form-group">
                                                    <label>Chọn  dịch vụ</label>
                                                    <select name="DV_id" class="form-control">
                                                        <option value="0">--- Chọn dịch vụ ---</option>
                                                        @foreach($service as $item)
                                                                <option value="{{ $item->DV_id }}" {{ $item->DV_id == $advise->TV_id ? 'selected' : '' }}>{{ $item->DV_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger small">@error('service') {{ $message }} @enderror</span>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                                <label id="TV_ttd">Tình trạng da</label>
                                                <input type="text" name="TV_ttd" id="TV_ttd" placeholder="Email ...." 
                                                class="form-control form-control-user" value="{{ $advise->TV_ttd }}"> 
                                                <span class="text-danger small">@error('skin condition') {{ $message }} @enderror</span>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label id="TV_active">Trạng thái</label>
                                                
                                                <div class="form-check">
                                                    <input type="radio"  class="form-check-input" name="TV_active" id="unconfirmed" value="Chưa xác nhận"
                                                    {{  $advise->TV_active == "Chưa xác nhận" ? "checked" : "" }} >
                                                    <label for="unconfirmed" class="form-check-label">Chưa xác nhận</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio"  class="form-check-input" name="TV_active" id="confirmed" value="Đã xác nhận"
                                                    {{  $advise->TV_active == "Đã xác nhận" ? "checked" : "" }}>
                                                    <label for="confirmed" class="form-check-label">Đã xác nhận</label>
                                                </div>
                                                
    
                                                <span class="text-danger small">@error('active') {{ $message }} @enderror</span>
                                                
                                        </div>
                                        <div class="md-3">
                                                <button class="btn btn-primary ">Submit</button>   
                                                <a href="{{ url('nhanvien/tuvan') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div> 
        
@endsection
@extends('home')

@section('content')

<div class="container">
    
            <div class="p-5 my-5" style="background: rgba(224, 214, 252, 0.7);">
                <h1 class=" text-center mb-4">Đặt lịch hẹn</h1>
                <form action="{{ url('/dat-lich') }}" method="POST">
                    @csrf
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert"> 
                                {{ Session::get('success'); }}
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="DL_hoten" style="color:black">Tên khách hàng<span style="color: red">*</span></label>
                                <input type="text" name="DL_hoten" id="DL_hoten" placeholder="Họ tên...." 
                                class="form-control form-control-user" value="{{ old('DL_hoten') }}"> 
                                <span class="text-danger small">@error('fullname') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="DL_sdt" style="color:black">Số điện thoại<span style="color: red">*</span></label>
                                <input type="text" name="DL_sdt" id="DL_sdt" placeholder="Số điện thoại ...." 
                                class="form-control form-control-user" value="{{ old('DL_sdt') }}"> 
                                <span class="text-danger small">@error('phone') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="DL_sdt" style="color:black">Email<span style="color: red">*</span></label>
                                <input type="text" name="DL_email" id="DL_sdt" placeholder="Email ...." 
                                class="form-control form-control-user" value="{{ old('DL_email')}}"> 
                                <span class="text-danger small">@error('email') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="DL_diachi" style="color:black">Địa chỉ<span style="color: red">*</span></label>
                                <input type="text" name="DL_diachi" id="DL_diachi" placeholder="Địa chỉ ...." 
                                class="form-control form-control-user" value="{{ old('DL_diachi') }}">  
                                <span class="text-danger small">@error('address') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="DL_thoigian" style="color:black">Khung giờ<span style="color: red">*</span></label>
                                <input type="datetime-local" name="DL_thoigian" id="DL_thoigian"  
                                class="form-control form-control-user" value="{{ old('DL_thoigian') }}">
                                <span class="text-danger small">@error('time') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label style="color:black">Chọn  dịch vụ<span style="color: red">*</span></label>
                                <select name="DV_id" class="form-control">
                                    <option value="0">--- Chọn  dịch vụ ---</option>
                                        @foreach($service as $item)
                                                <option value="{{ $item->DV_id }}">{{ $item->DV_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div style="margin-left: 300px; margin-right: 300px">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Đặt ngay</button>
                    </div>
                </form>
            </div>

</div>

@endsection
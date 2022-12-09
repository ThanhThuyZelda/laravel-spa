@extends('home')

@section('content')

<div class="container">
  
    <div class="p-5 my-5" style="background: rgba(154, 214, 163, 0.7);">
        <h1 class=" text-center mb-4">ĐĂNG KÍ NHẬN TƯ VẤN</h1>
        <form action="{{ url('/tu-van') }}" method="POST" >
            @csrf
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert"> 
                        {{ Session::get('success'); }}
                </div>
            @endif
            
            <div class="form-group">
                <label id="TV_hoten" style="color:black">Họ tên <span style="color: red">*</span></label>
                <input type="text" name="TV_hoten" id="TV_hoten" placeholder="Họ tên...." 
                class="form-control form-control-user" value="{{ old('TV_hoten') }}"> 
                <span class="text-danger small">@error('fullname') {{ $message }} @enderror</span>
            </div>
        
            <div class="form-group">
                <label id="TV_sdt" style="color:black">Số điện thoại<span style="color: red">*</span></label>
                <input type="text" name="TV_sdt" id="TV_sdt" placeholder="Số điện thoại...." 
                class="form-control form-control-user" value="{{ old('TV_sdt') }}"> 
                <span class="text-danger small">@error('phone') {{ $message }} @enderror</span>
            </div>
            
           
            <div class="form-group">
                <label style="color:black">Chọn  dịch vụ<span style="color: red">*</span></label>
                <select name="DV_id" class="form-control">
                    <option value="0">--- Chọn  dịch vụ ---</option>
                        @foreach($service as $item)
                                <option value="{{ $item->DV_id }}">{{ $item->DV_name}}</option>
                        @endforeach
                </select>
            </div>

            
        
            <div class="form-group">
                <label id="TV_ttd" style="color:black">Tình trạng da <span style="color: red">*</span></label>
                <textarea name="TV_ttd" id="TV_ttd"  class="form-control form-control-user"> </textarea>
                <span class="text-danger small">@error('content') {{ $message }} @enderror</span>
            </div>
            
            <div style="margin-left: 300px; margin-right: 300px">
                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Gửi ngay</button>
            </div>
        </form>
    </div>
    
            

</div>

@endsection
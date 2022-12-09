@extends('nhanvien.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Thêm hóa đơn</h2><hr>
                                <form action="{{ url('nhanvien/thanhtoan') }}" method="POST" >
                                        @csrf
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        
                                        <div class="form-group">
                                                <label>Khách hàng</label>
                                                <select name="DL_id" class="form-control">
                                                <option value="0">--- Chọn khách hàng ---</option>
                                                @foreach($booking as $item)
                                                        <option value="{{ $item->DL_id }}">{{ $item->DL_hoten}}</option>
                                                @endforeach
                                                </select>
                                                <span class="text-danger small">@error('customer') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label id="HD_tratruoc">Số tiền trả trước</label>
                                                <input type="number" name="HD_tratruoc" id="HD_tratruoc" placeholder="Số tiền...." 
                                                class="form-control form-control-user" value="{{ old('HD_tratruoc') }}"> 
                                                <span class="text-danger small">@error('money') {{ $message }} @enderror</span>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label id="HD_active">Trạng thái</label>
                                                
                                                <div class="form-check">
                                                    <input type="radio"  class="form-check-input" name="HD_active" id="unconfirmed" value="Chưa thanh toán">
                                                    <label for="unconfirmed" class="form-check-label">Chưa thanh toán</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio"  class="form-check-input" name="HD_active" id="confirmed" value="Còn nợ">
                                                    <label for="confirmed" class="form-check-label">Còn nợ</label>
                                                </div>
                                                <div class="form-check">
                                                        <input type="radio"  class="form-check-input" name="HD_active" id="processing" value="Đã thanh toán">
                                                        <label for="processing" class="form-check-label">Đã thanh toán</label>
                                                </div>
                                                
    
                                                <span class="text-danger small">@error('active') {{ $message }} @enderror</span>
                                                
                                        </div>


                                        
                                        <div class="md-3">
                                                <button class="btn btn-primary ">Submit</button>   
                                                <a href="{{ url('nhanvien/thanhtoan') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div>  
        
@endsection
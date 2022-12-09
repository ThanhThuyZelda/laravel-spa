@extends('admin.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Thêm loại dịch vụ mới</h2><hr>
                                <form action="{{ url('admin/menu/service_type') }}" method="POST">
                                        @csrf
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <div class="form-group">
                                                <label id="type_name">Tên loại dịch vụ</label>
                                                <input type="text" name="type_name" id="type_name" placeholder="Enter Name ...." class="form-control form-control-user" > 
                                                <span class="text-danger small">@error('type_name') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="md-3">
                                                <button class="btn btn-primary ">Submit</button>   
                                                <a href="{{ url('admin/menu/service_type') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div>   
@endsection
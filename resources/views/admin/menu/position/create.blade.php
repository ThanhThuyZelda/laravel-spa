@extends('admin.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Thêm chức vụ mới</h2><hr>
                                <form action="{{ url('admin/menu/position') }}" method="POST">
                                        @csrf
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <div class="form-group">
                                                <label id="CV_name">Tên chức vụ</label>
                                                <input type="text" name="CV_name" id="CV_name" placeholder="Enter Name ...." class="form-control form-control-user" > 
                                                <span class="text-danger small">@error('position_name') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="md-3">
                                                <button class="btn btn-primary ">Submit</button>   
                                                <a href="{{ url('admin/menu/position') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div>   
@endsection
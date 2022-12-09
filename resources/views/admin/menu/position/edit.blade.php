@extends('admin.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Cập nhật chức vụ</h2>
                                <form action="{{ url('admin/menu/position/'.$CV->CV_id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="CV_id" value="{{ $CV->CV_id }}">
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <div class="form-group">
                                                <label id="CV_name">Tên chức vụ</label>
                                                <input type="text" name="CV_name" id="CV_name" value="{{ $CV->CV_name }}" class="form-control form-control-user" > 
                                                <span class="text-danger small">@error('CV_name') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="md-3">
                                                <button class="btn btn-primary ">Update</button>   
                                                <a href="{{ url('admin/menu/position') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div>   
@endsection
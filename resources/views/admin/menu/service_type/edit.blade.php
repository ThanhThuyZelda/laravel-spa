@extends('admin.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Cập nhật loại dịch vụ</h2>
                                <form action="{{ url('admin/menu/service_type/'.$type->type_id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="type_id" value="{{ $type->type_id }}">
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <div class="form-group">
                                                <label id="type_name">Tên dịch vụ</label>
                                                <input type="text" name="type_name" id="type_name" value="{{ $type->type_name }}" class="form-control form-control-user" > 
                                                <span class="text-danger small">@error('type_name') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="md-3">
                                                <button class="btn btn-primary ">Update</button>   
                                                <a href="{{ url('admin/menu/service_type') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div>   
@endsection
@extends('admin.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Cập nhật phòng</h2>
                                <form action="{{ url('admin/menu/room/'.$room->room_id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="room_id" value="{{ $room->room_id }}">
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <div class="form-group">
                                                <label id="room_name">Tên phòng</label>
                                                <input type="text" name="room_name" id="room_name" value="{{ $room->room_name }}" class="form-control form-control-user" > 
                                                <span class="text-danger small">@error('room_name') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="md-3">
                                                <button class="btn btn-primary ">Update</button>   
                                                <a href="{{ url('admin/menu/room') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div>   
@endsection
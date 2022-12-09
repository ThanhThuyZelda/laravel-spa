@extends('admin.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Thêm nhân viên mới</h2><hr>
                                <form action="{{ url('admin/menu/staff1') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <div class="form-group">
                                                <label id="room_name">Tên nhân viên</label>
                                                <input type="text" name="fullname" id="fullname" placeholder="Enter Fullname ...." 
                                                class="form-control form-control-user" value="{{ old('fullname') }}"> 
                                                <span class="text-danger small">@error('fullname') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label id="avatar">Avatar</label>
                                            <input type="file" name="avatar" id="avatar" class="form-control form-control-user"  value="{{ old('avatar') }}"> 
                                            <span class="text-danger small">@error('avatar') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label id="email">Email</label>
                                            <input type="text" name="email" id="email" placeholder="Enter Email ...." 
                                            class="form-control form-control-user"  value="{{ old('email') }}" > 
                                            <span class="text-danger small">@error('email') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label id="password">Password</label>
                                                <input type="password" name="password" id="password" placeholder="Enter Password...."
                                                 class="form-control form-control-user" > 
                                                <span class="text-danger small">@error('password') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label id="phone">Phone</label>
                                                <input type="phone" name="phone" id="phone" placeholder="Enter Phone...." 
                                                class="form-control form-control-user"  value="{{ old('phone') }}"> 
                                                <span class="text-danger small">@error('phone') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label id="gender">Giới tính</label>
                                            
                                            <div class="form-check">
                                                <input type="radio"  class="form-check-input" name="gender" id="female" value="0">
                                                <label for="female" class="form-check-label">Nữ</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio"  class="form-check-input" name="gender" id="male" value="1">
                                                <label for="male" class="form-check-label">Nam</label>
                                            </div>

                                            <span class="text-danger small">@error('gender') {{ $message }} @enderror</span>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Chọn phòng</label>
                                            <select name="room_id" class="form-control">
                                                <option value="0">---Chọn phòng---</option>
                                                @foreach($room as $item)
                                                        <option value="{{ $item->room_id }}">{{ $item->room_name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger small">@error('room_name') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label>Chọn chức vụ</label>
                                                <select name="CV_id" class="form-control">
                                                        <option value="0">---Chọn chức vụ---</option>
                                                    @foreach($position as $item)
                                                            <option value="{{ $item->CV_id}}">{{ $item->CV_name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger small">@error('room_name') {{ $message }} @enderror</span>
                                            </div>



                                        <div class="md-3">
                                                <button class="btn btn-primary ">Submit</button>   
                                                <a href="{{ url('admin/menu/staff') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div>   
@endsection
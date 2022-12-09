@extends('admin.dashboard')

@section('content')
    

    <div class="container" style="margin-top:20px; margin-bottom:50px;">
       <div class="row">
        <div class="col-md-12">
            <h2>Danh sách nhân viên</h2>
            <br>
            
            <form class="search-form" style="float: left" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" 
                    value="{{ request()->get('search') }}" placeholder="Search">
                    <div class="input-group-append">
                    <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                <!-- /.input-group -->
                </form>

              

            <div style="margin: 20px; float:right; margin-right: 80px;">
                <a href="{{ url('admin/menu/staff1/create') }}" class="btn btn-success">Add New</a>
            </div>

            <table class="table">
                <thead>
                        <tr>
                            <th>Mã nhân viên</th>
                            <th>Họ tên</th>
                            <th>Avatar</th>
                            <th>Giới tính</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Chức vụ</th>
                            <th>Phòng</th>
                            <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @if(!empty($data) && $data->count())
                        @foreach ($data as $staff)
                            <tr>
                                <td>{{ $staff->NV_id }}</td>
                                <td>{{ $staff->fullname }}</td>
                                <td>
                                    <img src="{{ asset("storage/app/public/images/$staff->avatar") }}" width="50px" height="70px">
                                </td>
                                {{-- <td>{{ $staff->avatar }}</td> --}}
                                <td>{{ $staff->gender==0 ? 'Nữ' : 'Nam' }}</td>
                                <td>{{ $staff->phone }}</td>
                                <td>{{ $staff->email }}</td>

                                <td>
                                    {{ $staff->CV_name }}
                                    {{-- {{ $staff->links(); }} --}}
                                </td>
                                <td>{{ $staff->room_name }}</td>
                                <td>
                                    <form action="{{ url('admin/menu/staff1/'.$staff->NV_id) }}" method="POST">
                                        
                                        <a href="{{ url('admin/menu/staff1/' .$staff->NV_id. '/edit') }}" class="btn btn-primary">Update</a>
                                        

                                        
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    
                                </td>
                                
                            </tr>
                        @endforeach
                    @else 
                        <tr>
                            <td colspan="6">Không có dữ liệu. </td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
        <div class="row">{{ $data->links() }}</div>
       </div>
    </div>

@endsection
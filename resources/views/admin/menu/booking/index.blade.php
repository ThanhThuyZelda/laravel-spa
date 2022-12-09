@extends('admin.dashboard')

@section('content')
    

    <div class="container" style="margin-top:20px; margin-bottom:50px;">
       <div class="row">
        <div class="col-md-12">
            <h2>Danh sách lịch hẹn</h2>
            <br>
            
            <form class="search-form" style="float: left" action="" >
                <div class="input-group">
                    <input type="text" name="key" class="form-control" 
                    placeholder="Search">
                    <div class="input-group-append">
                    <button type="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                
            </form>

              

            <div style="margin: 20px; float:right; margin-right: 80px;">
                <a href="{{ url('admin/menu/booking/create') }}" class="btn btn-success">Add New</a>
            </div>

            <table class="table">
                <thead>
                        <tr>
                            <th>Mã lịch hẹn</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Dịch vụ</th>
                            <th>Thời gian</th>
                            <th>Trạng thái</th>
                            <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @if(!empty($data) && $data->count())
                        @foreach ($data as $booking)
                            <tr>
                                <td>{{ $booking->DL_id }}</td>
                                <td>{{ $booking->DL_hoten }}</td>
                                <td>{{ $booking->DL_sdt }}</td>
                                <td>{{ $booking->DL_email }}</td>
                                <td>{{ $booking->DL_diachi }}</td>
                                <td>{{ $booking->DV_name }}</td>
                                <td>{{ $booking->DL_thoigian }}</td>
                                <td>
                                    @if($booking->DL_active == "Chưa xác nhận")
                                        <span class="badge badge-secondary">{{ $booking->DL_active }}</span>
                                    @elseif($booking->DL_active == "Đã xác nhận")
                                        <span class="badge badge-success">{{ $booking->DL_active }}</span>
                                    @elseif($booking->DL_active == "Đang phục vụ")
                                        <span class="badge badge-warning">{{ $booking->DL_active }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ $booking->DL_active }}</span>
                                    @endif
                                </td>
                                {{-- <td> {!! $service->DV_nd !!}</td> --}}
                                
                                
                                <td>
                                    <form action="{{ url('admin/menu/booking/'.$booking->DL_id) }}" method="POST">
                                        
                                        <a href="{{ url('admin/menu/booking/' .$booking->DL_id. '/edit') }}" class="btn btn-primary">Update</a>
                                        

                                        
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
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
        <div class="row">{{ $data->appends(request()->all())->links() }}</div>
       </div>
    </div>

@endsection
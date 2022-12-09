@extends('nhanvien.dashboard')

@section('content')
    

    <div class="container" style="margin-top:20px; margin-bottom:50px;">
       <div class="row">
        <div class="col-md-12">
            <h2>Danh sách đơn cần tư vấn</h2>
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

              
                {{-- <div style="margin: 20px; float:right; margin-right: 80px;">
                    <a href="{{ url('nhanvien/tuvan/create') }}" class="btn btn-success">Add New</a>
                </div> --}}
            

            <table class="table">
                <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Họ tên</th>
                            <th>Tên dịch vụ</th>
                            <th>Tình trạng da</th>
                            <th>Trạng thái</th>
                            <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @if(!empty($data) && $data->count())
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->TV_id }}</td>
                                <td>{{ $item->TV_hoten }}</td>
                                <td>{{ $item->TV_sdt }}</td>
                                <td>{{ $item->TV_ttd }}</td>
                                <td>
                                    @if($item->TV_active == "Chưa xác nhận")
                                        <span class="badge badge-secondary">{{ $item->TV_active }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ $item->TV_active }}</span>
                                    @endif
                                </td>

                                <td>
                                    <form action="{{ url('nhanvien/tuvan/'.$item->TV_id) }}" method="POST">
                                        <a href="{{ url('nhanvien/tuvan/' .$item->TV_id. '/edit') }}" class="btn btn-primary">Update</a>

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
        <div class="row">{{ $data->links() }}</div>
       </div>
    </div>

@endsection
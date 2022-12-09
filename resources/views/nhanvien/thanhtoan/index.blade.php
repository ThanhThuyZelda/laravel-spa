@extends('nhanvien.dashboard')

@section('content')
    

    <div class="container" style="margin-top:20px; margin-bottom:50px;">
       <div class="row">
        <div class="col-md-12">
            <h2>Danh sách hóa đơn</h2>
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
                <a href="{{ url('nhanvien/thanhtoan/create') }}" class="btn btn-success">Add New</a>
            </div>

            <table class="table">
                <thead>
                        <tr>
                            <th>STT </th>
                            <th>Tên khách hàng</th>
                            <th>Dịch vụ</th>
                            <th>Giá dịch vụ</th>
                            <th>Tiền trả trước</th>
                            <th>Tiền tồn</th>
                            <th>Trạng thái</th>
                            <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @if(!empty($data) && $data->count())
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->HD_id }}</td>
                                <td>{{ $item->DL_hoten }}</td>
                                <td>{{ $item->DV_name }}</td>
                                <td>{{ $item->Dv_gia }}</td>
                                <td>{{ $item->HD_tratruoc }}</td>
                                <td>{{ $item->Dv_gia -  $item->HD_tratruoc }}</td>
                                <td>
                                    @if($item->HD_active == "Chưa thanh toán")
                                        <span class="badge badge-secondary">{{ $item->HD_active }}</span>
                                    @elseif($item->HD_active == "Còn nợ")
                                        <span class="badge badge-danger">{{ $item->HD_active }}</span>
                                    @else
                                        <span class="badge badge-success">{{ $item->HD_active }}</span>
                                    @endif
                                </td>
                                {{-- <td> {!! $service->DV_nd !!}</td> --}}
                                
                                
                                <td>
                                    <form action="{{ url('nhanvien/thanhtoan/'.$item->HD_id) }}" method="POST">
                                        
                                        <a href="{{ url('nhanvien/thanhtoan/' .$item->HD_id. '/edit') }}" class="btn btn-primary">Update</a>
                                        

                                        
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
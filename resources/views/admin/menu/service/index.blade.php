@extends('admin.dashboard')

@section('content')
    

    <div class="container" style="margin-top:20px; margin-bottom:50px;">
       <div class="row">
        <div class="col-md-12">
            <h2>Danh sách dịch vụ</h2>
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
                <a href="{{ url('admin/menu/service/create') }}" class="btn btn-success">Add New</a>
            </div>

            <table class="table">
                <thead>
                        <tr>
                            <th>Mã dịch vụ</th>
                            <th>Tên dịch vụ</th>
                            <th>Loại dịch vụ</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Nội dung</th>
                            <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @if(!empty($data) && $data->count())
                        @foreach ($data as $service)
                            <tr>
                                <td>{{ $service->DV_id }}</td>
                                <td>{{ $service->DV_name }}</td>
                                <td>{{ $service->type_name }}</td>
                                <td>{{ $service->DV_mota }}</td>
                                <td>{{ $service->Dv_gia }}</td>
                                {{-- <td> {{ $service->DV_nd }}</td> --}}
                                <td>{!! $service->DV_nd !!}</td>
                                
                                <td>
                                    <form action="{{ url('admin/menu/service/'.$service->DV_id) }}" method="POST">
                                        
                                        <a href="{{ url('admin/menu/service/' .$service->DV_id. '/edit') }}" class="btn btn-primary">Update</a>
                                        

                                        
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
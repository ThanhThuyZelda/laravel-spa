@extends('admin.dashboard')

@section('content')
    

    <div class="container" style="margin-top:20px; margin-bottom:50px;">
       <div class="row">
        <div class="col-md-12">
            <h2>Danh sách phản hồi</h2>
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
                    <a href="{{ url('admin/menu/feedback/create') }}" class="btn btn-success">Add New</a>
                </div>
            

            <table class="table">
                <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Họ tên</th>
                            <th>Tên dịch vụ</th>
                            <th>Hình ảnh</th>
                            <th>Nội dung</th>
                            <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @if(!empty($data) && $data->count())
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->PH_id }}</td>
                                <td>{{ $item->PH_fullname }}</td>
                                <td>{{ $item->PH_service }}</td>
                                <td>
                                    <img src="{{ asset("storage/app/public/images/$item->PH_img") }}" width="50px" height="70px">
                                </td>
                                <td>{{ $item->PH_content }}</td>
                               
                                <td>
                                    <form action="{{ url('admin/menu/feedback/'.$item->PH_id) }}" method="POST">
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
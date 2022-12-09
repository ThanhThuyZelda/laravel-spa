@extends('admin.dashboard')

@section('content')
    

    <div class="container" style="margin-top:20px; margin-bottom:50px;">
       <div class="row">
        <div class="col-md-12">
            <h2>Danh sách bài viết</h2>
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
                <a href="{{ url('admin/menu/news/create') }}" class="btn btn-success">Add New</a>
            </div>

            <table class="table">
                <thead>
                        <tr>
                            <th>Mã </th>
                            <th>Hình ảnh</th>
                            <th>Người đăng</th>
                            <th>Ngày đăng</th>
                            <th>Ngày cập nhập</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Nội dung</th>
                            <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @if(!empty($data) && $data->count())
                        @foreach ($data as $news)
                            <tr>
                                <td>{{ $news->TT_id }}</td>
                                <td>
                                    <img src="{{ asset("storage/app/public/images/$news->TT_img") }}" width="50px" height="70px">
                                </td>
                                <td>{{ $news->fullname}}</td>
                                <td>{{ $news->created_at}}</td>
                                <td>{{ $news->updated_at }}</td>
                                <td>{{ $news->TT_name }}</td>
                                <td>{{ $news->TT_des }}</td>
                                <td>{!! $news->TT_content !!}</td>
                                
                                <td>
                                    <form action="{{ url('admin/menu/news/'.$news->TT_id) }}" method="POST">
                                        
                                        <a href="{{ url('admin/menu/news/' .$news->TT_id. '/edit') }}" class="btn btn-primary">Update</a>
                                        

                                        
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
        <div class="row">{{ $data->appends(request()->all())->links() }}</div>
       </div>
    </div>

@endsection
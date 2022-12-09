@extends('admin.dashboard')

@section('content')
    

    <div class="container" style="margin-top:20px; margin-bottom:50px;">
       <div class="row">
        <div class="col-md-12">
            <h2>Danh sách các phòng</h2>
            <br>
            
            <form class="search-form" style="float: left" action="">
                <div class="input-group">
                    <input type="text" name="key" class="form-control" 
                    placeholder="Search">
                    <div class="input-group-append">
                    <button type="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                <!-- /.input-group -->
                </form>

              

            <div style="margin: 20px; float:right; margin-right: 80px;">
                <a href="{{ url('admin/menu/room/create') }}" class="btn btn-success">Add New</a>
            </div>

            <table class="table">
                <thead>
                        <tr>
                            <th>Mã phòng</th>
                            <th>Tên phòng</th>
                            <th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                    @if(!empty($room) && $room->count())
                        @foreach ($room as $item)
                            <tr>
                                <td>{{ $item->room_id }}</td>
                                <td>{{ $item->room_name }}</td>
                                <td>
                                    <form action="{{ url('admin/menu/room/'.$item->room_id) }}" method="POST">
                                        <a href="{{ url('admin/menu/room/' .$item->room_id. '/edit') }}" class="btn btn-primary">Update</a>
                                        

                                        
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
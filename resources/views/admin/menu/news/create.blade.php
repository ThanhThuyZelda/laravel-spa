@extends('admin.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Thêm bài viết</h2><hr>
                                <form action="{{ url('admin/menu/news') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <div class="form-group">
                                                <label id="TT_img">Hình ảnh</label>
                                                <input type="file" name="TT_img" id="TT_img" class="form-control form-control-user"  value="{{ old('TT_img') }}"> 
                                                <span class="text-danger small">@error('images') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label>Chọn  nhân viên</label>
                                                <select name="NV_id" class="form-control">
                                                <option value="0">--- Chọn  nhân viên ---</option>
                                                @foreach($staff as $item)
                                                        <option value="{{ $item->NV_id }}">{{ $item->fullname}}</option>
                                                @endforeach
                                                </select>
                                                <span class="text-danger small">@error('staff') {{ $message }} @enderror</span>
                                                
                                        </div>
                                        <div class="form-group">
                                                <label id="DL_sdt">Tiêu đề</label>
                                                <input type="text" name="TT_name" id="TT_name" placeholder="Tiêu đề ...." 
                                                class="form-control form-control-user" value="{{ old('TT_name') }}"> 
                                                <span class="text-danger small">@error('title') {{ $message }} @enderror</span>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label>Mô tả</label>
                                                <textarea name="TT_des" class="form-control form-control-user"> </textarea>
                                                <span class="text-danger small">@error('description') {{ $message }} @enderror</span>
                                        </div>

                                        
                                        <div class="form-group">
                                                <label>Nội dung</label>
                                                <textarea name="TT_content" id="TT_content" class="form-control form-control-user"> </textarea>
                                                <span class="text-danger small">@error('content') {{ $message }} @enderror</span>
                                        </div>

                                        <div class="md-3">
                                                <button class="btn btn-primary ">Submit</button>   
                                                <a href="{{ url('admin/menu/booking') }}" class="btn btn-danger">Back</a>     
                                        </div>        
                                <br>      
                                </form>
                                
                        </div>
                </div>
        
        </div>  
        <script src="//cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
        {{-- <script type = "text/javascript">
                CKEDITOR.replace("DV_nd");
        </script>  --}}
        {{-- <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script> --}}
        <script>
                CKEDITOR.replace('TT_content', {
                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                        filebrowserUploadMethod: 'form'
                });
        </script>     
@endsection
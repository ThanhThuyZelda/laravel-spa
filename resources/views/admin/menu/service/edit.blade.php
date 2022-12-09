@extends('admin.dashboard')


@section('content')
        <div class="container" style="margin-top:20px">
                <div class="row">
                        <div class="col-md-12">
                                <h2>Cập nhật dịch vụ</h2><hr>
                                <form action="{{  url('admin/menu/service/'.$service->DV_id ) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        @if(Session::has('success'))
                                                <div class="alert alert-success" role="alert"> 
                                                        {{ Session::get('success'); }}
                                                </div>
                                        @endif
                                        <input type="hidden" name="DV_id" value="{{ $service->DV_id }}">
                                        <div class="form-group">
                                                <label id="DV_name">Tên dịch vụ</label>
                                                <input type="text" name="DV_name" id="DV_name" placeholder="Enter Service name ...." 
                                                class="form-control form-control-user" value="{{ $service->DV_name }}"> 
                                                <span class="text-danger small">@error('DV_name') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Chọn loại dịch vụ</label>
                                                <select name="type_id" class="form-control">
                                                    <option value="0">--- Chọn loại dịch vụ ---</option>
                                                    @foreach($typeService as $item)
                                                            <option value="{{ $item->type_id }}" {{ $item->type_id == $service->type_id ? 'selected' : '' }}>{{ $item->type_name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger small">@error('service type') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="Dv_gia">Giá</label>
                                            <input type="text" name="Dv_gia" id="Dv_gia" placeholder="Enter Price ...." 
                                            class="form-control form-control-user"  value="{{ $service->Dv_gia }}" > 
                                            <span class="text-danger small">@error('price') {{ $message }} @enderror</span>
                                        </div>
                                       
                                        <div class="form-group">
                                                <label>Mô tả</label>
                                                <textarea name=" DV_mota" id=" DV_mota" placeholder="Enter Conent...." class="form-control form-control-user">{{ $service->DV_mota }}</textarea>
                                                <span class="text-danger small">@error('content') {{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                                <label>Nội dung</label>
                                                <textarea name="DV_nd" id="DV_nd" placeholder="Enter Conent...." class="form-control form-control-user">{{ $service->DV_nd }}</textarea>
                                                <span class="text-danger small">@error('content') {{ $message }} @enderror</span>
                                        </div>
   
                                        <div class="md-3">
                                                <button class="btn btn-primary ">Submit</button>   
                                                <a href="{{ url('admin/menu/service') }}" class="btn btn-danger">Back</a>     
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
                CKEDITOR.replace('DV_nd', {
                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                        filebrowserUploadMethod: 'form'
                });
        </script>  
@endsection
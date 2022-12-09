@extends('home')

@section('content')

<style>
    .mota{
        background-color:rgb(240, 200, 162);
        padding: 30px; 
        color: black;
    }
</style>


<div class="jumbotron jumbotron-fluid bg-jumbotron" >
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Dịch vụ</h3>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="{{URL::to('/trang-chu')}}">Trang chủ</a></p>
            <i class="far fa-circle px-3"></i>
            <p class="m-0">{{ $service->DV_name }}</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="name" >
        <h2 style="color:rgb(150, 108, 25)">{{ $service->DV_name }}</h2>
    </div>
    <hr>
    <div class="mota">
        <p style="color:black" >{{ $service->DV_mota }}</p>
    </div>
    <hr>
    <div class="nd">
        <p style="color:black;" >{!! $service->DV_nd !!}</p>
    </div>
    <div class="book btn my-2 "style="background-color: orange; margin-left: 500px">
        <a href="{{URL::to('/dat-lich')}}" class="btn my-2" style="color: white" >ĐẶT LỊCH HẸN</a>
    </div>
    
</div>


    
@endsection
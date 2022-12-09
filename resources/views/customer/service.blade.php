@extends('home')

@section('content')
<div class="jumbotron jumbotron-fluid bg-jumbotron" >
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Dịch vụ</h3>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="{{URL::to('/trang-chu')}}">Trang chủ</a></p>
            <i class="far fa-circle px-3"></i>
            <p class="m-0">Dịch vụ</p>
        </div>
    </div>
</div>
   
    <!-- Pricing Start -->
    <div class="container-fluid py-5" style="margin-top: 10px; padding-top: 20px;">
        
        <div class="container py-5">
            <h3 style="color: blue">1. ĐIỀU TRỊ DA</h3>
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('public/frontend/img/dtmun.JPG') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                        <div class="owl-carousel pricing-carousel">

                            @foreach($dieutri as $item1)
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h5 class="text-primary text-uppercase m-0">{{ $item1->DV_name }}</h5>
                                </div>
                                <div class="p-4">
                                    <p>{{ $item1->DV_mota }}</p>
                                    <a href="{{ url('dich-vu/' .$item1->DV_id)}} " class="btn btn-primary my-2">Xem chi tiết</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <hr>

        <div class="container py-5">
            <h3 style="color: rgb(0, 255, 42)">2. CHĂM SÓC DA</h3>
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('public/frontend/img/dtmun.JPG') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text p-4 p-lg-5 my-lg-5" style="background-color: rgb(159, 218, 206)">
                        <div class="owl-carousel pricing-carousel">

                            @foreach($csda as $item2)
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h5 class="text-primary text-uppercase m-0">{{ $item2->DV_name }}</h5>
                                </div>
                                <div class="p-4">
                                    <p>{{ $item2->DV_mota }}</p>
                                    <a href="{{ url('dich-vu/' .$item2->DV_id)}} " class="btn btn-primary my-2">Xem chi tiết</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="container py-5">
            <h3 style="color: rgb(255, 89, 0)">3. DỊCH VỤ KHÁC</h3>
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('public/frontend/img/dtmun.JPG') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text p-4 p-lg-5 my-lg-5" style="background-color: rgb(152, 125, 115)">
                        <div class="owl-carousel pricing-carousel">

                            @foreach($khac as $item3)
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h5 class="text-primary text-uppercase m-0">{{ $item3->DV_name }}</h5>
                                </div>
                                <div class="p-4">
                                    <p>{{ $item3->DV_mota }}</p>
                                    <a href="{{ url('dich-vu/' .$item3->DV_id)}} " class="btn btn-primary my-2">Xem chi tiết</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <hr>
    </div>
</div>
    <!-- Pricing End -->


@endsection
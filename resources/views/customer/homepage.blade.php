 @extends('home')
 


 @section('content')
 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5 pb-4" >
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="{{ asset('public/frontend/img/service-2.jpg') }}" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Chăm sóc da chuyên sâu</h3>
                        <p class="mx-md-5 px-5">Nhiều người vẫn quan niệm rằng chăm sóc da đơn giản chỉ cần rửa mặt đầy đủ, thoa kem dưỡng là đã đủ. Thế nhưng, để có một làn da đẹp, mịn màng, khỏe khoắn và luôn căng tràn sức sống thì cần thực hiện liệu trình “chăm sóc da chuyên sâu” tại SPA CENTER – Liệu pháp yêu thương làn da đẹp cùng năm tháng.</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{URL::to('/dat-lich')}}">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="{{ asset('public/frontend/img/trietlong.JPG') }}" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Triệt lông vĩnh viễn</h3>
                        <p class="mx-md-5 px-5">Triệt lông vĩnh viễn bằng công nghệ OPT được nhiều tín đồ đam mê làm đẹp ưa chuộng nhất hiện nay. Chúng giúp bạn tiết kiệm chi phí, đảm bảo an toàn. Vậy, công nghệ này có mang đến hiệu quả cao hay không?</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{URL::to('/dat-lich')}}">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item position-relative" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="{{ asset('public/frontend/img/dieutrimun.JPG') }}" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                        <h3 class="display-3 text-capitalize text-white mb-3">Điều trị mụn</h3>
                        <p class="mx-md-5 px-5">Điều trị mụn là vấn đề rất nhiều người quan tâm, mong muốn loại bỏ những nốt mụn xấu xí, gây mất thẩm mỹ trên gương mặt, cải thiện sức khỏe làn da tốt hơn. Vậy bạn đã biết đến phương pháp điều trị mụn chuyên sâu tại Viện thẩm mỹ SPA CENTER chưa?</p>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{URL::to('/dat-lich')}}">Đặt lịch hẹn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0">
                <img class="img-fluid w-100" src="{{ asset('public/frontend/img/about.jpg')}}" alt="">
            </div>
            <div class="col-lg-6">
                <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Giới thiệu trung tâm</h6>
                <h1 class="mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                <p class="pl-4 border-left border-primary">SPA CENTER là trung tâm thẩm mỹ và chăm sóc sắc đẹp hiện đại, với sứ mệnh cung cấp các dịch vụ chăm sóc sắc đẹp hàng đầu. Lấy chất lượng dịch vụ làm mục tiêu cốt lõi để tồn tại.</p>
                <p class="pl-4 border-left border-primary">SPA CENTER luôn cam kết mang đến cho khách hàng công nghệ tiên tiến nhất, giúp người Việt có cơ hội sử dụng dịch vụ thẩm mỹ đạt chuẩn Hàn Quốc ngay tại Việt Nam. Sự hài lòng của bạn chính là mục tiêu mà chúng tôi luôn theo đuổi.
                </p>
                <div class="row pt-3">
                    <div class="col-6">
                        <div class="bg-light text-center p-4">
                            <h3 class="display-4 text-primary" data-toggle="counter-up">{{ $nv }}</h3> 
                            <h6 class="text-uppercase">Kỹ thuật viên</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-light text-center p-4">
                            <h3 class="display-4 text-primary" data-toggle="counter-up">{{ $lichhen }}</h3>
                            <h6 class="text-uppercase">Khách hàng</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Open Hours Start -->
<div class="container-fluid py-5">
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="{{ asset('public/frontend/img/opening.jpg')}}" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-lg-6 pt-5 pb-lg-5">
            <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Giờ mở cửa</h6>
                <ul class="list-inline">
                    <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Thứ 2 - Thứ 6 : 9:00 AM - 7:00 PM</li>
                    <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Thứ 7 : 9:00 AM - 6:00 PM</li>
                    <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Chủ nhật : Closed</li>
                </ul>
                <a href="{{URL::to('/dat-lich')}}" class="btn btn-primary mt-2">Book Now</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Open Hours End -->


<!-- Team Start -->
<div class="container-fluid py-5">
<div class="container pt-5">
    <div class="row justify-content-center text-center">
        <div class="col-lg-6">
            <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
            <h1 class="mb-5">Đội ngũ kỷ thuật viên đầy uy tín</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($nhanvien as $item)
        
        <div class="col-lg-3 col-md-6">
            <div class="team position-relative overflow-hidden mb-5">
                <img class="img-fluid" src="{{ asset("storage/app/public/images/$item->avatar") }}" alt=""> 
                <div class="position-relative text-center">
                    <div class="team-text bg-primary text-white">
                        <h5 class="text-white text-uppercase">{{ $item->fullname }}</h5>
                        <p class="m-0">{{ $item->CV_name }}</p>
                    </div>
                    <div class="team-social bg-dark text-center">
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>




@endsection
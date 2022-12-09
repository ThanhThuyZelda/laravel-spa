@extends('home')

@section('content')

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-list clearfix">
                        @foreach($data as $item)
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="{{ url('tin-tuc/' .$item->TT_id)}}" title="">
                                        <img src="{{ asset("storage/app/public/images/$item->TT_img") }}" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4 ><a href = "{{ url('tin-tuc/' .$item->TT_id)}}"  title="" style="color: black">{{ $item->TT_name }}</a></h4>
                                <p>{{ $item->TT_des }}</p>
                                {{-- <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Nguồn</a></small> --}}
                                <small>{{ $item->updated_at }}</small>
                                <small><a href="#" title="">by {{ $item->fullname }}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        @endforeach
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                
            </div><!-- end col -->

            
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
@section('categories')
    <!-- Categories Start -->
    @foreach($categories as $category)
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">{{$category->h6}}</h6>
                <h1 class="mb-5">{{$category->h1}}</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="./categoriesimage/{{$category->image1}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                     style="margin: 1px;">
                                    <h5 class="m-0">{{$category->h5_1}}</h5>
                                    <small class="text-primary">{{$category->small}}</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="./categoriesimage/{{$category->image2}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                     style="margin: 1px;">
                                    <h5 class="m-0">{{$category->h5_2}}</h5>
                                    <small class="text-primary">{{$category->small}}</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="./categoriesimage/{{$category->image3}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                     style="margin: 1px;">
                                    <h5 class="m-0">{{$category->h5_3}}</h5>
                                    <small class="text-primary">{{$category->small}}</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="./categoriesimage/{{$category->image4}}" alt=""
                             style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                             style="margin:  1px;">
                            <h5 class="m-0">{{$category->h5_4}}</h5>
                            <small class="text-primary">{{$category->small}}</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Categories Start -->
@endsection

@extends('frontend.layout.master')
@section('style')
    @parent
    <link rel="stylesheet" href="/client/resources/plugin/lightSlider/css/lightslider.min.css">

@endsection
@section('content')
    <div class=" mx-0">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/client/#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="section w-100 ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="w-100 gallary-area">
                        <div class="ribbon">Vip</div>
                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                            <li data-thumb="/client/resources/img/cS-1.jpg">
                                <img src="/client/resources/img/cS-1.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-2.jpg">
                                <img src="/client/resources/img/cS-2.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-3.jpg">
                                <img src="/client/resources/img/cS-3.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-4.jpg">
                                <img src="/client/resources/img/cS-4.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-5.jpg">
                                <img src="/client/resources/img/cS-5.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-6.jpg">
                                <img src="/client/resources/img/cS-6.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-7.jpg">
                                <img src="/client/resources/img/cS-7.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-8.jpg">
                                <img src="/client/resources/img/cS-8.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-9.jpg">
                                <img src="/client/resources/img/cS-9.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-10.jpg">
                                <img src="/client/resources/img/cS-10.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-11.jpg">
                                <img src="/client/resources/img/cS-11.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-12.jpg">
                                <img src="/client/resources/img/cS-12.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-13.jpg">
                                <img src="/client/resources/img/cS-13.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-14.jpg">
                                <img src="/client/resources/img/cS-14.jpg" />
                            </li>
                            <li data-thumb="/client/resources/img/thumb/cS-15.jpg">
                                <img src="/client/resources/img/cS-15.jpg" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="w-100 pb-4">
                        <div class="host-area">
                            <div class="avatar-container">
                                <img class="mini-avatar" src="/client/resources/img/cS-1.jpg" alt="">
                            </div>
                            <div class="host-detail">
                                <div class="host-name">
                                <span>
                                    {{$post->user_name}}
                                </span>
                                </div>
                                <span class="active-status">5 phút trước</span>


                            </div>
                            <div class="view-profile-btn">
                                <a class="btn btn-outline-warning">Xem trang</a>
                            </div>
                        </div>
                        <div class="rating p-2 fw-bold">
                            <span>Đánh giá: </span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <div class="w-100 pb-2">
                        <a type="phone"  href="/client/" class="btn btn-success w-100 mb-2"><i class="fa-solid fa-phone"></i> Call now </a>
                        <a type="phone"  href="/client/" class="btn btn-warning w-100 mb-2"><i class="fa-solid fa-dollar-sign"></i> Deposit</a>
                        <a type="phone"  href="/client/" class="btn btn-secondary w-100 mb-2"><i class="fa-solid fa-envelope"></i> Email now </a>
                        <a type="phone"  href="/client/" class="btn btn-danger w-100 mb-2"><i class="fa-solid fa-heart"></i> Save post </a>

                    </div>
                    <h6 class="post-detail-title">
                        {{$post->title}}
                    </h6>
                    <div class="w-100">

                        <h6 class="text-danger ">Mô tả :</h6>
                        <div class="w-100">
                            {{$post->description}}
                        </div>

                    </div>
                    <div class="w-100">

                        <div class="row">
                            <div class="col-md-6 pb-2">
                                <i class="fa-solid fa-house-user"></i><span> Diện tích: {{$post->area}} m2</span>
                            </div>
                            <div class="col-md-6 pb-2">
                                <i class="fa-solid fa-sack-dollar"></i><span> Price: {{$post->price}} {{config('AppConstant.system_currency_unit')}}</span>
                            </div>
                            <div class="col-md-6 pb-2">
                                <i class="fa-solid fa-dollar"></i><span> Deposit : {{$post->deposit_amount }} {{config('AppConstant.system_currency_unit')}}</span>
                            </div>
                            <div class="col-md-6 pb-2">
                                <i class="fa-solid fa-building"></i><span> Diện tích: 500 m2</span>
                            </div>
                            <div class="col-md-6 pb-2">
                                <i class="fa-solid fa-house-user"></i><span> Diện tích: 500 m2</span>
                            </div>
                            <div class="col-md-6 pb-2">
                                <i class="fa-solid fa-house-user"></i><span> Diện tích: 500 m2</span>
                            </div>
                            <div class="col-md-6 pb-2">
                                <i class="fa-solid fa-house-user"></i><span> Diện tích: 500 m2</span>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="comment-area">
                        <h4 class="mb-4">
                            Bình luận
                        </h4>
                        <div class="comment-group w-100">
                            <div class="comment-item">
                                <div class="text-primary comment-user">
                                    <div class="avatar-container">
                                        <img class="mini-avatar" src="/client/resources/img/cS-1.jpg" alt="">
                                    </div>
                                    <span class="fw-bold">Người dùng</span>
                                </div>
                                <p class="bg-">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at autem cumque debitis distinctio dolores fuga, illum molestiae nemo neque nisi optio perferendis recusandae rem reprehenderit saepe ut veniam vero.</p>
                            </div>
                            <div class="comment-item">
                                <div class="text-primary comment-user">
                                    <div class="avatar-container">
                                        <img class="mini-avatar" src="/client/resources/img/cS-1.jpg" alt="">
                                    </div>
                                    <span class="fw-bold">Người dùng</span>
                                </div>
                                <p class="bg-">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at autem cumque debitis distinctio dolores fuga, illum molestiae nemo neque nisi optio perferendis recusandae rem reprehenderit saepe ut veniam vero.</p>
                            </div>
                            <div class="comment-item">
                                <div class="text-primary comment-user">
                                    <div class="avatar-container">
                                        <img class="mini-avatar" src="/client/resources/img/cS-1.jpg" alt="">
                                    </div>
                                    <span class="fw-bold">Người dùng</span>
                                </div>
                                <p class="bg-">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at autem cumque debitis distinctio dolores fuga, illum molestiae nemo neque nisi optio perferendis recusandae rem reprehenderit saepe ut veniam vero.</p>
                            </div>
                        </div>

                        <form class="leave-comment-textarea">

                            <textarea class="form-control mb-2" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <div class="w-100 d-flex justify-content-end">
                                <button class="btn btn-primary" >Leave a comment</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--section specific slider-->
    <div class="section w-100">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <h4 class="section-title">
                        Bài viết liên quan
                    </h4>
                </div>
            </div>
            <div class="row" id="slider">

                <div class="col-md-3 ">

                    <div class="post-item-container w-100 shadow  ">
                        <div class="featured">
                            <div class="ribbon">Vip</div>
                        </div>
                        <a class="like-btn liked">
                            <i class="fa-brands fa-gratipay"></i>
                        </a>
                        <a href="/client/detail.html" class="post-item-link-wrapper">
                            <div class="post-item-img-container w-100 ">
                                <img class="post-item-img" src="/client/resources/img/land2.jpg" alt="">
                                <div class="img-count">
                                    <i class="fa-solid fa-images"></i> <span>20</span>
                                </div>
                            </div>
                            <div class="w-100 post-item-body ">
                                <div>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-primary">Ở ghép</span>
                                    <span class="badge bg-info">cho thuê chung cư</span>
                                    <span class="badge bg-danger">Bán nhà</span>
                                    <span class="badge bg-primary">Ở ghép</span>


                                </div>
                                <p class="post-name">Post Name</p>
                                <span>45 m2</span>
                                <p class="text-danger post-price">500.000.000 vnd/tháng </p>
                                <p class="text-secondary post-date">10 giờ trước  </p>

                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-md-3 ">

                    <div class="post-item-container w-100 shadow  ">
                        <div class="featured">
                            <div class="ribbon">Vip</div>
                        </div>
                        <a class="like-btn liked">
                            <i class="fa-brands fa-gratipay"></i>
                        </a>
                        <a href="/client/detail.html" class="post-item-link-wrapper">
                            <div class="post-item-img-container w-100 ">
                                <img class="post-item-img" src="/client/resources/img/land2.jpg" alt="">
                                <div class="img-count">
                                    <i class="fa-solid fa-images"></i> <span>20</span>
                                </div>
                            </div>
                            <div class="w-100 post-item-body ">
                                <div>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-primary">Ở ghép</span>
                                    <span class="badge bg-info">cho thuê chung cư</span>
                                    <span class="badge bg-danger">Bán nhà</span>
                                    <span class="badge bg-primary">Ở ghép</span>


                                </div>
                                <p class="post-name">Post Name</p>
                                <span>45 m2</span>
                                <p class="text-danger post-price">500.000.000 vnd/tháng </p>
                                <p class="text-secondary post-date">10 giờ trước  </p>

                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-md-3 ">

                    <div class="post-item-container w-100 shadow  ">
                        <div class="featured">
                            <div class="ribbon">Vip</div>
                        </div>
                        <a class="like-btn liked">
                            <i class="fa-brands fa-gratipay"></i>
                        </a>
                        <a href="/client/detail.html" class="post-item-link-wrapper">
                            <div class="post-item-img-container w-100 ">
                                <img class="post-item-img" src="/client/resources/img/land2.jpg" alt="">
                                <div class="img-count">
                                    <i class="fa-solid fa-images"></i> <span>20</span>
                                </div>
                            </div>
                            <div class="w-100 post-item-body ">
                                <div>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-primary">Ở ghép</span>
                                    <span class="badge bg-info">cho thuê chung cư</span>
                                    <span class="badge bg-danger">Bán nhà</span>
                                    <span class="badge bg-primary">Ở ghép</span>


                                </div>
                                <p class="post-name">Post Name</p>
                                <span>45 m2</span>
                                <p class="text-danger post-price">500.000.000 vnd/tháng </p>
                                <p class="text-secondary post-date">10 giờ trước  </p>

                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-md-3 ">

                    <div class="post-item-container w-100 shadow  ">
                        <div class="featured">
                            <div class="ribbon">Vip</div>
                        </div>
                        <a class="like-btn liked">
                            <i class="fa-brands fa-gratipay"></i>
                        </a>
                        <a href="/client/detail.html" class="post-item-link-wrapper">
                            <div class="post-item-img-container w-100 ">
                                <img class="post-item-img" src="/client/resources/img/land2.jpg" alt="">
                                <div class="img-count">
                                    <i class="fa-solid fa-images"></i> <span>20</span>
                                </div>
                            </div>
                            <div class="w-100 post-item-body ">
                                <div>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-primary">Ở ghép</span>
                                    <span class="badge bg-info">cho thuê chung cư</span>
                                    <span class="badge bg-danger">Bán nhà</span>
                                    <span class="badge bg-primary">Ở ghép</span>


                                </div>
                                <p class="post-name">Post Name</p>
                                <span>45 m2</span>
                                <p class="text-danger post-price">500.000.000 vnd/tháng </p>
                                <p class="text-secondary post-date">10 giờ trước  </p>

                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-md-3 ">

                    <div class="post-item-container w-100 shadow  ">
                        <div class="featured">
                            <div class="ribbon">Vip</div>
                        </div>
                        <a class="like-btn liked">
                            <i class="fa-brands fa-gratipay"></i>
                        </a>
                        <a href="/client/detail.html" class="post-item-link-wrapper">
                            <div class="post-item-img-container w-100 ">
                                <img class="post-item-img" src="/client/resources/img/land2.jpg" alt="">
                                <div class="img-count">
                                    <i class="fa-solid fa-images"></i> <span>20</span>
                                </div>
                            </div>
                            <div class="w-100 post-item-body ">
                                <div>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-primary">Ở ghép</span>
                                    <span class="badge bg-info">cho thuê chung cư</span>
                                    <span class="badge bg-danger">Bán nhà</span>
                                    <span class="badge bg-primary">Ở ghép</span>


                                </div>
                                <p class="post-name">Post Name</p>
                                <span>45 m2</span>
                                <p class="text-danger post-price">500.000.000 vnd/tháng </p>
                                <p class="text-secondary post-date">10 giờ trước  </p>

                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-md-3 ">

                    <div class="post-item-container w-100 shadow  ">
                        <div class="featured">
                            <div class="ribbon">Vip</div>
                        </div>
                        <a class="like-btn liked">
                            <i class="fa-brands fa-gratipay"></i>
                        </a>
                        <a href="/client/detail.html" class="post-item-link-wrapper">
                            <div class="post-item-img-container w-100 ">
                                <img class="post-item-img" src="/client/resources/img/land2.jpg" alt="">
                                <div class="img-count">
                                    <i class="fa-solid fa-images"></i> <span>20</span>
                                </div>
                            </div>
                            <div class="w-100 post-item-body ">
                                <div>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-primary">Ở ghép</span>
                                    <span class="badge bg-info">cho thuê chung cư</span>
                                    <span class="badge bg-danger">Bán nhà</span>
                                    <span class="badge bg-primary">Ở ghép</span>


                                </div>
                                <p class="post-name">Post Name</p>
                                <span>45 m2</span>
                                <p class="text-danger post-price">500.000.000 vnd/tháng </p>
                                <p class="text-secondary post-date">10 giờ trước  </p>

                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-md-3 ">

                    <div class="post-item-container w-100 shadow  ">
                        <div class="featured">
                            <div class="ribbon">Vip</div>
                        </div>
                        <a class="like-btn liked">
                            <i class="fa-brands fa-gratipay"></i>
                        </a>
                        <a href="/client/detail.html" class="post-item-link-wrapper">
                            <div class="post-item-img-container w-100 ">
                                <img class="post-item-img" src="/client/resources/img/land2.jpg" alt="">
                                <div class="img-count">
                                    <i class="fa-solid fa-images"></i> <span>20</span>
                                </div>
                            </div>
                            <div class="w-100 post-item-body ">
                                <div>
                                    <span class="badge bg-success">Success</span>
                                    <span class="badge bg-primary">Ở ghép</span>
                                    <span class="badge bg-info">cho thuê chung cư</span>
                                    <span class="badge bg-danger">Bán nhà</span>
                                    <span class="badge bg-primary">Ở ghép</span>


                                </div>
                                <p class="post-name">Post Name</p>
                                <span>45 m2</span>
                                <p class="text-danger post-price">500.000.000 vnd/tháng </p>
                                <p class="text-secondary post-date">10 giờ trước  </p>

                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--end section specific slider-->
@endsection

@section('script')
    @parent
    <script src="/client/resources/plugin/lightSlider/js/lightslider.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 3,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });

            $("#slider").lightSlider({
                loop:true,
                pager: false,
                keyPress:false,
                item: 4,
                responsive : [
                    {
                        breakpoint:800,
                        settings: {
                            item:3,
                            slideMove:1,
                            slideMargin:6,
                        }
                    },
                    {
                        breakpoint:480,
                        settings: {
                            item:2,
                            slideMove:1
                        }
                    }
                ]
            });


        });
    </script>
@endsection

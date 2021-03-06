@extends('frontend.layout.master')
@section('style')
    @parent
    <style>
        body{
            background-image: url("/client/resources/img/bg.jpeg");
            background-repeat: no-repeat;
            background-position: top center;
            background-size: contain;
        }
    </style>
@endsection

@section("content")
    <!--slider-->
    <div class="container section w-100">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="/client/resources/img/banner1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!--                    <h5>First slide label</h5>-->
                        <!--                    <p>Some representative placeholder content for the first slide.</p>-->
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="/client/resources/img/banner2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!--                    <h5>Second slide label</h5>-->
                        <!--                    <p>Some representative placeholder content for the second slide.</p>-->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/client/resources/img/banner3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!--                    <h5>Third slide label</h5>-->
                        <!--                    <p>Some representative placeholder content for the third slide.</p>-->
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--end slider-->

    <!--category -->
    <div class="section w-100">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <h4>
                        Danh m???c
                    </h4>
                </div>
                @foreach($categories as $category)
                <div class="col-lg-3 col-sm-6">
                    <a class="category-item shadow " href="/posts/category/{{$category->id}}">
                        <div class="category-icon rounded-circle bg-yl">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <div class="category-name">
                            {{$category->description}}
                        </div>

                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!--end category-->

    <!--section specific-->
    <x-post-grid-list :posts="$latest" title="B??i ????ng m???i nh???t" url="/posts/latest" />
    <!--end section specific-->

    <!--section specific slider-->
    <x-post-slider-list :posts="$for_sold_posts" title="B??n nh??" url=""/>
    <!--end section specific slider-->

    <!--section specific-->
    <x-post-grid-list :posts="$for_rent_posts" title="Cho thu?? nh??" url="/posts/category/2" />
    <!--end section specific-->

    <!--section list view -->
    <x-post-vertical-list :posts="$shared_room_post" title="T??m ng?????i ??? gh??p" url="/posts/category/1" />
    <!--end section  list view-->
@endsection

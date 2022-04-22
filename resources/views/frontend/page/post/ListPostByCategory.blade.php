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
                    <li class="breadcrumb-item active" aria-current="page">{{$category->description}}</li>
                </ol>
            </nav>
            <div class="row">
                @foreach($posts as $p)
                    <x-post-item :post="$p" />
                @endforeach
                <div class="col-12">
                    {{ $posts->links() }}
                </div>
            </div>


        </div>
    </div>

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

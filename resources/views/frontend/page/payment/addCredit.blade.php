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
                    <li class="breadcrumb-item active" aria-current="page">Add Credit</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="section w-100 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <form class="d-flex w-50" action="{{route('createPayment')}}" method="post">
                            @csrf
                            <input data-type='currency' id="amount" name="amount" type="text" class="form-control" placeholder="enter amount">
                            <button  class="btn btn-success" type="submit">purchase</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </div>


@endsection

@section('script')
    @parent
    <script src="/client/resources/plugin/lightSlider/js/lightslider.min.js"></script>
    <script src="/admin/js/common.js"></script>

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

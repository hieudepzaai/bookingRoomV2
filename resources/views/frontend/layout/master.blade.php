<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('frontend.layout.header')


</head>
<body>
    @include('frontend.layout.nav')
    @yield('content')



<div class="footer w-100 bg-yl">
    <span class="text-white fw-bold">Copyright @2022</span>
</div>
</body>
@include('frontend.layout.script')
<script>
    // $(".js-example-placeholder-single").select2({
    //     placeholder: "select",
    //     allowClear: true,
    // });


</script>

<script>
    $(document).ready(function () {
        $(".post-slider").lightSlider({
            loop: true,
            keyPress: true,
            item: 4,
            responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        item: 2,
                        slideMove: 1
                    }
                }
            ]
        });

    });
</script>
</html>

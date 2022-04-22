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

            </div>

        </div>

    </div>


@endsection

@section('script')
    @parent
    <script src="/client/resources/plugin/lightSlider/js/lightslider.min.js"></script>
    <script src="/admin/js/common.js"></script>

    <script>
    </script>
@endsection

@extends('frontend.layout.master')

@section('style')
    @parent
    <link rel="stylesheet" href="/client/resources/plugin/lightSlider/css/lightslider.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />

@endsection


@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-success">Congratulation </h1>
            <div class="col-12">
                <div class="alert alert-success">
                    Your have created post  #{{$post->id}} successfully
                </div>
                <div class="alert alert-warning">
                    Your have purchased  {{$transaction->amount}} for post #{{$post->id}} successfully
                </div>
            </div>


        </div>
    </div>


@endsection
@section('script')
    @parent
    <script>



    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.18.0/ckeditor.js"></script>
    <script src="/admin/js/common.js"></script>
    <script src="/admin/js/post/editor.js"></script>
    <script src="/admin/js/post/addPost.js"></script>
@endsection

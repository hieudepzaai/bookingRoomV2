@extends('frontend.layout.master')

@section('style')
    @parent
    <link rel="stylesheet" href="/client/resources/plugin/lightSlider/css/lightslider.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />

@endsection


@section('content')
    <div class="container">
        <div class="row">
            <h1>Continue to purchase post {{$post->id}}</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

            </div>
            <div class="col-12">

                <h3>Do you want to purchase your post for vip</h3>
                <p>Total Amount: </p>
                <form action="">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <input type="submit" class="btn btn-success">
                </form>
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

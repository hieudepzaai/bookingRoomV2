@extends('frontend.layout.master')

@section('style')
    @parent
    <link rel="stylesheet" href="/client/resources/plugin/lightSlider/css/lightslider.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css"/>
    <link rel="stylesheet" href="/client/resources/plugin/ImageUploader/dist/image-uploader.min.css" />

@endsection


@section('content')
    <div class="container">
        <div class="row">
            <h1>Create new Post</h1>
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
                <form class="w-100" method="post" action="{{route('user.doCreatePost')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="email">Category</label>
                        <select class="select_category_id form-select " id="category_id"
                                name="category_id" {{ old('category_id') }}>
                            <option></option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Post Vip Type</label>
                        <select class="select_price_type_id form-select " id="price_type_id" name="price_type_id">
                            <option></option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">Number of unit</label>
                        <input value="1" required type="number" class="form-control" id="title"
                               placeholder="Enter title" name="number_of_post_time_unit">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email">title</label>
                        <input required type="text" class="form-control" id="title" placeholder="Enter title"
                               name="title">
                    </div>
                    <div class="col-md-12 mb-3 mt-3">
                        <label for="email">description</label>
                        <textarea class="form-control" id="description" placeholder="Enter description"
                                  name="description"
                                  cols="30" rows="10"></textarea>
                    </div>


                    <div class="row">
                        <div class="col-md-3 mb-3 mt-3">
                            <label for="email">City</label>
                            {{--                <input  required type="text" class="form-control" id="province_id" placeholder="Enter province_id" name="province_id">--}}
                            <select class="select_province_id form-select " id="province_id" name="province_id">
                                <option></option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3 mt-3">
                            <label for="email">District</label>
                            <select class="select_district_id form-select " id="district_id" name="district_id">
                                <option></option>
                            </select>

                        </div>
                        <div class="col-md-3 mb-3 mt-3">
                            <label for="email">Ward</label>
                            <select class="select_ward_id form-select " id="ward_id" name="ward_id">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3 mt-3">
                            <label for="email">Street</label>
                            <select class="select_street_id form-select " id="street_id" name="street_id">
                                <option></option>
                            </select>
                        </div>


                    </div>


                    <div class="mb-3 mt-3">
                        <label for="email">address_detail</label>
                        <input required type="text" class="form-control" id="address_detail"
                               placeholder="Enter address_detail"
                               name="address_detail">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="email">price per month</label>
                        <input required type="text" class="form-control" id="price" placeholder="Enter price"
                               name="price" data-type='currency'>
                    </div>


                    <div class="mb-3 mt-3">
                        <label for="email">area</label>
                        <input required type="text" class="form-control" id="area" placeholder="Enter area" name="area">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="img">featured image</label>
                        <div class="input-images"></div>



                        <button id="addImg" class="btn btn-primary mt-3">+ add image</button>


                    </div>


                    <div class="mb-3 mt-3">
                        <label for="email">deposit_amount</label>
                        <input required type="text" class="form-control" id="deposit_amount"
                               placeholder="Enter deposit_amount" data-type='currency'
                               name="deposit_amount">
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3 mt-3">
                                <label for="wc_count">Number of WC</label>
                                <input required type="number" class="form-control" id="wc_count"
                                       placeholder="Enter number of wc"
                                       name="wc_count">
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 mt-3">
                                <label for="bed_room_count">number of bed room</label>
                                <input required type="number" class="form-control" id="bed_room_count"
                                       placeholder="Enter bed_room_count"
                                       name="bed_room_count">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 mt-3">
                                <label for="balcony_direction">balcony direction</label>
                                <input required type="text" class="form-control" id="balcony_direction"
                                       placeholder="Enter balcony_direction"
                                       name="balcony_direction">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 mt-3">
                                <label for="type_of_apartment">type of apartment</label>
                                <input required type="text" class="form-control" id="type_of_apartment"
                                       placeholder="Enter type of apartment"
                                       name="type_of_apartment">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3 mt-3">
                                <label for="interior_condition">Interior condition</label>
                                <input required type="text" class="form-control" id="interior_condition"
                                       placeholder="Enter interior_condition"
                                       name="interior_condition">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary mb-5">Create</button>
                </form>
            </div>


        </div>
    </div>


@endsection
@section('script')
    @parent
    <script src="/client/resources/plugin/ImageUploader/dist/image-uploader.min.js"></script>
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        // var clearImg = document.getElementById("clearImg");
        // clearImg.addEventListener("click", function (event) {
        //     event.preventDefault();
        //     document.getElementById('img').value = null;
        //     frame.src = "";
        // });
        var addImg = document.getElementById("addImg");
        addImg.addEventListener("click", function (event) {
            event.preventDefault();
            console.log("adming")
            var element = `<input required type="file" class="form-control" id="img" name="img" onchange="preview()">`
            document.getElementById('img-container').innerHTML += element;
            frame.src = "";
        });

        $('.input-images').imageUploader({
            extensions: ['.jpg','.jpeg','.png','.gif','.svg'],
            imagesInputName: 'img',
            preloadedInputName: 'img',
            label: 'Drag & Drop files here or click to browse'
        });


    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.18.0/ckeditor.js"></script>
    <script src="/admin/js/common.js"></script>
    <script src="/admin/js/post/editor.js"></script>
    <script src="/admin/js/post/addPost.js"></script>

@endsection

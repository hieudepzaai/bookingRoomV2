@extends('backend.layout.mainLayout')

@section('style')

@endsection

@section('title')
    Create new post
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <form class="w-100" method="post" action="{{route('post.create')}}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 mt-3">
                    <label for="email">title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                </div>
                <div class="col-md-12 mb-3 mt-3">
                    <label for="email">description</label>
                    <textarea class="form-control" id="description" placeholder="Enter description" name="description"
                              cols="30" rows="10"></textarea>
                </div>


                <div class="mb-3 mt-3">
                    <label for="email">category_id</label>
                    <select class="select_category_id form-select " id="category_id" name="category_id">
                        <option></option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3 mt-3">
                        <label for="email">City</label>
                        {{--                <input type="text" class="form-control" id="province_id" placeholder="Enter province_id" name="province_id">--}}
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
                    <input type="text" class="form-control" id="address_detail" placeholder="Enter address_detail"
                           name="address_detail">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">price</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" data-type='currency'>
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">price_type</label>
                    <select class="select_price_type form-select " id="price_type" name="price_type">
                        <option></option>
                    </select>
                </div>


                <div class="mb-3 mt-3">
                    <label for="email">area</label>
                    <input type="text" class="form-control" id="area" placeholder="Enter area" name="area">
                </div>

                <div class="mb-3 mt-3">
                    <label for="img">featured image</label>
                    <input type="file" class="form-control" id="img"  name="img" onchange="preview()">
                    <div class="img-preview">
                        <img id="frame" src="" class="img-fluid mw-100 d-block pt-2" style="max-height: 300px ;object-fit: contain;object-position: center" />
                        <div class="w-100">
                            <button id="clearImg" class="btn btn-danger mt-3">Clear img</button>
                        </div>
                    </div>

                </div>



                <div class="mb-3 mt-3">
                    <label for="email">deposit_amount</label>
                    <input type="text" class="form-control" id="deposit_amount" placeholder="Enter deposit_amount" data-type='currency'
                           name="deposit_amount">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">status</label>
{{--                    <input type="text" class="form-control" id="status" placeholder="Enter status" name="status">--}}
                    <select class="select_status form-select " id="price_type" id="status" name="status">
                                                <option value=""></option>

                        @foreach(Config::get('AppConstant.post_status') as $status)
                            <option value="{{$status}}">{{$status}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">created_by</label>
                    <input type="text" class="form-control" id="created_by" placeholder="Enter created_by"
                           name="created_by">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    </div>

@endsection
@section('script')
    @parent
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        var clearImg = document.getElementById("clearImg");
        clearImg.addEventListener("click", function(event){
            event.preventDefault();
            document.getElementById('img').value = null;
            frame.src = "";
        })

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.18.0/ckeditor.js"></script>
    <script src="/admin/js/common.js"></script>
    <script src="/admin/js/post/editor.js"></script>
    <script src="/admin/js/post/addPost.js"></script>
@endsection

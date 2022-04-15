@extends('backend.layout.mainLayout')

@section('style')

@endsection

@section('title')
    Edit Post {{$post->id}}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form class="w-100" method="post" action="{{route('post.create')}}">
                @csrf

                <div class="mb-3 mt-3">
                    <label for="email">title</label>
                    <input type="text" value="{{$post->title}}" class="form-control" id="title"
                           placeholder="Enter title" name="title">
                </div>
                <div class="col-md-12 mb-3 mt-3">
                    <label for="email">description</label>
                    <textarea class="form-control" id="description" placeholder="Enter description" name="description"
                              cols="30" rows="10">{!! $post->description !!}</textarea>
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
                            <option value="{{$post->province_id}}">{{$post->province_name}}</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3 mt-3">
                        <label for="email">District</label>
                        <select class="select_district_id form-select " id="district_id" name="district_id">
                            <option value="{{$post->district_id}}">{{$post->district_name}}</option>

                        </select>

                    </div>
                    <div class="col-md-3 mb-3 mt-3">
                        <label for="email">Ward</label>
                        <select class="select_ward_id form-select " id="ward_id" name="ward_id">
                            <option value="{{$post->ward_id}}">{{$post->ward_name}}</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mt-3">
                        <label for="email">Street</label>
                        <select class="select_street_id form-select " id="street_id" name="street_id">
                            <option value="{{$post->street_id}}">{{$post->street_name}}</option>
                        </select>
                    </div>


                </div>


                <div class="mb-3 mt-3">
                    <label for="email">address_detail</label>
                    <input type="text" class="form-control" id="address_detail" placeholder="Enter address_detail" value="{{$post->address_detail}}"
                           name="address_detail">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">price</label>
                    <input type="text" class="form-control" value="{{$post->price}}" id="price"
                           placeholder="Enter price" name="price">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">price_type</label>
                    <select class="select_price_type form-select " id="price_type" name="price_type">
                        {{--                        <option value="{{$post->price_type_id}}">{{$post->post_premium_type}}</option>--}}
                        <option value=""></option>
                    </select>
                </div>


                <div class="mb-3 mt-3">
                    <label for="email">area</label>
                    <input type="text" class="form-control" id="area" placeholder="Enter area" name="area" value="{{$post->area}}">
                </div>

                <div class="mb-3 mt-3">
                    <label for="img">featured image</label>
                    <input type="file" class="form-control" id="img" name="img" onchange="preview()" src="{{$post->img}}">
                    <div class="img-preview">
                        <img id="frame" src="{{$post->img}}" class="img-fluid mw-100 d-block pt-2"
                             style="max-height: 300px ;object-fit: contain;object-position: center"/>
                        <div class="w-100">
                            <button id="clearImg" class="btn btn-danger mt-3">Clear img</button>
                        </div>
                    </div>

                </div>


                <div class="mb-3 mt-3">
                    <label for="email">deposit_amount</label>
                    <input type="text" class="form-control" id="deposit_amount" placeholder="Enter deposit_amount"
                           value="{{$post->deposit_amount}}"
                           name="deposit_amount">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">status</label>
{{--                    <input type="text" class="form-control" id="status" placeholder="Enter status" name="status">--}}
                    <select class="select_status form-select " id="price_type" id="status" name="status">
                        <option value=""></option>
                        @foreach(Config::get('AppConstant.post_status') as $status)
                            <option @if($post->status == $status)  selected @endif value="{{$status}}">{{$status}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">created_by</label>
                    <input type="text" class="form-control" id="created_by" placeholder="Enter created_by" value="{{$post->user_name}}"
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
        clearImg.addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById('img').value = null;
            frame.src = "";
        })

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.18.0/ckeditor.js"></script>
    <script src="/admin/js/common.js"></script>
    <script src="/admin/js/post/editor.js"></script>
    <script src="/admin/js/post/addPost.js"></script>
    <script>

        function setSelectCategories() {
            // set select categories
            let categorySelect = $('#category_id');
            let option = new Option("{{$post->category_name}}", "{{$post->category_id}}", true, true);
            categorySelect.append(option).trigger('change');
            categorySelect.trigger({
                type: 'select2:select',
                params: {
                    data: {
                        text: "{{$post->category_name}}",
                        id: "{{$post->category_id}}"
                    }
                }
            });
        }

        function setSelectPriceType() {
            // set select categories
            let priceTypeSelect = $('#price_type');
            var selectedPriceText = "{{$post->post_premium_type}}" + " " + "{{$post->price_per_unit}}" + " " + "VND" + "/" + "{{$post->price_per_unit}}";
            let option = new Option(selectedPriceText, "{{$post->price_type_id}}", true, true);
            priceTypeSelect.append(option).trigger('change');
            priceTypeSelect.trigger({
                type: 'select2:select',
                params: {
                    data: {
                        text: selectedPriceText,
                        id: "{{$post->price_type_id}}"
                    }
                }
            });
        }

        setSelectCategories();
        setSelectPriceType();


    </script>
@endsection

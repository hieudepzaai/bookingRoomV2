@extends('backend.layout.mainLayout')

@section('style')
    <link rel="stylesheet" href="/admin/css/post/common.css">
@endsection

@section('title')
    Post List
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <table id="data_table_post" class="table table-striped table-responsive-sm">
                <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>Detail</th>
                    <th>category</th>
                    <th>price_type_id</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>
                            <img class="post-img-table" src="{{$post->img}}" alt="">
                            <span class="fw-bold d-block">Description: </span>
                            <div class="w-100">
                                {!! $post->description !!}

                            </div>
                            <div>
                                <span class="fw-bold ">Category: </span>
                                <span class="badge bg-success text-white me-4">  {{$post->category_name}}  </span>
                            </div>

                            <span class="fw-bold ">Area: </span>
                            <span
                                class="badge bg-success text-white me-4">  {{$post->area}} {!! Config::get("AppConstant.system_area_unit.display_html") !!} </span>

                            <span class="fw-bold ">Deposit amount: </span>
                            <span
                                class="badge bg-secondary text-white me-4 ">  {{$post->deposit_amount}} {{Config::get("AppConstant.system_currency_unit")}} </span>

                            <span class="fw-bold ">Post Vip Type: </span>
                            <span class="badge bg-warning text-white me-4">  {{$post->post_premium_type}}  </span>


                            <div>
                                <span class="fw-bold ">Created at: </span>
                                <span class="badge bg-warning text-white me-4">  {{$post->created_at}}  </span>
                                <span class="fw-bold ">Created by: </span>
                                <span class="badge bg-success text-white me-4">  {{$post->user_name}}  </span>
                            </div>


                        </td>
                        <td>{{$post->category_name}}</td>
                        <td><span
                                class="badge bg-warning">{{number_format($post->price, 0)}} {{Config::get("AppConstant.system_currency_unit")}}</span>
                        </td>
                        <td>
                            <span class="badge
                            @switch($post->status)
                            @case("published") bg-success @break
                            @case("deleted") bg-danger @break
                            @case("booked") bg-primary @break
                            @default bg-secondary
                            @endswitch
                                text-white me-4">  {{$post->status}} </span>
                        </td>
                        <td class="">
                            <div class="d-flex">
                                <a data-post-id="{{$post->id}}" href="/admin/post/edit/{{$post->id}}" class="btn-edit-post btn btn-danger btn-sm" title="edit"><i
                                        class="fas  fa-edit"></i></a>
                                <button class="btn btn-success btn-sm" title="preview"><i class="fas  fa-eye"></i>
                                </button>
                                <button class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#myModal" title="disable"><i class="fas  fa-ban"></i></button>

                            </div>


                        </td>

                    </tr>
                @endforeach

                </tbody>


            </table>
            {{ $posts->withQueryString()->links() }}
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered modal-xl"  >
                <div class="modal-content" id="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>The modal body is where all the text, images, and links go.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
@section('script')

    @parent
    <script>


        // document.querySelectorAll('.btn-edit-post').forEach(item => {
        //     item.addEventListener('click', event => {
        //         var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
        //
        //         })
        //         var modalToggle = document.getElementById('myModal') // relatedTarget
        //         myModal.toggle()
        //     })
        // })


    </script>



    {{--    <script src="/admin/js/post/addPost.js"></script>--}}
@endsection

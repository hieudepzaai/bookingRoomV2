
<!--section specific slider-->
<div class="section w-100">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <a href="{{$url}}" class="section-title text-warning">
                   {{ $title }}
                </a>
            </div>
        </div>
        <div class="post-slider row" id="slider" >
            @foreach($posts as $p)
                <x-post-item :post="$p" />

            @endforeach



        </div>
    </div>
</div>

<!--end section specific slider-->

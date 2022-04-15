<!--section specific-->
<div class="section w-100">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <a class="section-title">
                    {{ $title }}
                </a>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $p)
                <x-post-item :post="$p" />
            @endforeach
            <div class="col-12">
                <div class="w-100 text-center">
                    <!--                    <span class="badge bg-success">Success</span>-->
                    <a class="badge bg-success" href="">Xem thêm ></a>

                </div>
            </div>
        </div>
    </div>
</div>

<!--end section specific-->

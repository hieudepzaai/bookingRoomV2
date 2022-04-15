<div class="col-md-3 ">

    <div class="post-item-container w-100 shadow  ">
        <div class="featured">
            <div class="ribbon">Vip</div>
        </div>
        <a class="like-btn liked">
            <i class="fa-brands fa-gratipay"></i>
        </a>
        <a href="/detail.html" class="post-item-link-wrapper">
            <div class="post-item-img-container w-100 ">
                <img class="post-item-img" src="/client/resources/img/land2.jpg" alt="">
                <div class="img-count">
                    <i class="fa-solid fa-images"></i> <span>20</span>
                </div>
            </div>
            <div class="w-100 post-item-body ">
                <div>
                    @switch($post->category_name)
                        @case('for_sold')
                        <span class="badge bg-success">{{$post->category_description}}</span> @break
                        @case('for_rent')
                        <span class="badge bg-info">{{$post->category_description}}</span> @break
                        @case('find_room')
                        <span class="badge bg-danger">{{$post->category_description}}</span> @break
                        @case('find_shared_room')
                        <span class="badge bg-success">{{$post->category_description}}</span> @break
                        @default
                        <span class="badge bg-primary">{{$post->category_description}}</span>
                    @endswitch
                </div>
                <p class="post-name">{{$post->title}}</p>
                <span>45 m2</span>
                <p class="text-danger post-price">{{$post->price}} vnd/tháng </p>
                <p class="text-secondary post-date">{{($post->diffInDate)}}   </p>

            </div>
        </a>
    </div>

</div>
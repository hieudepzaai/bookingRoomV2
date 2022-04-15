<?php

namespace App\Http\Controllers\FrondEnd\post;

use App\Http\Controllers\Controller;
use App\Repository\post\PostRepositoryInterface;

class ClientPostController extends Controller
{
    protected $repo;
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->repo = $postRepository;
    }
    public function home() {
//       return  $this->repo->getForSoldPost() ;
        return view('frontend.page.home.index'  , [
            'for_sold_posts' => $this->repo->getForSoldPost() ,
            'for_rent_posts' => $this->repo->getForRentRoomPost() ,

        ]);
    }
    public function detail($id) {

        return view('frontend.page.post.detail' ,[
            "post" => $this->repo->get($id)
        ]);
    }
    public function createPost() {
        return view('frontend.page.post.create' ,[

        ]);
    }


}

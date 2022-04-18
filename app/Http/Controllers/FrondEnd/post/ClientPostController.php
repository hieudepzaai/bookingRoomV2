<?php

namespace App\Http\Controllers\FrondEnd\post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\ClientCreatePostRequest;
use App\Repository\post\PostRepositoryInterface;
use App\Service\FileService;
use Config;
use Illuminate\Support\Str;

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
            'latest' => $this->repo->getLatestPost()

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
    public function doCreatePost(ClientCreatePostRequest $request) {
        $input = $request->validated();
        $input['img'] = FileService::UploadFile(Config::get("AppConstant.image_upload_path.post"), $request->file('img'));
        $input['price'] = Str::replace(',', '', $request->price);
        $input['deposit_amount'] = Str::replace(',', '', $request->price);

        $newPost = $this->repo->create($input);
        return view('frontend.page.post.create')
            ->with([
                "success" => "true",
                "message" => "Add Post Successfully"
            ]);

    }



}

<?php

namespace App\Http\Controllers\BackEnd\post;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ICrudController;
use App\Http\Requests\Post\CreatePostRequest;

use App\Repository\post\PostRepositoryInterface;
use App\Service\FileService;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isEmpty;


class PostController extends Controller
{
    protected $repo;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->repo = $postRepository;
    }

    public function index()
    {

        $view_data = [
            "posts" => $this->repo->getAll()
        ];
        return view('backend.page.post.index', $view_data);
    }

    public function Create(CreatePostRequest $request)
    {
        if ($request->all() != []) return $request->all();
        return view('backend.page.post.create');
    }

    public function DoCreatePost(CreatePostRequest $request)
    {

        $input = $request->all();
        $input['img'] = FileService::UploadFile(Config::get("AppConstant.image_upload_path.post"), $request->file('img'));
        $input['price'] = Str::replace(',', '', $request->price);
        $input['deposit_amount'] = Str::replace(',', '', $request->price);

        $newPost = $this->repo->create($input);
        return view('backend.page.post.create')
            ->with([
                "success" => "true",
                "message" => "Add Post Successfully"
            ]);

//            return json_encode([
//               "success" => "true" ,
//                "message" => "Add Post Successfully",
//                "data" => $newPost
//            ]);


    }


    public function GetById($id)
    {
        return $this->repo->get($id);

    }


    public function getAll(Request $request)
    {
        $item_per_page = $request->per_page;
        return $this->repo->getAll($item_per_page);

    }

    public function Delete($id)
    {

    }

    public function edit($id)
    {

        $view_data = [
            "post" => $this->repo->get($id)
        ];

        return view('backend.page.post.edit', $view_data);

    }
}

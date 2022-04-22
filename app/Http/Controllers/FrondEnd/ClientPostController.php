<?php

namespace App\Http\Controllers\FrondEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\ClientCreatePostRequest;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostComment;
use App\Models\PostGallary;
use App\Models\PostPremiumType;
use App\Models\Transaction;
use App\Models\User;
use App\Repository\post\PostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Storage;
use function auth;
use function back;
use function env;
use function view;

class ClientPostController extends Controller
{
    protected $repo;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->repo = $postRepository;
    }

    public function home()
    {
//       return  $this->repo->getForSoldPost() ;
        return view('frontend.page.home.index', [
            'categories' => PostCategory::all(),
            'for_sold_posts' => $this->repo->get8ForSoldPost(),
            'for_rent_posts' => $this->repo->get8ForRentRoomPost(),
            'shared_room_post' => $this->repo->get8SharedRoomPost(),
            'latest' => $this->repo->get8LatestPost()

        ]);
    }
    public function getLatestPost() {
        return $this->repo->getLatestPost();
    }
    public function getPostByCategoryId($id) {


        return view('frontend.page.post.ListPostByCategory', [
            'category' => PostCategory::find($id),
            'posts' => $this->repo->getPostByCategoryId($id)
        ]) ;
    }

    public function detail($id)
    {

        return view('frontend.page.post.detail', [
            "post" => $this->repo->get($id),
            "post_images" => PostGallary::where('post_id' , $id)->get(),
            'comments' => PostComment::where('post_id' ,$id)->leftJoin('users' , 'users.id' , '=' , 'post_comment.created_by')
                ->selectRaw('users.* , users.name as user_name , post_comment.*')->get()
        ]);
    }

    public function createPost()
    {
        return view('frontend.page.post.create', [

        ]);
    }

    public function doCreatePost(ClientCreatePostRequest $request)
    {
        $input = $request->all();
        $imgUrls = $this->uploadImgGallary($request);

        $input['img'] = $imgUrls[0];
        $input['price'] = Str::replace(',', '', $request->price);
        $input['deposit_amount'] = Str::replace(',', '', $request->price);
        $input['created_by'] = auth()->id();
        $input['status'] = auth()->id();
        $input['is_disabled'] = 1;
        $input['img_count'] = count($imgUrls);
        $newPost = $this->repo->create($input);
        $this->AddImgToPostGallary($newPost->id , $imgUrls);

        $number_of_time_unit = $request['number_of_post_time_unit'];
        $post_premium_type_id = $request['price_type_id'];
        $balance = auth()->user()->balance;
        $premium_type = PostPremiumType::find($post_premium_type_id);
        $time_unit = $premium_type->unit;
        $total_amount = $premium_type->price_per_unit * $number_of_time_unit;
        if ($balance < $total_amount) {
            return view('frontend.page.payment.purchaseError');
        } else {

            switch ($time_unit) {
                case "hour" :
                {
                    $expired_after_minute = 60 * $number_of_time_unit;
                    Post::find($newPost->id)->update([
                        'is_vip' => 1,
                        'priority' => $premium_type->priority,
                        'expired_at' => now()->addMinutes($expired_after_minute),
                        'is_disabled' => 0,
                    ]);
                    break;
                }
                case "day":
                {
                    $expired_after_day = $number_of_time_unit;
                    Post::find($newPost->id)->update([
                        'is_vip' => 1,
                        'priority' => $premium_type->priority,
                        'expired_at' => now()->addDays($expired_after_day),
                        'is_disabled' => 0,
                    ]);
                    break;
                }
                case "month" :
                {
                    $expired_after_day = 30 * $number_of_time_unit;
                    Post::find($newPost->id)->update([
                        'is_vip' => 1,
                        'priority' => $premium_type->priority,
                        'expired_at' => now()->addDays($expired_after_day),
                        'is_disabled' => 0,
                    ]);
                    break;
                }
                case "year" :
                {
                    $expired_after_day = 365 * $number_of_time_unit;
                    Post::find($newPost->id)->update([
                        'is_vip' => 1,
                        'priority' => $premium_type->priority,
                        'expired_at' => now()->addDays($expired_after_day),
                        'is_disabled' => 0,
                    ]);
                    break;
                }

            }
            $transaction = Transaction::create([
                'amount' => $total_amount,
                'transaction_type' => 'money out',
                'description' => 'purchase post ' . "#$newPost->id",
                'balance_before_transaction' => auth()->user()->balance,
                'created_by' => auth()->id(),
                'status' => 'success',
                'payment_method' => "Online",

            ]);

            User::find(auth()->id())->update([
                'balance' => $balance - $total_amount
            ]);

            return view('frontend.page.payment.purchaseSuccess' , [
                'transaction' => $transaction,
                'post' => $this->repo->get($newPost->id)
            ]);
        }

    }
    private function filterCreatePostRequest($request){

    }

    private function uploadPostImg($request)
    {
        return env("UPLOAD_PATH") . Storage::disk("public_uploads")->putFileAs("images/" . Str::slug($request->title), $request->file('img'), $request->file('img')->getClientOriginalName());
    }
    private function uploadImgGallary($request) {
        $fileUrlArr = [];
        foreach ($request->file('img') as $file) {
            $fileUrlArr[] = env("UPLOAD_PATH") . Storage::disk("public_uploads")->putFileAs("images/" . Str::slug($request->title), $file, $file->getClientOriginalName());
        }
        return $fileUrlArr;
    }
    private function AddImgToPostGallary($post_id,$img_Arr) {
        foreach ($img_Arr as $img) {
            PostGallary::create([
                'post_id' =>  $post_id,
                'img' => $img,
                'gallary_type' => "img",
                'gallary_order' => "1"

            ]);
        }
    }

    public function savePost(Request $request)
    {
        return $request->all();

    }

    public function postManagement()
    {

    }


}

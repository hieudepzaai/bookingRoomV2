<?php

namespace App\Repository\post;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class PostRepository implements PostRepositoryInterface
{
    protected $model;
    public function __construct(Post $model)
    {
        $this->model =  $model;
    }

    public function create($data): Model|Post
    {
        return $this->model->create($data);
    }

    public function get($id)
    {
        return $this->model
            ->PostDetail()
            ->where('post.id' , '=', $id)->first();
    }

    public function getAll()
    {
//        return $this->model->paginate(\Config::get("AppConstant.items_per_page"));
        return $this->model
            ->PostDetail()->latest()
            ->paginate(\Config::get("AppConstant.items_per_page"));

    }

    public function delete($id): int
    {
        return $this->model->destroy($id);
    }

    public function update($id, $data)
    {
        return $this->model->findOrFail($id)->update($data);
    }

    public function paginate()
    {
        return $this->model->paginate(\Config::get("AppConstant.items_per_page"));
    }

    public function get8SharedRoomPost() {
        return $this->model->OrderByVip()->whereCategoryId('4')->limit(8)->latest()->get();
//        return cache()->remember('ForSharedRoom-Cache', 60*60*24 , function ()  {
//            return $this->model->OrderByVip()->whereCategoryId('4')->limit(8)->latest()->get();
//        });

    }
    public function getSharedRoomPost() {
        return $this->model->OrderByVip()->whereCategoryId('4')->latest()->paginate(8);

    }
    public function get8ForRentRoomPost() {
        return $this->model->OrderByVip()->whereCategoryId('2')->limit(8)->latest()->get();
//        return cache()->remember('ForRentRoom-Cache', 60*60*24 , function ()  {
//            return $this->model->OrderByVip()->whereCategoryId('2')->limit(8)->latest()->get();
//        });
    }
    public function getForRentRoomPost() {
        return $this->model->OrderByVip()->whereCategoryId('2')->latest()->paginate(8);

    }
    public function get8LatestPost() {
        return $this->model->OrderByVip()->limit(8)->latest()->get();
//        return Cache::remember('LatestPost-Cache', 60*60*24 , function ()  {
//            return $this->model->OrderByVip()->limit(8)->latest()->get();
//        });
    }
    public function getLatestPost() {
        return $this->model->OrderByVip()->latest()->paginate(8);
//        return Cache::remember('LatestPost-Cache', 60*60*24 , function ()  {
//            return $this->model->OrderByVip()->limit(8)->latest()->get();
//        });
    }
    public function get8ForSoldPost() {
        return $this->model->whereCategoryId('1')->OrderByVip()->limit(8)->latest()->get();
//        return Cache::remember('ForSoldPostCache', 60*60*24 , function ()  {
//            return $this->model->whereCategoryId('1')->OrderByVip()->limit(8)->latest()->get();
//        });

    }
    public function getForSoldPost() {
        return $this->model->whereCategoryId('1')->OrderByVip()->latest()->paginate(8);
    }
    public function get8FindRoomPost()
    {
        return $this->model->OrderByVip()->whereCategoryId('3')->limit(8)->latest()->get();
    }

    public function getPostByCategoryId($category_id)
    {
        return $this->model->OrderByVip()->whereCategoryId($category_id)->latest()->paginate(8);

    }

    public function getPostByStreetId($street_id)
    {
        return $this->model->OrderByVip()->whereStreetId($street_id)->limit(8)->latest()->get();
    }

    public function getPostByWardId($ward_id)
    {
        return $this->model->OrderByVip()->whereWardId($ward_id)->limit(8)->latest()->get();

    }

    public function getPostByProvinceId($province_id)
    {
        return $this->model->OrderByVip()->whereProvinceId($province_id)->limit(8)->latest()->get();
    }

    public function getFindRoomPost()
    {
        // TODO: Implement getFindRoomPost() method.
    }
}

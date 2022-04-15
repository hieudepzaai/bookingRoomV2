<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostPremiumType;
use App\Models\Province;
use App\Models\Street;
use App\Models\User;
use App\Models\Ward;
use Config;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use SebastianBergmann\Environment\Console;

class PostSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        Post::truncate();
        $faker = Factory::create();

        for($i = 0 ; $i < 100 ; $i ++) {
            $title = $faker->name;
            $status_arr = Config::get('AppConstant.post_status');
            $categoru_id = PostCategory::inRandomOrder()->first()->id;
            $provinces_id = Province::inRandomOrder()->first()->id;
            $district = District::whereProvinceId($provinces_id)->inRandomOrder()->first();
            if($district == null) {
                $district_id = 1 ;
            }
            else {
                $district_id = $district->id;
            }


            $ward = Ward::whereDistrictId($district_id)->inRandomOrder()->first();
            if($ward == null) $ward_id = 1 ;
            else              $ward_id = $ward->id;

            $street = Street::whereDistrictId($district_id)->inRandomOrder()->first();
            if($street == null)  $street_id =1 ;
            else $street_id = $street->id;


            $price_type = PostPremiumType::inRandomOrder()->first();
            $price_type_id = $price_type->id;
            $price = $price_type->price_per_unit;
            $priority =  $price_type->priority;
            $deposit = rand(10 , 100000000);
            $is_disabled = rand(0,1);
            $status = $status_arr [rand(0, count($status_arr)-1)];
            $img = "https://api.lorem.space/image/house?w=600&h=400" ;
            $area = rand(10 , 500);
            $description = $faker->realTextBetween(20 , 100 ,2);
            $slug = Str::slug($title , "-");
            $adress_detail =  $faker->streetAddress;
            $user_id = User::inRandomOrder()->first()->id;


            Post::create([
                'title' =>$title,
                'description' => $description,
                'category_id' => $categoru_id,
                'street_id' => $street_id,
                'ward_id' =>$ward_id,
                'district_id' =>$district_id,
                'province_id' =>$provinces_id,
                'address_detail' =>$adress_detail,
                'price' =>$price,
                'price_type_id' => $price_type_id,
                'is_disabled' => $is_disabled,
                'area' =>$area,
                'priority' =>$priority,
                'deposit_amount'=> $deposit,
                'status' =>$status,
                'slug' => $slug,
                'img' =>$img,
                'created_by' => $user_id
            ]);
        }
    }
}

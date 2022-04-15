<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Bán nhà",
                "description" => "Bán nhà",
                "category_img" => "test imag",

            ],
            [
                "name" => "Cho thuê phòng trọ",
                "description" => "Bán nhà",
                "category_img" => "test imag",

            ],
            [
                "name" => "Tìm phòng trọ",
                "description" => "Bán nhà",
                "category_img" => "test imag",

            ],
            [
                "name" => "Môi giới bất động sản",
                "description" => "Bán nhà",
                "category_img" => "test imag",

            ],
            [
                "name" => "Môi giới bất động sản",
                "description" => "Bán nhà",
                "category_img" => "test imag",

            ],
        ];

        PostCategory::insert($categories);

    }
}

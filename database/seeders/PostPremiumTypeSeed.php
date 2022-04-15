<?php

namespace Database\Seeders;

use App\Models\PostPremiumType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostPremiumTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = [
            [
                "premium_type" => "vip1-hour",
                "priority" => 5,
                "price_per_unit" => 50,
                "unit" => "hour"
            ],
            [
                "premium_type" => "vip1-day",
                "priority" => 5,
                "price_per_unit" => 5000,
                "unit" => "day"
            ],
            [
                "premium_type" => "vip1-month",
                "priority" => 5,
                "price_per_unit" => 5000,
                "unit" => "month"
            ],
            [
                "premium_type" => "vip1-year",
                "priority" => 5,
                "price_per_unit" => 50000,
                "unit" => "year"
            ],
            [
                "premium_type" => "vip2-hour",
                "priority" => 6,
                "price_per_unit" => 10000,
                "unit" => "hour"
            ],
            [
                "premium_type" => "vip2-day",
                "priority" => 6,
                "price_per_unit" => 10000,
                "unit" => "day"
            ],
            [
                "premium_type" => "vip2-month",
                "priority" => 6,
                "price_per_unit" => 10000,
                "unit" => "month"
            ],
            [
                "premium_type" => "vip2-year",
                "priority" => 6,
                "price_per_unit" => 10000,
                "unit" => "year"
            ],
            [
                "premium_type" => "vip3-hour",
                "priority" => 7,
                "price_per_unit" => 20000,
                "unit" => "hour"
            ],
            [
                "premium_type" => "vip3-day",
                "priority" => 7,
                "price_per_unit" => 20000,
                "unit" => "day"
            ],
            [
                "premium_type" => "vip3-month",
                "priority" => 7,
                "price_per_unit" => 20000,
                "unit" => "month"
            ],
            [
                "premium_type" => "vip3-year",
                "priority" => 7,
                "price_per_unit" => 20000,
                "unit" => "year"
            ],
            [
                "premium_type" => "vip4-hour",
                "priority" => 8,
                "price_per_unit" => 30000,
                "unit" => "hour"
            ],
            [
                "premium_type" => "vip4-day",
                "priority" => 8,
                "price_per_unit" => 30000,
                "unit" => "day"
            ],
            [
                "premium_type" => "vip4-month",
                "priority" => 8,
                "price_per_unit" => 30000,
                "unit" => "month"
            ],
            [
                "premium_type" => "vip4-year",
                "priority" => 8,
                "price_per_unit" => 30000,
                "unit" => "year"
            ],
            [
                "premium_type" => "vip5-hour",
                "priority" => 9,
                "price_per_unit" => 30000,
                "unit" => "hour"
            ],
            [
                "premium_type" => "vip5-day",
                "priority" => 9,
                "price_per_unit" => 30000,
                "unit" => "day"
            ],
            [
                "premium_type" => "vip4-month",
                "priority" => 9,
                "price_per_unit" => 30000,
                "unit" => "month"
            ],
            [
                "premium_type" => "vip4-year",
                "priority" => 9,
                "price_per_unit" => 30000,
                "unit" => "year"
            ],
            [
                "premium_type" => "normal",
                "priority" => 0,
                "price_per_unit" => 0,
                "unit" => "hour"
            ],

        ];

        PostPremiumType::insert($types);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    private array $config_list = [

        [
            "key" => "exprired_after_hour" ,
            "value" => "10",
            "description" => "auto expired for normal Post"
        ] ,
        [
            "key" => "currency_unit" ,
            "value" => "VND",
            "description" => "VND Unit"
        ] ,




    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Config::truncate();

        Config::insert($this->config_list);
    }
}

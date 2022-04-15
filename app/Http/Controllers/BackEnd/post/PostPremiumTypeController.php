<?php

namespace App\Http\Controllers\BackEnd\post;

use App\Models\PostPremiumPrice;
use App\Models\PostPremiumType;
use Illuminate\Http\Request;

class PostPremiumTypeController
{
    public function getAllPremiumPriceType() {
        return PostPremiumType::all();
    }

    public function CreatePremiumPrice (Request $request) {

    }
}

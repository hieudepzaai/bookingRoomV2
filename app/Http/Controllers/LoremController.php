<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class LoremController extends Controller
{
    public function getLoremImg() {
        return $response = Http::post('https://api.lorem.space/image/house', [
            'w' => '600',
            'h' => '400',
        ]);

    }

}

<?php

namespace App\Http\Controllers\BackEnd\config;

use App\Http\Controllers\Controller;
use Config;
use \App\Models\Config as DbConfig;
use Illuminate\Http\Request;

class ConfigController extends  Controller
{
    public function getConstant(){
        return Config::get('AppConstant.post_status');
    }
    public function getConfig(Request $request){
//        return DbConfig::where( 'key' , '=', $request['key'])->firstOrFail();
        return cache()->remember('config-'.$request['key'], 60*60*24 , function () use ($request) {
            return DbConfig::where( 'key' , '=', $request['key'])->firstOrFail();
        });
    }

}

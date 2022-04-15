<?php

use App\Http\Controllers\BackEnd\address\DistrictController;
Route::get("array" ,  function () {
    $arr = [
        'id',
        'title',
        'description',
        'category_id',
        'street_id',
        'ward_id',
        'district_id',
        'province_id',
        'address_detail',
        'price',
        'price_type_id',
        'is_disabled',
        'area',
        'priority',
        'expired_at',
        'deposit_amount',
        'status',
        'slug',
        'img',
        'created_by'
    ];
    return view("test" , [
        'arr' => $arr
    ]);
});
//Route::get('post/create', [\App\Http\Controllers\BackEnd\post\PostController::class , 'Create']);
Route::get('post/create', [\App\Http\Controllers\BackEnd\post\PostController::class , 'Create'])->name("post.create");
Route::post('post/create', [\App\Http\Controllers\BackEnd\post\PostController::class , 'DoCreatePost'])->name("post.DoCreate");

Route::any('post/edit/{id}', [\App\Http\Controllers\BackEnd\post\PostController::class , 'edit'])->name("post.edit");

Route::get('post/{id}', [\App\Http\Controllers\BackEnd\post\PostController::class, 'GetById']);

Route::get('posts', [\App\Http\Controllers\BackEnd\post\PostController::class, 'index'])->name('post.index');

Route::get('provinces', [\App\Http\Controllers\BackEnd\address\ProvinceController::class , 'getAll']);
Route::get('provinces/getByName', [\App\Http\Controllers\BackEnd\address\ProvinceController::class , 'getByName'])->name("province.getByName");

Route::get('districts', [DistrictController::class , 'getAll']);
Route::get('district/provinces/{id}', [DistrictController::class , 'getDistrictByProvinceId'])->name('district.getByProvinceID');
Route::get('district/{id}', [DistrictController::class , 'getById']);

Route::get('ward/{id}', [\App\Http\Controllers\BackEnd\address\WardController::class , 'getById']);
Route::get('ward/getWardByDistrictId/{id}', [\App\Http\Controllers\BackEnd\address\WardController::class , 'getWardByDistrictId'])->name('ward.getByDistrictID');

Route::get('street/getByName', [\App\Http\Controllers\BackEnd\address\StreetController::class , 'getStreetByName'])->name('street.getByName');

Route::get('categories', [\App\Http\Controllers\BackEnd\postCategory\PostCategoryController::class, 'getAll'])->name('category.getAll');
Route::get('premiumTypes', [\App\Http\Controllers\BackEnd\post\PostPremiumTypeController::class, 'getAllPremiumPriceType'])->name('postPremium.getAll');


Route::get('config', [\App\Http\Controllers\BackEnd\config\ConfigController::class, 'getConstant']);
Route::get('config/getByKey', [\App\Http\Controllers\BackEnd\config\ConfigController::class, 'getConfig'])->name("config.getByKey");

Route::get('lorem', [\App\Http\Controllers\LoremController::class, 'getLoremImg']);

Route::get('post/getAll', [\App\Http\Controllers\BackEnd\post\PostController::class, 'getAll']);




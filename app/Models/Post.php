<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $category_id
 * @property int|null $street_id
 * @property int|null $ward_id
 * @property int|null $district_id
 * @property int|null $province_id
 * @property string|null $address_detail
 * @property float|null $price
 * @property int|null $price_type_id
 * @property int|null $is_disabled
 * @property float|null $area
 * @property int|null $priority
 * @property Carbon|null $expired_at
 * @property float|null $deposit_amount
 * @property string|null $status
 * @property string|null $slug
 * @property string|null $img
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereAddressDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDepositAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereExpiredAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsDisabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePriceTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereStreetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereWardId($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $appends = ['diffInDate'];
    protected $table = 'post';
    public $timestamps = false;

    protected $casts = [
        'category_id' => 'int',
        'street_id' => 'int',
        'ward_id' => 'int',
        'district_id' => 'int',
        'province_id' => 'int',
        'price' => 'float',
        'price_type_id' => 'int',
        'is_disabled' => 'int',
        'area' => 'float',
        'priority' => 'int',
        'deposit_amount' => 'float',
        'created_by' => 'int'
    ];

    protected $dates = [
        'expired_at'
    ];

    protected $fillable = [
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
        'created_by',
        'created_at'
    ];

    public function scopePostDetail($query)
    {
        return $query->leftJoin("post_category", "post.category_id", "=", "post_category.id")
            ->leftJoin("province", "post.province_id", "=", "province.id")
            ->leftJoin("district", "post.district_id", "=", "district.id")
            ->leftJoin("ward", "post.ward_id", "=", "ward.id")
            ->leftJoin("street", "post.street_id", "=", "street.id")
            ->leftJoin("post_premium_type", "post.price_type_id", "=", "post_premium_type.id")
            ->leftJoin("users", "post.created_by", "=", "users.id")
            ->selectRaw("post.* , post_category.name as category_name ,
                                province.name as province_name ,district.name as district_name ,  ward.name as ward_name ,street.name as street_name ,
                                post_premium_type.premium_type as post_premium_type  , post_premium_type.unit  , post_premium_type.price_per_unit  ,users.name as  user_name  ");
    }

    public function getDiffInDateAttribute()
    {
       return $this->created_at != null ? now()->diffForHumans($this->created_at) : "";
    }
    public function scopePostItem($query) {
        return $query->leftJoin("post_category", "post.category_id", "=", "post_category.id")
            ->selectRaw("post.* , post_category.name as category_name , post_category.description as category_description");
    }

}

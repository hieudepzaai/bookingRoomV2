<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostPremiumPrice
 *
 * @property int $id
 * @property int|null $post_premium_id
 * @property float|null $price
 * @property string|null $price_type
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumPrice wherePostPremiumId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumPrice wherePriceType($value)
 * @mixin \Eloquent
 */
class PostPremiumPrice extends Model
{
	protected $table = 'post_premium_price';
	public $timestamps = false;

	protected $casts = [
		'post_premium_id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'post_premium_id',
		'price',
		'price_type'
	];
}

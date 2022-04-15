<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostPremiumType
 *
 * @property int $id
 * @property string $premium_type
 * @property int $priority
 * @property float|null $price_per_unit
 * @property string|null $unit
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumType wherePremiumType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumType wherePricePerUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumType wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostPremiumType whereUnit($value)
 * @mixin \Eloquent
 */
class PostPremiumType extends Model
{
	protected $table = 'post_premium_type';
	public $timestamps = false;

	protected $casts = [
		'priority' => 'int',
		'price_per_unit' => 'float'
	];

	protected $fillable = [
		'premium_type',
		'priority',
		'price_per_unit',
		'unit'
	];
}

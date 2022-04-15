<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $prefix
 * @property int|null $province_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|District query()
 * @method static \Illuminate\Database\Eloquent\Builder|District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|District whereProvinceId($value)
 * @mixin \Eloquent
 */
class District extends Model
{
	protected $table = 'district';
	public $timestamps = false;

	protected $casts = [
		'province_id' => 'int'
	];

	protected $fillable = [
		'name',
		'prefix',
		'province_id'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Street
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $prefix
 * @property int|null $province_id
 * @property int|null $district_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Street newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Street newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Street query()
 * @method static \Illuminate\Database\Eloquent\Builder|Street whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Street whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Street whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Street wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Street whereProvinceId($value)
 * @mixin \Eloquent
 */
class Street extends Model
{
	protected $table = 'street';
	public $timestamps = false;

	protected $casts = [
		'province_id' => 'int',
		'district_id' => 'int'
	];

	protected $fillable = [
		'name',
		'prefix',
		'province_id',
		'district_id'
	];
}

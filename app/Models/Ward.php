<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ward
 *
 * @property int $id
 * @property string $name
 * @property string|null $prefix
 * @property int|null $province_id
 * @property int|null $district_id
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Ward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ward whereProvinceId($value)
 * @mixin \Eloquent
 */
class Ward extends Model
{
	protected $table = 'ward';
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

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostGallary
 *
 * @property int $id
 * @property int|null $post_id
 * @property string|null $img
 * @property string|null $gallary_type
 * @property int|null $gallary_order
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|PostGallary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostGallary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostGallary query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostGallary whereGallaryOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostGallary whereGallaryType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostGallary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostGallary wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostGallary wherePostId($value)
 * @mixin \Eloquent
 */
class PostGallary extends Model
{
	protected $table = 'post_gallary';
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int',
		'gallary_order' => 'int'
	];

	protected $fillable = [
		'post_id',
		'img',
		'gallary_type',
		'gallary_order'
	];
}

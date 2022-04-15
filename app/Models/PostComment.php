<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostComment
 *
 * @property int $id
 * @property int|null $created_by
 * @property string|null $content
 * @property int|null $post_id
 * @property Carbon|null $created_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostComment wherePostId($value)
 * @mixin \Eloquent
 */
class PostComment extends Model
{
	protected $table = 'post_comment';
	public $timestamps = false;

	protected $casts = [
		'created_by' => 'int',
		'post_id' => 'int'
	];

	protected $fillable = [
		'created_by',
		'content',
		'post_id'
	];
}

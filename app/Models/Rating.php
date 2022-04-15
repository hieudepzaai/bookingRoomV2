<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rating
 *
 * @property int $id
 * @property string $rating_type
 * @property int|null $rating_user_id
 * @property int|null $room_id
 * @property int|null $host_id
 * @property string|null $comment
 * @property Carbon $created_at
 * @property Carbon $modified_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereModifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereRatingType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereRatingUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rating whereRoomId($value)
 * @mixin \Eloquent
 */
class Rating extends Model
{
	protected $table = 'rating';
	public $timestamps = false;

	protected $casts = [
		'rating_user_id' => 'int',
		'room_id' => 'int',
		'host_id' => 'int'
	];

	protected $dates = [
		'modified_at'
	];

	protected $fillable = [
		'rating_type',
		'rating_user_id',
		'room_id',
		'host_id',
		'comment',
		'modified_at'
	];
}

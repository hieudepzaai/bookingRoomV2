<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 *
 * @property int $id
 * @property int $post_id
 * @property int $booking_user_id
 * @property int|null $number_of_unit
 * @property Carbon $created_at
 * @property string|null $status
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereBookingUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereNumberOfUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereStatus($value)
 * @mixin \Eloquent
 */
class Booking extends Model
{
	protected $table = 'booking';
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int',
		'booking_user_id' => 'int',
		'number_of_unit' => 'int'
	];

	protected $fillable = [
		'post_id',
		'booking_user_id',
		'number_of_unit',
		'status'
	];
}

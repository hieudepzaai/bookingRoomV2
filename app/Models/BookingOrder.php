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
 * @method static \Illuminate\Database\Eloquent\Builder|BookingOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookingOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookingOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookingOrder whereBookingUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookingOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookingOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookingOrder whereNumberOfUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookingOrder wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookingOrder whereStatus($value)
 * @mixin \Eloquent
 */
class BookingOrder extends Model
{
	protected $table = 'booking_order';
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

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class History
 *
 * @property int $id
 * @property string|null $type
 * @property int|null $booking_id
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property string|null $note
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|History newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|History newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|History query()
 * @method static \Illuminate\Database\Eloquent\Builder|History whereBookingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|History whereType($value)
 * @mixin \Eloquent
 */
class History extends Model
{
	protected $table = 'history';
	public $timestamps = false;

	protected $casts = [
		'booking_id' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'type',
		'booking_id',
		'status',
		'created_by',
		'note'
	];
}

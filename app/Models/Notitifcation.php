<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notitifcation
 *
 * @property int $id
 * @property int $user_id
 * @property string $content
 * @property string $status
 * @property Carbon|null $created_at
 * @property string $notification_type
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Notitifcation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notitifcation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notitifcation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notitifcation whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notitifcation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notitifcation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notitifcation whereNotificationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notitifcation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notitifcation whereUserId($value)
 * @mixin \Eloquent
 */
class Notitifcation extends Model
{
	protected $table = 'notitifcation';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'content',
		'status',
		'notification_type'
	];
}

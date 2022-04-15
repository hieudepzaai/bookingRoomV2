<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 *
 * @property int $id
 * @property int|null $file_name
 * @property string|null $file_type
 * @property string|null $file_ext
 * @property string|null $path
 * @property string|null $source
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File query()
 * @method static \Illuminate\Database\Eloquent\Builder|File whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFileExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereFileType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereSource($value)
 * @mixin \Eloquent
 */
class File extends Model
{
	protected $table = 'file';
	public $timestamps = false;

	protected $casts = [
		'file_name' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'file_name',
		'file_type',
		'file_ext',
		'path',
		'source',
		'created_by'
	];
}

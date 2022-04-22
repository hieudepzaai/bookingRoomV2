<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 *
 * @property int $id
 * @property float $amount
 * @property string $transaction_type
 * @property float|null $balance_before_transaction
 * @property float|null $balance_after_success_transaction
 * @property int $created_by
 * @property string $comment
 * @property Carbon $created_at
 * @property string $status
 * @property string $payment_method
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereBalanceAfterSuccessTransaction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereBalanceBeforeTransaction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTransactionType($value)
 * @mixin \Eloquent
 */
class Transaction extends Model
{
	protected $table = 'transaction';
	public $timestamps = false;

	protected $casts = [
		'amount' => 'float',
		'balance_before_transaction' => 'float',
		'balance_after_success_transaction' => 'float',
		'created_by' => 'int'
	];

	protected $fillable = [
		'amount',
		'transaction_type',
		'balance_before_transaction',
		'balance_after_success_transaction',
		'created_by',
		'comment',
		'status',
		'payment_method',
        'description'
	];
}

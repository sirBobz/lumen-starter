<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 03 Jul 2017 15:18:24 +0300.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property string $request_id
 * @property string $org_id
 * @property string $amount
 * @property string $third_party_trans_id
 * @property \Carbon\Carbon $transaction_time
 * @property string $account
 * @property string $account_name
 * @property string $customer_name
 * @property string $phone_number
 * @property string $account_balance
 * @property string $service_id
 * @property string $currency
 * @property string $message
 * @property string $result_code
 * @property string $result_desc
 * @property string $status
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Transaction extends Model
{


	protected $fillable = [
		'request_id',
		'org_id',
		'amount',
		'third_party_trans_id',
		'transaction_time',
		'account',
		'account_name',
		'customer_name',
		'phone_number',
		'account_balance',
		'service_id',
		'currency',
		'message',
		'result_code',
		'result_desc',
		'status'
	];
}

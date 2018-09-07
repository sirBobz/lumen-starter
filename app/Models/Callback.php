<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    protected $fillable = [
		'org_id',
		'callbackurl',
		'validation_url',
		'service_id',
	];
}

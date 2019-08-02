<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
	protected $fillable = [
	'judul',
	'name',
	'user_id',
	];
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CutomerTTH extends Model
{
    use HasFactory;

	protected $table = "customertth";

	protected $primaryKey = "TTHNo";

	public function Customer()
	{
		return $this->belongsTo(Customer::class, 'CustID');
	}
}

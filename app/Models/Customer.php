<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

	protected $table = "customer";

	protected $primaryKey = "CustID";


	public function hadiah()
	{
		return $this->hasMany(CutomerTTH::class, 'CustID');
	}


}

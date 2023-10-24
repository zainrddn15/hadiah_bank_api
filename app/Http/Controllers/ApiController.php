<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function namaCust(Request $request)  {
		$cust = DB::select("select `CustID`, `Name` from `dbo.customer`");
		$t=json_encode(['CustID' => 'all', 'Name' => 'Semua Toko']);

		// dd(json_decode($t));

		$data = [];
		$data[0]= json_decode($t);
		foreach ($cust as $key => $value) {
			

			$data[$key+1] = $value;
		}
		
		// $tambahan= ['CustId' => 'all', 'Name' => 'Semua Customer'];


		// array_splice( $data, 0,0,$t );

		return json_encode($data);
	}


	public function listCustomer(Request $request){

		// dd($request->custId);
		$cust = [];
		$hadiah = [];
		$data = [];
		$where = "";
		if ($request->custId != "all") {

			# code...

			$where = "where `CustID` = '".$request->custId."'";
			
		}

		$cust = Customer::with('hadiah')->get();

		dd($cust);
		
	}

	public function totalHadiah(Request $request) {
		$hadiah = DB::select("select `Value` from `dbo.mobileconfig`");


		return explode("|", $hadiah[0]->Value);

	}
}



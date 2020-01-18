<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ordered_foods;
class PagesController extends Controller
{

	
 	public function home(){
 		return view('welcome');
 	}   

 	public function details(){
 		$details = DB::table('ordered_foods')
                 ->select('sId', DB::raw('sum(price*noOfOrders) as total'))
                 ->groupBy('sId')
                 ->get();
 		
 		return view('details')->with('details',$details);
 	}
}

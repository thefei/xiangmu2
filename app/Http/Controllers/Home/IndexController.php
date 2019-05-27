<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    //
    public function index()
    {
    	
    	$rs = DB::table('img')->get();




    	return view('home.index',[

    		'rs'=>$rs,
    	]

    	);
    }
}

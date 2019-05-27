<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CartController extends Controller
{
    //
    public function cartintro()
    {

    	$rs = DB::table('cart')->get();

    	return view('home.cart.cartintro',[
    		'title'=>'购物车页面',
    		'rs'=>$rs
    	]);
    }

    /**
     * 删除购物车信息的方法
     *
     * @return \Illuminate\Http\Response
     */
    public function remcart(Request $request)
    {
    	$gid = $request->gid;

    	$res = DB::table('cart')->where('id',$gid)->delete();

    	if($res){

    		return response()->json(['success'=>'删除成功','code'=>1]);
    	} else {

    		return response()->json(['error'=>'删除失败','code'=>0]);

    	}
    }

}

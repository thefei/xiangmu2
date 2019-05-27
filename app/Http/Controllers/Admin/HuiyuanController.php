<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Users;

class HuiyuanController extends Controller
{
    //前台会员显示页面
    public function huiyuan(Request $request)
    {

    	 $rs = Users::orderBy('id','asc')

            ->where(function($query) use($request){
                //检测关键字
                $username = $request->input('username');
                $email = $request->input('email');
                //如果用户名不为空
                if(!empty($username)) {
                    $query->where('uname','like','%'.$username.'%');
                }
                //如果邮箱不为空
                if(!empty($email)) {
                    $query->where('email','like','%'.$email.'%');
                }
            })
            ->paginate($request->input('num', 10));


        //显示一个列表页
        return view('admin.huiyuan.list',[
            'title'=>'会员的列表页面',
            'rs'=>$rs,
            'request'=>$request

        ]);

    }
    //修改会员状态值
   	public function xiugai($id){
   		$rs = Users::where('id',$id)->first();

   		// var_dump($rs);
   		return view('admin.huiyuan.edit',[
   			'title'=>'会员修改页面',
   			'rs'=>$rs,
   		]);
   	}
   	//处理会员修改信息
   	public function doxiugai(Request $request)
   	{	
   		$id = $request->id;
   		$rs = $request->except('id','_token');

   		// var_dump($rs);
   		$data = Users::where('id',$id)->update($rs);

   		if($data){
   			return redirect('/admin/huiyuan')->with('success','修改成功');
   		}else{
   			return back()->with('error','修改失败');
   		}

   		

   	}
}

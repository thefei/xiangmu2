<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\home\users;
use DB;
use Hash;

use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('home.login',['title'=>'前台的登录页面']);
    }

    //处理登陆信息
    public function dologin(Request $request)
    {
        $um = $request->uname;
      //根据用户名和数据库信息对比
      $rs = DB::table('users')->where('uname',$um)->first();
      //用户名的判定
      // var_dump($rs);die;
      //存贮用户的信息
      session(['id'=>$rs->id]);

      if(!$rs){

            return back()->with('error','用户名或密码错误');
      }
      //对比密码
      $pass = $rs->pass;
      // var_dump($pass);die;
      //hash检测
      
      if(!Hash::check($request->pass,$pass)){

        return back()->with('error','用户名或密码错误');
      }else{
        return redirect('/');
      }



    }
    //注册页面
     public function zhuce()
    {

        return view('home.zhuce');
    }
    public function dozhuce(Request $request)
    {
        
         $this->validate($request, [
            'uname' => 'required|regex:/^\w{6,12}$/',
            'pass' => 'required|regex:/^\S{8,16}$/',
            'repass'=>'same:pass',
           
            'phone'=>'regex:/^1[3456789]\d{9}$/',

            
        ],[
            'uname.required' => '用户名不能为空',
            'uname.regex' => '用户名格式不正确',
            'username.unique' => '用户名已经存在',
            'pass.required'=>'密码不能为空',
            'pass.regex'=>'密码格式不正确',
            'repass.same'=>'两次密码不一致',
           
            'phone.regex'=>'手机号码格式不正确',

        ]);

            $rs = $request->except('_token','_repass','code','repass');
         
            
            //判断用户名是否存在
            $data = DB::table('users')->where('uname',$request->uname)->first();


            if($data){
                return back()->with('error','此用户已存在,请更换用户名');
            }
            // 判断手机号是否存在
            $datas = DB::table('users')->where('phone',$request->phone)->first();
            if($datas){
                return back()->with('error','此手机号码已注册,请填写新的手机号码');
            }
            // die;
            //密码加密
            $rs['pass'] = Hash::make($request->pass);
            $res = DB::table('users')->insert($rs);

            if($res){
                return redirect('home/login')->with('success','注册成功,请登录');
            }else{
                return back()->with('error','注册失败,请检查网络重新填写信息');
            }





    }
    //前台退出
    //
    public function tuichu()
    {
        session(['id'=>'']);
        return redirect('/');
    }
    //去往个人中心修改密码
    public function scr()
    { 

      return view('home.me.scr',[
        'title'=>'会员修改密码页面',
      ]);
    }
   
    //处理密码修改信息
    public function doscr(Request $request)
    {

      //表单验证
       $this->validate($request, [
            
            'pass' => 'required|regex:/^\S{8,16}$/',
            'repass'=>'same:pass',
  
        ],[            
            'pass.required'=>'密码不能为空',
            'pass.regex'=>'密码格式不正确',
            'repass.same'=>'两次密码不一致',

        ]);


      $rs = $request->except('_token');
      $pwd = $request->pwd;
      $res = Users::find(session('id'));
      $password = $res->pass;
      //密码的hash检测
      if(!Hash::check($pwd,$password)){
        return redirect('home/me')->with('error','原密码错误');
      }
      $pass = Hash::make($request->pass);
      $us['pass'] = $pass;
      
      $data = Users::where('id',session('id'))->update($us);
      if($data){
        return redirect('/home/me')->with('success','修改成功');
      }else{
        return back()->with('error','修改失败');
      }
    }

  
}

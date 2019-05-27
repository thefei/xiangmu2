<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\home\usinfo;
use App\Model\home\Users;
class MeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session('id')){

           $id = session('id');
           $rs = Usinfo::where('uid',$id)->first();
           $res = Users::find($id);
           // var_dump($rs);die;
            return view('home.person',[

                  'id'=>$id,
                  'title'=>'个人中心',
                  'rs'=>$rs,
                  'res'=>$res,
        ]);




      }else{
        return redirect('home/login');
      }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = session('id');

        return view('home.me.create',[
            'id'=>$id,
            'title'=>'添加用户详情',
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rs = $request->except('_token','pic');

        // dump($rs);die;
        //判断是否有表单上传
        if($request->hasFile('pic')){

            //获取图片上传的信息
            $file = $request->file('pic');

            //名字
            $name = 'img_'.rand(1111,9999).time();

            //获取后缀
            $suffix = $file->getClientOriginalExtension();

            $file->move('./uploads',$name.'.'.$suffix);

            $rs['pic'] = '/uploads/'.$name.'.'.$suffix;

        }
        // var_dump($name);
        $id = $request->uid;
        // var_dump($id);
        $res = Usinfo::where('uid',$id)->first();
        if($res){
            Usinfo::where('uid',$id)->delete();    
        }
        // var_dump($rs);
        $data = Usinfo::create($rs);

        if($data){
           return  redirect('/home/me')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //主表信息
        $rs = Usinfo::find($id)->uinfo;
        //附表信息
        $res = Usinfo::find($id);
       
        return view('home.me.edit',[
            'rs'=>$rs,
            'res'=>$res,
            'title'=>'详情修改页面',
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //获取表单修改信息
        $rs = $request->except('_token','_method','pic');
        // var_dump($rs);die;
        //判断是否有文件上传
         if($request->hasFile('pic')){

            //获取图片上传的信息
            $file = $request->file('pic');

            //名字
            $name = 'img_'.rand(1111,9999).time();

            //获取后缀
            $suffix = $file->getClientOriginalExtension();

            $file->move('./uploads',$name.'.'.$suffix);

            $rs['pic'] = '/uploads/'.$name.'.'.$suffix;

        }
        $data = Usinfo::where('id',$id)->update($rs);

        if($data){
            return redirect('/home/me')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

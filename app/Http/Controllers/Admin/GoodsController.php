<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Category;
use App\Model\Admin\Goods;
use App\Model\Admin\Goodsimg;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $rs = Goods::orderBy('id','asc')

            ->where(function($query) use($request){
                //检测关键字
                $gname = $request->input('gname');
                $price = $request->input('price');
                //如果用户名不为空
                if(!empty($gname)) {
                    $query->where('gname','like','%'.$gname.'%');
                }
                //如果邮箱不为空
                if(!empty($price)) {
                    $query->where('price','like','%'.$price.'%');
                }
            })
            ->paginate($request->input('num', 10));


        return view('admin.goods.list',[
            'title'=>'商品的列表页面',
            'rs'=>$rs,
            'request'=>$request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取分类信息
        $rs = Category::select(DB::raw('*,concat(path,id) as paths'))->
        orderBy('paths','asc')->
        get();

        foreach($rs as $k => $v){
            //根据字符串重复的次数
            $info = substr_count($v->path, ',')-1;
            //改变分类名的样式
            $v->catename = str_repeat('|--', $info).$v->catename;
        }

        return view('admin.goods.create',[
            'title'=>'商品的添加页面',
            'rs'=>$rs

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
        //表单验证
        $rs = $request->except('_token','gimg');

        $data = Goods::create($rs);
        //商品的id
        // $gid = $data ->id;

        //判断商品是否保存成功
        // if()

        //商品的图片处理
        if ($request->hasFile('gimg')) {

            $files = $request->file('gimg');

            $gs = [];
            //遍历
            foreach($files as $k => $v){
                $garr = [];
                // $garr['gid'] = $gid;
                //更改名
                $names = 'gimg_'.rand(1111,9999).time();
                //获取后缀
                $suffix = $v->getClientOriginalExtension();
                //移动
                $v->move('./uploads/gimgs',$names.'.'.$suffix);
                //保存的是商品图片的路径
                $garr['gimg'] = "/uploads/gimgs/".$names.'.'.$suffix;
                //第一种方式
                // $gs[] = $garr;

                //第二种方式
                array_push($gs,$garr);
            }
        }

        try{ 
            //存储商品的图片
            $res = $data->gm()->createMany($gs);

            if ($res) {
                
                return redirect('/admin/goods')->with('success','添加成功');
            }

        }catch(\Exception $e){
            
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
        //根据id 删除图片存放的位置
        $res = Goodsimg::find($id);

        $data = @unlink('.'.$res->gimg);

        if(!$data){

            echo '删除路径图片失败';
        }

        //根据id获取信息
        $rs = Goodsimg::where('id',$id)->delete();

        if($rs){

            echo 1;
        } else {

            echo 0;
        } 

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //根据id获取数据
        $rs = Goods::find($id);

        //获取关联表的商品图片信息
        //一对多的查询  只查询关联的信息
        $gs = $rs->gm()->get();

        $res = Category::select(DB::raw('*,concat(path,id) as paths'))->
        orderBy('paths','asc')->
        get();

        foreach($res as $k => $v){
            //根据字符串重复的次数
            $info = substr_count($v->path, ',')-1;
            //改变分类名的样式
            $v->catename = str_repeat('|--', $info).$v->catename;
        }


        return view('admin.goods.edit',[
            'title'=>'商品的修改页面',
            'rs'=>$rs,
            'res'=>$res,
            'gs'=>$gs
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
        //获取数据信息
        $rs = $request->except('_token','_method','gimg');

        //
        $data = Goods::where('id',$id)->update($rs);

          //商品的图片处理
        if ($request->hasFile('gimg')) {

            $files = $request->file('gimg');

            $gs = [];
            //遍历
            foreach($files as $k => $v){
                $garr = [];
                $garr['gid'] = $id;
                //更改名
                $names = 'gimg_'.rand(1111,9999).time();
                //获取后缀
                $suffix = $v->getClientOriginalExtension();
                //移动
                $v->move('./uploads/gimgs',$names.'.'.$suffix);
                //保存的是商品图片的路径
                $garr['gimg'] = "/uploads/gimgs/".$names.'.'.$suffix;
                //第一种方式
                // $gs[] = $garr;

                //第二种方式
                array_push($gs,$garr);
            }
        }

        //添加商品的关联图片
        $res = DB::table('goodsimg')->insert($gs);

        if($res){

            return redirect('/admin/goods')->with('success','修改成功');
        } else {

             return redirect('/admin/goods')->with('success','修改失败');
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
        //删除图片的路径信息
        $rs = Goodsimg::where('gid',$id)->get();

        foreach($rs as $k => $v){

            @unlink('./'.$v->gimg);
        }
        
        $gm = Goods::find($id);

        $gm->delete();

        $res = $gm->gm()->delete();

        if($res){

            return redirect('/admin/goods')->with('success','删除成功');
        } else {

            return back()->with('error','删除失败');
        }



        



    }


}

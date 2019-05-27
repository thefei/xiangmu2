<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Qiniu\Auth;  
use Qiniu\Storage\UploadManager;

class IndexController extends Controller
{
    //
    public function index()
    {
    	return view('admin.index');
    }


    /**
     * 七牛云存储
     *
     * @return \Illuminate\Http\Response
     */
    public function qiniu()
    {
    	return view('admin.qiniu');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doqiniu(Request $request)
    {
    	//获取图片

    	$file = $request->file('pic') ;
        if(!$file){
            return back() ;
        }
        if(!$file->isValid()){
            return back() ;
        }

        // 需要填写你的 Access Key 和 Secret Key
        $accessKey = env('QINIU_ACCESSKEY');
        $secretKey = env('QINIU_SECRETKEY');
        // 构建鉴权对象
        $auth = new Auth($accessKey, $secretKey);
        // 要上传的空间
        $bucket = env('QINIU_BUCKET');
        // 生成上传 Token
        $token = $auth->uploadToken($bucket);
        // 要上传文件的本地路径
        $filePath = $file->getRealPath();
        // 上传到七牛后保存的文件名
        $name = 'img_'.rand(1111,9999).time();
        $key = 'lamp/'.$name.'.'.$file->getClientOriginalExtension();
        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new UploadManager();
        // 调用 UploadManager 的 putFile 方法进行文件的上传。
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);



       /* if ($err !== null) {
            return response()->json(['ResultData'=>'失败','info'=>'失败']);
        } else {
            $info = ['name'=>$data['name'],
                    'level'=>$data['level'],
                    'pic'=>$ret['key'],
                    'addtime'=>$date,
                    'status'=>'1'];
            $ids = \DB::table('data_demo')->insertGetid($info);
            if($ids){
                return redirect('/demo');
            }else{
                dd('添加失败');
            }
        }*/
    }
}

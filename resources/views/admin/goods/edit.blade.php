@extends('common/admins')

<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>

<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

@section('title',$title)

@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>{{$title}}</span>
        </div>

        @if (count($errors) > 0)
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif


        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/goods/{{$rs->id}}" method='post' enctype='multipart/form-data'>
        		<div class="mws-form-inline">
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">
                            分类列表
                        </label>
                        <div class="mws-form-item">
                            <select class="small" name='catid'>
                                <option value='0'>
                                    请选择
                                </option>
                                @foreach($res as $k => $v)

                                @if($rs->catid == $v->id)
                                <option value='{{$v->id}}' selected>
                                    {{$v->catename}}
                                </option>
                                @else
                                <option value='{{$v->id}}'>
                                    {{$v->catename}}
                                </option>

                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

        			<div class="mws-form-row">
        				<label class="mws-form-label">商品名</label>
        				<div class="mws-form-item">
        					<input type="text" name='gname' class="small" value="{{$rs->gname}}">
        				</div>
        			</div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">尺寸</label>
                        <div class="mws-form-item">
                            <input type="text" name='size' class="small" value="{{$rs->size}}">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">颜色</label>
                        <div class="mws-form-item">
                            <input type="text" name='color' class="small" value="{{$rs->color}}">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">价格</label>
                        <div class="mws-form-item">
                            <input type="text" name='price' class="small" value="{{$rs->price}}">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">库存</label>
                        <div class="mws-form-item">
                            <input type="text" name='num' class="small" value="{{$rs->num}}">
                        </div>
                    </div>

        			<div class="mws-form-row">
                        <label class="mws-form-label">商品详情</label>
                        <div class="mws-form-item">
                            <script id="editor" name='content' type="text/plain" style="width:800px;height:450px;">{!!$rs->content!!}</script>
                        </div>
                    </div>

        			<div class="mws-form-row">
                    	<label class="mws-form-label">商品图片</label>
                    	<div class="mws-form-item">
                            @foreach($gs as $k => $v)
                            <img gimgid = "{{$v->id}}" src="{{$v->gimg}}" class='imgs' alt="" style='width:130px'>
                            @endforeach

                        	<input type="file" multiple name='gimg[]' style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;">
                        </div>
                    </div>
        			
        			<div class="mws-form-row">
        				<label class="mws-form-label">状态</label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><label><input type="radio" name='status' value='1' @if($rs->status == 1) checked @endif> 上架</label></li>
        						<li><label><input type="radio" name='status' value='0' @if($rs->status == 0) checked @endif> 下架</label></li>
        					</ul>
        				</div>
        			</div>
        		</div>
        		<div class="mws-button-row">
                    {{csrf_field()}}
        			{{method_field('PUT')}}
        			<input type="submit" value="修改" class="btn btn-primary">
        		</div>
        	</form>
        </div>    	
    </div>
@stop

@section('js')

<script>
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    //让错误的信息3秒钟之后消失
    /*setInterval(function(){


    },3000)*/

    setTimeout(function(){
        // $('.mws-form-message').slideUp(2000);
        $('.mws-form-message').fadeOut(2000);

    },3000)

    // delay(3000).


    //商品图片的删除
    $('.imgs').click(function(){

        //获取图片的id号
        var gimgid = $(this).attr('gimgid');

        var gm = $(this);

        $.get('/admin/goods/'+gimgid,{},function(data){

            if(data == 1){

                gm.remove();
            }
        })

    })

    
</script>

@stop
@extends('common/admins')

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
        	<form class="mws-form" action="/admin/category/{{$rs->id}}" method='post'>
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">分类名</label>
        				<div class="mws-form-item">
        					<input type="text" name='catename' class="small" value='{{$rs->catename}}'>
        				</div>
        			</div>
                    {{--
                    @php
                        $info = DB::table('category')->where('id',$rs->pid)->first();

                    @endphp
                    <div class="mws-form-row">
                        <label class="mws-form-label">父级分类</label>
                        <div class="mws-form-item">
                            <input type="text" name='pid' class="small" value='{{$info->catename}}' disabled>
                        </div>
                    </div>

                    --}}

                    <div class="mws-form-row">
                        <label class="mws-form-label">
                            分类列表
                        </label>
                        <div class="mws-form-item">
                            <select class="small" name='pid' disabled>
                                <option value='0'>
                                    请选择
                                </option>
                                @foreach($res as $k => $v)
                                    @if($rs->pid == $v->id)
                                        <option value='{{$v->id}}' selected="selected">{{$v->catename}}</option>
                                    @else
                                        <option value='{{$v->id}}'>{{$v->catename}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
        			
        			<div class="mws-form-row">
        				<label class="mws-form-label">状态</label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><label><input type="radio" name='status' value='1' @if($rs->status==1)checked @endif> 开启</label></li>
        						<li><label><input type="radio" name='status' value='0' @if($rs->status==0)checked @endif> 禁用</label></li>
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
    //让错误的信息3秒钟之后消失
    /*setInterval(function(){


    },3000)*/

    setTimeout(function(){
        // $('.mws-form-message').slideUp(2000);
        $('.mws-form-message').fadeOut(2000);

    },3000)

    // delay(3000).

    
</script>

@stop
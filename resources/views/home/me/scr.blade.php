@extends('common/persons')

@section('title',$title)

@section('content')

<div class="right_style">
	
	<form style="margin-left:30px" action="/home/doscr" method="post" >
  		<div class="form-group" style="width:400px">
    	<label for="exampleInputEmail1">原密码</label>
    	<input type="password" class="form-control" id="exampleInputEmail1" placeholder="填写原密码" name="pwd">
  		</div>
  		<div class="form-group" style="width:400px">
    	<label for="exampleInputEmail1">新密码</label>
    	<input type="password" class="form-control" id="exampleInputEmail1" placeholder="填写新密码" name="pass">
  		</div>
  		<div class="form-group" style="width:400px">
    	<label for="exampleInputEmail1">新密码</label>
    	<input type="password" class="form-control" id="exampleInputEmail1" placeholder="再次输入新密码" name="repass">
  		</div>
  		 @if (count($errors) > 0)
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li style="color:red">{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		@if(session('error'))
			 <div class="mws-form-message error">
		        <ul>
		           
		                <li style="color:red">{{ session('error') }}</li>
		           
		        </ul>
		    </div>
  		@endif
  

  {{csrf_field()}}
  <button type="submit" class="btn btn-info">点击修改</button>
</form>

 </div>

@stop
@section('js')


	<script type="text/javascript">
		
		setTimeout(function(){
			$('.mws-form-message').hide();
		},2000)
	
	</script>
	

@stop


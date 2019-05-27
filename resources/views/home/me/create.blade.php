@extends('common/persons')

@section('title',$title)

@section('content')



 <div class="right_style">
	
	<form style="margin-left:30px" action="/home/me" method="post" enctype="multipart/form-data">
  <div class="form-group" style="width:400px">
    <label for="exampleInputEmail1">用户名</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写用户名" name="name">
  </div>
  <!-- <div class="form-group" style="width:400px">
    <label for="exampleInputEmail1">性别</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写性别" name="sex">
  </div> -->
  <div class="form-group" style="width:400px">
    <label for="exampleInputEmail1">收货地址</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写您的收货地址" name="address">
  </div>

  <input type="text" name="uid" hidden value="{{$id}}">

  <div class="form-group">
    <label for="exampleInputFile">上传头像</label>
    <input type="file" id="exampleInputFile" name="pic">
    <p class="help-block">选择您的头像</p>
  </div>
  <label class="radio-inline">
  <input type="radio" name="sex" id="inlineRadio1" value="1"> 男
</label>
<label class="radio-inline">
  <input type="radio" name="sex" id="inlineRadio2" value="0"> 女
</label><br />

  {{csrf_field()}}
  <button type="submit" class="btn btn-info">添加</button>
</form>

 </div>


@stop
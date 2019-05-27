@extends('common/persons')
@section('title',$title)
@section('content')
<!--右侧样式-->
   <div class="right_style" >
 <!--消费记录样式-->
  <div class="user_address_style" style="margin-left:30px">
    <table class="table table-hover">
      <tr>
        <th></th>
        <th>我的信息</th>
      </tr>
      <tr>
        <td>用户名:</td>
        <td>{{$res->uname}}</td>
      </tr>
      <tr>
        <td>真实姓名:</td>
        <td>{{$rs->name}}</td>
      </tr>
      <tr>
        <td>手机号码:</td>
        <td>{{$res->phone}}</td>
      </tr>
      <tr>
        <td>性别:</td>
        
       <td> 
        {{$rs->sex? '男' : '女'}}
       </td>
      </tr>
      <tr>
        <td>收货地址:</td>
        <td>{{$rs->address}}</td>
      </tr>
      <tr>
        <td>操作</td>
        <td>
          <a href="/home/me/{{$rs->id}}/edit" class="btn btn-info">修改</a>
        </td>
      </tr>
      <tr>
          @if(session('success'))
            <td id ="tishi"><p style="color:red">{{session('success')}}</p></td>
          @endif
          @if(session('error'))
            <td id ="tishi"><p style="color:red">{{session('error')}}</p></td>
          @endif
      </tr>
    </table>  
   </div>
  </div>
@stop
@section('js')

<script type="text/javascript">
  // alert($);
    setTimeout(function(){
      $('#tishi').hide();
    },2000)
</script>
@stop


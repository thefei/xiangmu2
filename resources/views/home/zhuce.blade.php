<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>注册界面</title>
		<link rel="stylesheet" href="/homes/css/reset.css" />
		<link rel="stylesheet" href="/homes/css/common.css" />
		<link rel="stylesheet" href="/homes/css/font-awesome.min.css" />
		<style type="text/css">
		.mws-form-message{
			width:300px;
			height:80px;
			/*background:pink;*/
			margin-left:30px;
			color:red;

		}
		</style>
	</head>
	<body>
		<div class="wrap login_wrap">
			<div class="content">
				
				<div class="logo"></div>
				
				<div class="login_box">	
					
					<div class="login_form">
						<div class="login_title">
							注册
						</div>
						<form action="/home/dozhuce" method="post">
							<div class="form_text_ipt">
								<input name="uname" type="text" placeholder="用户名">
							</div>
							<div class="ececk_warning"><span>用户名不能为空</span></div>
							<div class="form_text_ipt">
								<input name="phone" type="text" placeholder="手机号/邮箱">
							</div>
							<div class="ececk_warning"><span>手机号/邮箱不能为空</span></div>
							<div class="form_text_ipt">
								<input name="pass" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<div class="form_text_ipt">
								<input name="repass" type="password" placeholder="重复密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<div class="form_text_ipt">
								<input name="code" type="text" placeholder="验证码">
							</div>
							<div class="ececk_warning"><span>验证码不能为空</span></div>

							@if(session('error'))
								<div class="mws-form-message">
									{{session('error')}}
								</div>
							@endif









							@if (count($errors) > 0)
		    			<div class="mws-form-message error">
		       				 <ul>
		           				 @foreach ($errors->all() as $error)
		                			<li>{{ $error }}</li>
		           				 @endforeach
		        			 </ul>
		    			</div>
							@endif
							
							<div class="form_btn">
									{{csrf_field()}}
								<button type="submit">注册</button>
							</div>
							<div class="form_reg_btn">
								<span>已有帐号？</span><a href="/home/login">马上登录</a>
							</div>
						</form>
						<div class="other_login">
							<div class="left other_left">
								<span>其它登录方式</span>
							</div>
							<div class="right other_right">
								<a href="#"><i class="fa fa-qq fa-2x"></i></a>
								<a href="#"><i class="fa fa-weixin fa-2x"></i></a>
								<a href="#"><i class="fa fa-weibo fa-2x"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="/homes/js/jquery.min.js" ></script>
		<!-- <script type="text/javascript" src="/homes/js/common.js" ></script> -->
		<div style="text-align:center;">

</div>
	</body>
</html>
@section('js')
    <!-- 让显示的信息消失 -->

    <script type="text/javascript">
    	
        setTimeout(function(){
            $('.mws-form-message').hide();
        },3000)
    </script>
@stop

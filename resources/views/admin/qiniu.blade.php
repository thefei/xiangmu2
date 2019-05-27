<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/admin/doqiniu" method='post' enctype='multipart/form-data'>
		
		文件上传: <input type="file" name='pic' /><br>

		{{csrf_field()}}

		<button>提交</button>

	</form>


	<img src="http://prxo5r8yh.bkt.clouddn.com/lamp/img_77521558576401.jpg" alt="">
</body>
</html>
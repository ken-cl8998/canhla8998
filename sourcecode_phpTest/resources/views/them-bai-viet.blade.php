<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới bài viết</title>
	<style type="text/css">
		.wrapper{
			margin: auto;
			width: 500px;
			height: 300px;
			background-color: #F5F5DC;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		 <form action="" method="POST">
		 	@if(session('thongbao'))
	                    <div>
	                        {{session('thongbao')}}
	                    </div>
	                @endif
		 	<h3 style="align:center">Thêm bài viết mới</h3>
                   	<input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div>
                        	<table>
                        		<tr><td><textarea name="cn_noidung" rows="4" cols="50"></textarea></td></tr>
                        		<tr><td><input type="date" name="cn_date"></td></tr>
                        		<tr><td><button type="submit">Thêm</button></td></tr>
                        	</table>
                        </div>
                </form>
	</div>
</body>
</html>
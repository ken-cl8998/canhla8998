<!DOCTYPE html>
<html>
<head>
	<title>Sửa bài viết</title>
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
		 	<h3 style="align:center">Sửa bài viết</h3>
                   	<input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div>
                        	<table>
                        		@foreach($news as $new)
                        		<tr><td><textarea name="cn_noidung" rows="4"  cols="50">{{$new->content}}</textarea></td></tr>
                        		<tr><td><input type="date" name="cn_date" value="<?php echo date('Y-m-d',strtotime($new->created_time)) ?>"></td></tr>
                        		@endforeach
                        		<tr><td><button type="submit">Sửa</button></td></tr>
                        	</table>
                        </div>
                </form>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>User-Login</title>
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
			
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<table width="100%">
				<tr>
					<td align='center' width='100%'>
						<h3 >User-Login</h3></br>
						@if(session('thongbao'))
				                        {{session('thongbao')}}
				                @endif
					</td>
				</tr>
				<tr>
					<td align='center' width='100%'>
						Email:&nbsp;<input type="text" name="email">
					</td>
				</tr>
				<tr>
					<td align='center' width='100%'>
						Password:&nbsp;<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td align='center' width='100%'>
						<button type="submit">Đăng nhập</button>
					</td>
				</tr>
			</table>
		</form>
		
	</div>
</body>
</html>
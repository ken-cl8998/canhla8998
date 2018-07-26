<!DOCTYPE html>
<html>
<head>
	<title>PHP Test</title>
	<style type="text/css">
		.wrapper{
			width: 700px;
			height: 500px;
			margin: auto;
			background-color: #F0F8FF;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<table width="100%">
			<tr>
				<td width="100%" align="center"><h3>Bài viết</h3></td>
			</tr>
			@foreach($news as $news)
			<tr class="header_tt" style="background-color: #00CED1">
				<td width="100%" align="left">{!! $news->content !!}</td>
			</tr>
			<tr height="10"><td></td></tr>
			@endforeach
		</table>
	</div>
</body>
</html>
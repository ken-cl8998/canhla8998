<!DOCTYPE html>
<html>
<head>
	<title>PHP Test</title>
	<style type="text/css">
		.wrapper{
			width: 700px;
			height: 500px;
			margin: auto;
		}
		.td_border{
			border-right:1px solid black;border-bottom:1px solid black;
		}
		.td_border_1{
			border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;
		}
		.td_border_01{
			border-left:1px solid black;border-right:1px solid black;border-top:1px solid black;border-bottom:1px solid black; 
		}
		.td_border_02{
			border-right:1px solid black;border-top:1px solid black;border-bottom:1px solid black; 
		}
	</style>
</head>
<body>
	<div class="wrapper">
		@if(session('thongbao'))
                    <div>
                        {{session('thongbao')}}
                    </div>
                @endif
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr class="header_tt">
				<td width="10%" align="center" class="td_border_01">STT</td>
				<td width="50%" align="center" class="td_border_02">Nội dung</td>
				<td colspan="3" align="center" class="td_border_02">Chức năng&nbsp;&nbsp;<span style="color: red;"><a href="author-bai-viet/themmoi">Thêm mới</a></span></td>
			</tr>
			<?php $num = 0?>
			@foreach($news as $new)
			<?php $num = $num + 1?>
			<tr class="header_cont" height="30">
				<td width="10%" align="center" class="td_border_1" ><?php echo $num;?></td>
				<td width="50%" align="left"   class="td_border">{!! $new->content !!}</td>
				<td width="11%" align="center" class="td_border"><a href="author-bai-viet/sua/{{$new->id_tintuc}}">Sửa</a></td>
				<td width="11%" align="center" class="td_border"><a href="author-bai-viet/xoa/{{$new->id_tintuc}}">Xóa</a></td>
				<td width="18%" align="center" class="td_border">@if($new->style === 0)Chờ phê duyệt @endif</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>
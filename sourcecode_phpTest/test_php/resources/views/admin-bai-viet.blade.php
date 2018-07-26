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
				<td width="65%" align="center" class="td_border_02">Nội dung</td>
				<td width="25%" align="center" class="td_border_02">Phê duyệt bài viết</td>
			</tr>
			<?php $num = 0?>
			@foreach($news as $new)
			<?php $num = $num + 1?>
			<tr class="header_cont" height="30">
				<td width="10%" align="center" class="td_border_1"><?php echo $num;?></td>
				<td width="65%" align="left"   class="td_border">{!! $new->content !!}</td>
				<td width="25%" align="center" class="td_border"><a href="admin-bai-viet/duyet/{{$new->id_tintuc}}">@if($new->style === 0)Duyệt @endif</a></td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>
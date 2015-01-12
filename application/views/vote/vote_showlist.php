<!DOCTYPE html>
<html>
<head>
	<title>投票人列表</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>source/css/contract.css">
</head>
  <body>
  
  		<legend>投票人</legend>
  		<table>
  		    
  		    <th>#</th>
  			<th>姓名</th>
  			<th>简要介绍</th>
  			<th>照片</th>
  			<th colspan="2" style="text-align: center;width: 100px">操作</th>
  			
  			<?php foreach ($vote as $item):?>
  			<tr>
  			    <td name="id"><?=$item->id?></td>
  				<td name="name"><?=$item->name?></td>
  				<td name="intro" width="200px" style="text-align: center;"><?=$item->intro?></td>
  				<td class="photo"><a href="<?php if($item->photo_url!=''){echo '';}else {echo site_url("uploads/upload/$item->id/vote");}?>"><img width="100" height="100" alt="" src="<?= base_url().$item->photo_url?> "></a></td>
  			    <td style="text-align: center;width: 100px"><a href="<?= site_url("vote/vote_update/$item->id")?>">修改</a></td>
  			    <td><a onclick="return confirm('确定删除?')" href="<?= site_url("vote/vote_delete/$item->id")?>">删除</a></td>
  			</tr>
  			<?php endforeach;?>
  		</table>
  	
  </body>
</html>
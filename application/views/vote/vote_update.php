<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>source/css/register.css">
    <title>修改投票人</title>
  </head>
  <body>
    <div style="color: #85A71E;font-family: 微软雅黑;padding: 5px;border: solid #85A71E;">
        <H1>修改投票人</H1>
       
        <form action="<?= site_url('vote/vote_do_update')?>" method="post">
          <input type="hidden" name="id" value="<?= $vote->id?> " required="required">*必填
            
          <ul>
            <li>
              <label>姓名：</label>
              <input type="text" name="name" value="<?= $vote->name?> " required="required">*必填
            </li>
   
            <li class="recieve">
          <label>详细信息：</label>
           
            <textarea rows="8" cols="80" name="intro"  required="required"><?= $vote->intro?></textarea>
            </li>
            <li>
              <label>图片：</label>
            <a href="<?php echo site_url("uploads/upload/$vote->id/vote");?>"><img width="100" height="100" alt="" src="<?= base_url().$vote->photo_url?> "></a>
  			</li>
            <li class="button">
              <button class="add">添加</button>
              
            </li>
          </ul>
        </form>
    
    </div>
  </body>
</html>
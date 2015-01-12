<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>source/css/register.css">
    <title>添加投票人员界面</title>
  </head>
  <body>
   
      <div style="color: blue;font-family: 微软雅黑;padding: 5px;border: solid #85A71E;">
   
        <H1>添加投票人</H1>
        <form action="<?= site_url('vote/vote_do_add')?>" method="post">
          <ul>
            <li>
              <label>姓名：&nbsp;&nbsp;</label>
              <input type="text" name="name" required="required">*必填
            </li>
            <li>
              <label>简单介绍：</label>
               <textarea rows="8" cols="80" name="intro"  required="required"></textarea>
           
            </li>
            
            <li class="button">
              <button class="add">添加</button>
              <button class="clear">清除</button>
            </li>
          </ul>
        </form>
      
    </div>
  </body>
</html>
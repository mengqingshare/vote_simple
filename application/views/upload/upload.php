<html>
<div style="font-size:30px;color:blue;font-family: 微软雅黑;padding: 5px;border: solid #85A71E;">
   
<form action="<?=site_url('uploads/doupload')?>" method="post" enctype="multipart/form-data">
<label for="file">上传文件</label><br />
<input type="file" name="userfile" id="file" /> 
<input type="hidden" name="id" value="<?=$id?>" /> 
<input type="hidden" name="seg" value="<?=$seg?>" /> 
<br /><br />
<input style="font-size:20px;color:green;font-family: 微软雅黑;"type="submit" name="submit" value="提交" />
</form></div>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="Author" content=""/>
	<meta name="Keywords" content=""/>
	<meta name="Description" content=""/>
	<meta name="apple-mobile-web-app-capable" content="no"/>
	<title>投票</title>
	
	<style>
		html{font-family:微软雅黑;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
		body{margin:0;background-color:#eeeeee;}
		.divbody{}
		.banner1{background-color:#006666;height:100px;margin:0;padding:0;text-align:center;}
		.banner2{width:926px;overflow:hidden;margin:0 auto;text-align:left;}
		.banner3{margin:30px 40px;height:100%;line-height:100%;font-size:2em;}
		.character1{text-align:center;font-size:1em;}
		.character2{width:926px;overflow:hidden;margin:0 auto;}
		.character3{text-align:center;height:100%;background-color:#fafafa;border-bottom:6px solid #bfbfbf;overflow:hidden;position:relative;}
		.character4 {margin: 10px 10px;float:left;overflow:hidden;font-size:0.8em;}
        .character5 {font-size: 1.2em;color: red;}
		.character_text{word-wrap: break-word;word-break: normal;width:165.2px;font-size:0.9em;text-align:left;}
		.img{width:165.2px;height:250.4px;}
		.submit{clear:both;margin-top:20px;}
		#vote_checkbox{font-size:1.3em;}
		@media @media (min-width:1200px){
			.character2{width:926px}
		}
		@media (min-width:960px) and (max-width:1199px){
			.character2{width:740.8px;}
			.img{width:165.2px;height:250.4px;}
			.banner2{width:740.8px;}
			.character_text{width:165.2px;}
		}
		@media (min-width:721px) and (max-width:959px){
			.character2{width:555.6px;}
			.img{width:165.2px;height:250.4px;}
			.banner2{width:555.6px;}
			.character_text{width:165.2px;}
		}
		@media (max-width:720px){
			.character2{width:287.8px;}
			.img{width:280px;height:210px;}
			.banner2{width:287.8px;}
			.character_text{width:280px;}
		}
		@media(-webkit-min-device-pixel-ratio=1.5){
		
		}
		@media(-webkit-min-device-pixel-ratio=2){
		
		}
	</style>
 </head>
 <body>
 
		 <!--banner-->
		 <div class="divbody">
		 <div class="banner1" >
		  <div class="banner2"><div class="banner3">中南元旦晚会投票</div></div>
		  </div> 
		  <!--人物-->
		  <div>
		  <form action="<?= site_url('vote/vote_process')?>" method="post">
		  <div class="character1">
		  <div class="character2">
		      
		      <?php foreach ($vote as $item):?>
		      <div class="character3" id="character31"><div class="character4"><img src="<?= base_url().$item->photo_url?>" class="img"><div class="character5"><?= $item->name?></div><div class="character_text"><?= $item->intro?></div><div style="font-size:2em"><input type="checkbox" name ="vote_checkbox[]" value ="<?=$item->id?>" id="vote_checkbox" />给TA投票</div></div></div>
			  
		      <?php endforeach;?>
		 </div>
		  <div class="submit"><input type ="image" name="pic" value="提交"src="<?= base_url()?>source/img/submit.png"/></div>	</div>
</form>
</div>
 </div>
 </body>
</html>

<!DOCTYPE html>
<html>
  <head>
	<title>管理员导航菜单</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>source/css/tree.css">
  </head>
  <body>
    <div>
	<li>  
       <label for="subsubfolder1">投票用户管理 </label>  
       <input id="subsubfolder1" type="checkbox" />  
       <ol>  
          <li>  
            <label for="subsubfolder2"><a href="<?= site_url('vote/vote_showlist')?>"  target="show">投票用户列表</a></label>  
            <label for="subsubfolder2"><a href="<?= site_url('vote/vote_add')?>"  target="show">增加投票用户</a></label>  
            <label for="subsubfolder2"><a href="<?= site_url('vote/vote_index')?>"  target="_blank">投票用户展示列表</a></label>  
            <label for="subsubfolder2"><a href="<?= site_url('vote/vote_result')?>"  target="_blank">投票结果</a></label>  
            
            <input id="subsubfolder2" type="checkbox" />  
          </li>
        </ol>  
    </li>
        
    </div>       
  </body>
</html>
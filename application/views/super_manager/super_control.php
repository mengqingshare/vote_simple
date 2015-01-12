
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理界面</title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>source/css/manage.css">
</head>
<body>
<div class="head">
      <?php $this->load->view('super_manager/super_head.php');?>
    </div>
    <div class="tree">
     <?php $this->load->view('super_manager/super_tree.php');?>
    </div>
  	<div class="order">
  	<iframe src="<?=site_url('vote/show_manager_index')?>" name="show" class="order"></iframe>
    </div>
  </body>
</html>
<?php
class Uploads extends CI_Controller {
	private $up_id;
	private $up_seg;
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form'));
	}
	
	//上传页面
	function upload($id,$seg){
	$data['id']=$id;
	$data['seg']=$seg;
    $this->load->view('upload/upload',$data);
	}
	
	//执行上传
	function doupload(){
		$this->up_id=$this->input->post('id');
		$this->up_seg=$this->input->post('seg');
	   $config['upload_path'] ='./source/uploads/';

	   $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	   $this->load->library('upload',$config);
	   
	   if (!$this->upload->do_upload())
	   {
	   	$error = array('error' => $this->upload->display_errors());
	    var_dump($error);
	   }else{
	   	$arr=$this->upload->data();
	   	$path='source/uploads/'.$arr['file_name'];
	   	if($this->up_seg=='vote'){
	   		$vote = new Voter1222_model();
	   		$vote->get_where(array('id'=>$this->up_id));
	   		if($vote->photo_url!=''){
	   			unlink('./'.$vote->photo_url);
	   		}
	   		$vote->photo_url=$path;
	   		$vote->save();
	   		header("content-type:text/html; charset=utf8");
	   		echo '<script language="JavaScript">'.'alert("上传成功！")'.'</script>';
	   		
	   		redirect("vote/vote_showlist","refresh");
	   	}
	   	
	   }
	
	
	}
	
}
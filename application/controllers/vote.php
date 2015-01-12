<?php
class Vote extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	function vote_index(){
		
		$vote = new Voter1222_model();
		$vote->order_by('id','desc')->get();
		$data['vote']=$vote;
		$this->load->view('vote/vote_index.php',$data);
	}
	function vote_result(){
		$vote = new Voter1222_model();
		$vote->order_by('id','desc')->get();
		$name=array();
		$vote_num=array();
		foreach ($vote as $item){
			array_push($name, $item->name);
			array_push($vote_num, intval($item->vote_num));
		}
		$data['name']=json_encode($name);
		$data['vote_num']=json_encode($vote_num);
		$this->load->view('vote/vote_result.php',$data);
	}
	
	function vote_process(){
		$vote_checkbox=$this->input->post('vote_checkbox');
		foreach ($vote_checkbox as $item){
			$vote = new Voter1222_model();
			$vote->get_where(array('id'=>$item));
			$vote->vote_num++;
			$vote->save();
		}
		header("content-type:text/html; charset=utf8");
		echo '<script language="JavaScript">'.'alert("投票成功！")'.'</script>';
		redirect("vote/vote_result","refresh");
	}
	
	function vote_add(){
		$this->load->view('vote/vote_add.php');
	}
	function vote_showlist(){
		$vote = new Voter1222_model();
		$vote->order_by('id','desc')->get();
		$data['vote']=$vote;
		$this->load->view('vote/vote_showlist.php',$data);
	}
	function vote_do_add(){
		$vote = new Voter1222_model();
		
		$vote->name=$this->input->post('name');
		$vote->intro=$this->input->post('intro');
		$vote->save();
		
		redirect("vote/vote_showlist","refresh");
	}
	function vote_delete($id){
		$vote = new Voter1222_model();
		$vote->get_where(array('id'=>$id));
		if($vote->photo_url!=''){
			unlink('./'.$vote->photo_url);
		}
		$vote->delete();
		header("content-type:text/html; charset=utf8");
		echo '<script language="JavaScript">'.'alert("删除成功！")'.'</script>';
		redirect("vote/vote_showlist","refresh");
	}
	function vote_update($id){
		$vote = new Voter1222_model();
		$vote->get_where(array('id'=>$id));
		$data['vote']=$vote;
		$this->load->view('vote/vote_update.php',$data);
	}
	function vote_do_update(){
		$vote = new Voter1222_model();
		$vote->get_where(array('id'=>$this->input->post('id')));
		$vote->name=$this->input->post('name');
		$vote->intro=$this->input->post('intro');
		
		$vote->save();
		header("content-type:text/html; charset=utf8");
		echo '<script language="JavaScript">'.'alert("修改成功！")'.'</script>';
		
		redirect("vote/vote_showlist","refresh");
	}
	
	function show_manager_index(){
		$this->load->view('super_manager/showindex.php');
	}
	function show_super_manager(){
		$this->load->view('super_manager/super_control.php');
	
	}
	
}
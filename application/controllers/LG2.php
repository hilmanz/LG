<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LG2 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
	parent::__construct();
	$this->load->model('mymodel');
	}
	
	
	function header2(){
		$data = array();
		return $this->load->view('global/header2',$data,true);
	}
	
	public function index()
	 {	
		$d=date("Y-m-d H:i:s");

		$query = $this->mymodel->get_view($d);		
		$result['view']='';
		$result['event_start']='';
		$result['event_finish']='';
		foreach($query as $row) {
		$result['view']=$row->view;	 
		$result['event_start']=$row->event_start;	 
		$result['event_finish']=$row->event_finish;	 
		}
		
		$query1 = $this->mymodel->get_view1($d);	
		foreach($query1 as $row1) {		
		$result1['event_start']=$row1->event_start;
		$result1['event_finish']=$row1->event_finish;	 
		}
		
		$query2 = $this->mymodel->get_view2($d);	
		foreach($query2 as $row2) {	
		$result2['event_start']=$row2->event_start;
		$result2['event_finish']=$row2->event_finish;	 
		}
		
		$query3 = $this->mymodel->get_view3($d);	
		foreach($query3 as $row3) {
		$result3['event_start']=$row3->event_start;
		$result3['event_finish']=$row3->event_finish;	 
		}
		
		$query4 = $this->mymodel->get_view4($d);	
		foreach($query4 as $row4) {	
		$result4['event_start']=$row4->event_start;
		$result4['event_finish']=$row4->event_finish;	 
		}
		/*
		echo $d;
		echo "<br>".$result1['event_finish'].">".$result1['event_start']."<br>";
		echo $result2['event_finish'].">".$result2['event_start']."<br>";
		echo $result3['event_finish'].">".$result3['event_start']."<br>";
		echo $result4['event_finish'];
		*/
		
		if(($result1['event_finish'] >= $d) &&($result1['event_start'] <= $d)){		
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result1['event_finish']));       
			$comp = array(
				'content' => $this->load->view('early_bird/phase1',$data,true),
				'header' => $this->header2(),
				'footer' => '',			
			);
			$this->load->view('layout/index',$comp);
		}else if($result2['event_finish']>=$d && $result2['event_start'] <= $d){		
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result2['event_finish']));				
			$comp = array(
				'content' => $this->load->view('early_bird/phase2',$data,true),
				'header' => $this->header2(),
				'footer' => '',			
			);
			$this->load->view('layout/index',$comp);  
		}else if($result3['event_finish']>= $d && $result3['event_start'] <= $d){			
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result3['event_finish']));		
			$comp = array(
				'content' => $this->load->view('early_bird/phase3',$data,true),
				'header' => $this->header2(),						
				'footer' => '',
			);
			$this->load->view('layout/index',$comp);  
		}else if($result4['event_finish']>= $d && $result4['event_start'] <= $d){			
			$data['event_time'] = date("Y-m-d H:i:s",strtotime($result4['event_finish']));
			$comp = array(
				'content' => $this->load->view('early_bird/phase4',$data,true),
				'header' => $this->header2(),
				'footer' => '',
			);
		$this->load->view('layout/index',$comp);  
		}else			
		{
			$this->load->view('early_bird/index',$data);
			echo "<br>error";
		}
		
	 }
	 
	
	 function phase01() {	
		$data = array();
		
		$d=date("Y-m-d H:i");
		
			
		//$data['event_time'] = date("Y-m-d H:m:i",strtotime($result['event_finish']));
		$data['event_time']="2016-05-19 18:59:00";
		$comp = array(
			'content' => $this->load->view('early_bird/bundling',$data,true),
			'header' => $this->header2(),
			'footer' => '',							
		);
		$this->load->view('layout/index',$comp);  
	 }
	 
	 
	 function phase02() {	
		$data = array();
	/*
		$d=date("Y-m-d H:i");
		$page="phase2";
		$query = $this->mymodel->get_page($d,$page);		
		$result['view']='';
		$result['event_start']='';
		$result['event_finish']='';
		foreach($query as $row) {
		$result['view']=$row->view;	 
		$result['event_start']=$row->event_start;	 
		$result['event_finish']=$row->event_finish;	 
		}
		$data['event_time'] = date("Y-m-d H:m:i",strtotime($result['event_finish']));
		*/
		$data['event_time']="2016-05-16 18:59:00";
		$comp = array(
			'content' => $this->load->view('early_bird/phase2',$data,true),
			'header' => $this->header2(),
			'footer' => '',						
		);
		$this->load->view('layout/index',$comp);  
	 }
	 
	 function phase03() {	
		$data = array();
		
		$d=date("Y-m-d H:i");
		$page="phase3";
		$query = $this->mymodel->get_page($d,$page);		
		$result['view']='';
		$result['event_start']='';
		$result['event_finish']='';
		foreach($query as $row) {
		$result['view']=$row->view;	 
		$result['event_start']=$row->event_start;	 
		$result['event_finish']=$row->event_finish;	 
		}
		$result['view'];
		if($result['view']=='phase3'){
		$data['event_time'] = date("Y-m-d H:m:i",strtotime($result['event_finish']));
		
		//$data['event_time']="2016-05-16 12:35:00";
		$comp = array(
			'content' => $this->load->view('early_bird/phase3',$data,true),
			'header' => $this->header2(),						
		);
		
		$this->load->view('layout/index',$comp);  
		}
	 }
	 
	 
	 function phase04() {	
		$data = array();
		
		$d=date("Y-m-d H:i");
		
		$query = $this->mymodel->get_page($d);		
		$result['view']='';
		$result['event_start']='';
		$result['event_finish']='';
		foreach($query as $row) {
		$result['view']=$row->view;	 
		$result['event_start']=$row->event_start;	 
		$result['event_finish']=$row->event_finish;	 
		}
		if($result['view']=='phase4'){
			echo "cek";
		echo $result['view'];die;
		$data['event_time'] = date("Y-m-d H:m:i",strtotime($result['event_finish']));
		//$data['event_time']="2016-05-16 12:05:00";
		$comp = array(
			'content' => $this->load->view('early_bird/phase4',$data,true),
			'header' => $this->header2(),						
			'footer' => '',
		);
		$this->load->view('layout/index',$comp);  
		}
	 }	
	 function antara() {
	 	$data = array();
		
		$d=date("Y-m-d H:i");
		
		$data['event_time']="2016-05-17 12:05:00";
		
		$comp = array(
			'content' => $this->load->view('early_bird/bundling',$data,true),
			'header' => $this->header2(),						
			'footer' => '',
		);
		$this->load->view('layout/index',$comp);  
	 }
	
}

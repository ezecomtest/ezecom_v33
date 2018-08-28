<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ezebiz extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
        $this->load->library('encrypt');
		$this->load->model('frontend/homepage_m');
		$this->load->helper(array('form', 'url'));
        date_default_timezone_set("Asia/Bangkok");
        
    }
	public function index(){
		$this->ezebiz();
	}
	public function ezebiz(){
		if($this->session->userdata("language")==1){
			$data['title'] = "EzeBiz";
			$data['active']= "EzeBiz";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz',$data);
		}
		
		if($this->session->userdata("language")==3){
			$data['title'] = "EzeBiz";
			$data['active']= "EzeBiz";
			$lan = 3;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz_ch_v',$data);
		}
		
		if($this->session->userdata("language")==""){
			$data['title'] = "EzeBiz";
			$data['active']= "EzeBiz";
			$lan = 1;
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezebiz',$data);
		}
	}

}
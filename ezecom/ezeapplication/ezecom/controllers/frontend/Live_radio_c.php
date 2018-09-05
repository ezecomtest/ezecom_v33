<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live_radio_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->model('frontend/homepage_m');
        $this->load->model('frontend/live_radio_m');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set("Asia/Bangkok");
        
    }

	
	public function index()
	{
		$this->live_radio();
	}
	public function live_radio(){
		
		if($this->session->userdata("language") ==1){
			$data['active']='Live Radio Cambodia';
			$data['title'] = "Live Radio Cambodia";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['schedules']=$this->live_radio_m->get_all_schedules();
			$data['radio_group']=$this->live_radio_m->get_radio_group();
			$data['radio']=$this->live_radio_m->get_radio();
			$data['default_radio']=$this->live_radio_m->get_default_radio();
			$this->load->view('frontend/live_radio_v',$data);
		}
		
		if($this->session->userdata("language") == 3){
			$data['active']='Live Radio Cambodia';
			$data['title'] = "Live Radio Cambodia";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['schedules']=$this->live_radio_m->get_all_schedules();
			$data['radio_group']=$this->live_radio_m->get_radio_group();
			$data['radio']=$this->live_radio_m->get_radio();
			$data['default_radio']=$this->live_radio_m->get_default_radio();
			$this->load->view('frontend/live_radio_ch_v',$data);
		}
		
		if($this->session->userdata("language") == ""){
			$data['active']='Live Radio Cambodia';
			$data['title'] = "Live Radio Cambodia";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$data['schedules']=$this->live_radio_m->get_all_schedules();
			$data['radio_group']=$this->live_radio_m->get_radio_group();
			$data['radio']=$this->live_radio_m->get_radio();
			$data['default_radio']=$this->live_radio_m->get_default_radio();
			$this->load->view('frontend/live_radio_v',$data);
		}

	}
}

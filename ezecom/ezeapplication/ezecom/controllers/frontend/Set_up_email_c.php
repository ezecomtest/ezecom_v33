<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_up_email_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
		$this->load->model('frontend/homepage_m');
    }

	public function index(){
		$this->set_up_email();
	}

	public function set_up_email(){
		$data['title'] = "Set Up Email";
		$data['active'] = "Set Up Email";
		$lan = $this->session->userdata("language");
        $data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/set_up_email_v',$data);
	}
}

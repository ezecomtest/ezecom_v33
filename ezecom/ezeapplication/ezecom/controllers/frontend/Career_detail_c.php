<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career_detail_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->model('frontend/homepage_m');
        $this->load->model('frontend/career_m');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set("Asia/Bangkok");
    }

	public function career($id){
		$title_strrep = strtoupper(str_replace('-', ' ', $id));
		$data['title'] = "Career";
		$data['active'] = " ";
		$lan = $this->session->userdata("language");
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$data['get_title'] = $this->career_m->get_career_detail($title_strrep);
		$data['career'] = $this->career_m->get_career();
		$this->load->view('frontend/career_detail',$data);

	}
}

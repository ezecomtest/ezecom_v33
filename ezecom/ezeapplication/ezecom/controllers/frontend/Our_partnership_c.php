<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_partnership_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->helper(array('form', 'url'));
        $this->load->model('frontend/homepage_m');
        date_default_timezone_set("Asia/Bangkok");
    }

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
	public function index()
	{
		$this->our_partnership();
	}
	public function our_partnership(){
		if($this->session->userdata("language")==1){
		$data['title'] = "Our Partnership";
		$data['active'] = "Our Company";
		$lan = $this->session->userdata("language");
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_partnership_v',$data);
		}
		if($this->session->userdata("language")==2){
		$data['title'] = "Our Partnership";
		$data['active'] = "Our Company";
		$lan = $this->session->userdata("language");
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_partnership_kh_v',$data);
		}
		if($this->session->userdata("language")==3){
		$data['title'] = "Our Partnership";
		$data['active'] = "Our Company";
		$lan = $this->session->userdata("language");
		$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
		$this->load->view('frontend/our_partnership_ch_v',$data);
		}
	}
	
	public function ezecampus(){
		if($this->session->userdata("language")==1){
			$data['title'] = "EzeCampus";
			$data['active'] = "EzeCampus";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezecampus',$data);
		}
		
		/* if($this->session->userdata("language")==2){
			$data['title'] = "Our Partnership";
			$data['active'] = "Our Company";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezecampus',$data);
		}
		if($this->session->userdata("language")==3){
			$data['title'] = "Our Partnership";
			$data['active'] = "Our Company";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezecampus',$data);
		} */
		
		if($this->session->userdata("language")==""){
			$data['title'] = "EzeCampus";
			$data['active'] = "EzeCampus";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/ezecampus',$data);
		}
	}
	
	public function student_discount(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Student Discount";
			$data['active'] = "Student Discount";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/student_discount',$data);
		}
		if($this->session->userdata("language")==""){
			$data['title'] = "Student Discount";
			$data['active'] = "Student Discount";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/student_discount',$data);
		}
	}
}


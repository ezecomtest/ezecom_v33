<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us_c extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->model('frontend/homepage_m');
        $this->load->helper(array('form', 'url'));
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
		$this->contact_us();
	}
	public function contact_us(){
		if($this->session->userdata("language")==1){
			$data['title'] = "Contact Us";
			$data['active']="Contact Us";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/contact_us_v',$data);
		}
		if($this->session->userdata("language")==2){
			$data['title'] = "ទំនាក់ទំនង";
			$data['active']="Contact Us";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/contact_us_kh_v',$data);
		}
		if($this->session->userdata("language")==3){
			$data['title'] = "Contact Us";
			$data['active']="Contact Us";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/contact_us_ch_v',$data);
		}
		if($this->session->userdata("language")==""){
			$data['title'] = "Contact Us";
			$data['active']="Contact Us";
			$lan = $this->session->userdata("language");
			$data['feature_content'] = $this->homepage_m->get_feature_content($lan);
			$this->load->view('frontend/contact_us_v',$data);
		}

	}

}
